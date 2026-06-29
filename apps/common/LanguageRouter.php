<?php
namespace app\common;

use core\basic\Config;

class LanguageRouter
{
    private static $booted = false;
    private static $context = array();
    private static $areas = array();

    public static function isEnabled()
    {
        return (string) Config::get('multilingual_routing_enabled') === '1';
    }

    public static function boot()
    {
        if (self::$booted) {
            return self::$context;
        }

        self::$areas = self::normalizeAreas(Config::get('lgs') ?: array());
        self::$context = self::isEnabled() ? self::resolveRequest() : self::resolveLegacyRequest();
        self::$booted = true;

        return self::$context;
    }

    public static function resolveRequest()
    {
        $scheme = self::getCurrentScheme();
        $host = self::normalizeHost(isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '');
        $urlPath = self::normalizePath(parse_url(isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/', PHP_URL_PATH));
        $businessPath = self::extractBusinessPath();
        $globalHost = self::normalizeHost(Config::get('global_primary_domain'));
        $defaultArea = self::getDefaultArea();
        $trustedHosts = self::getTrustedHosts();

        if ($trustedHosts && ! in_array($host, $trustedHosts, true)) {
            http_response_code(400);
            exit('Bad Request: untrusted host');
        }

        $area = self::resolveAreaByHost($host);
        $entryType = 'default';
        $basePath = '';
        $routePath = trim($businessPath, '/');

        if ($area) {
            $entryType = 'domain';
            $firstSegment = self::firstPathSegment($businessPath);
            $directoryArea = self::resolveAreaByDirectory($firstSegment);
            if ($directoryArea) {
                if ($directoryArea['acode'] === $area['acode'] && self::normalizeDirectory(isset($area['directory']) ? $area['directory'] : '')) {
                    self::redirect(self::stripLanguageDirectory($urlPath, $firstSegment), 301);
                }
                self::notFound();
            }
        } elseif ($globalHost && $host === $globalHost) {
            $firstSegment = self::firstPathSegment($businessPath);
            $directoryArea = self::resolveAreaByDirectory($firstSegment);
            if ($directoryArea) {
                $entryType = 'directory';
                $area = $directoryArea;
                $basePath = '/' . self::normalizeDirectory($firstSegment);
                $routePath = self::stripLanguageDirectory($businessPath, $firstSegment);

                $nextSegment = self::firstPathSegment($routePath);
                if ($nextSegment && $nextSegment === self::normalizeDirectory($firstSegment)) {
                    self::redirect($basePath . '/' . self::stripLanguageDirectory($routePath, $nextSegment), 301);
                }
            } else {
                $area = $defaultArea;
            }
        } else {
            $area = $defaultArea;
        }

        $area = $area ?: self::firstArea();
        $areaCode = isset($area['acode']) ? $area['acode'] : '';

        return array(
            'area_code' => $areaCode,
            'entry_type' => $entryType,
            'entry_host' => $host,
            'scheme' => $scheme,
            'base_path' => $basePath,
            'original_path' => $urlPath,
            'route_path' => trim($routePath, '/'),
            'is_global_host' => $globalHost && $host === $globalHost,
            'is_domain_entry' => $entryType === 'domain',
            'is_directory_entry' => $entryType === 'directory'
        );
    }

    private static function resolveLegacyRequest()
    {
        $area = self::findAreaByCode(function_exists('cookie') ? cookie('lg') : '') ?: self::getDefaultArea() ?: self::firstArea();
        return array(
            'area_code' => isset($area['acode']) ? $area['acode'] : '',
            'entry_type' => 'legacy',
            'entry_host' => self::normalizeHost(isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : ''),
            'scheme' => self::getCurrentScheme(),
            'base_path' => '',
            'original_path' => self::normalizePath(parse_url(isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/', PHP_URL_PATH)),
            'route_path' => trim(self::extractBusinessPath(), '/'),
            'is_global_host' => false,
            'is_domain_entry' => false,
            'is_directory_entry' => false
        );
    }

    public static function resolveAreaByHost($host)
    {
        $host = self::normalizeHost($host);
        foreach (self::$areas as $area) {
            $domain = self::normalizeHost(isset($area['domain']) ? $area['domain'] : '');
            if ($domain && $domain === $host) {
                return $area;
            }
        }
        return null;
    }

    public static function resolveAreaByDirectory($directory)
    {
        $directory = self::normalizeDirectory($directory);
        if (! $directory) {
            return null;
        }
        foreach (self::$areas as $area) {
            $areaDirectory = self::normalizeDirectory(isset($area['directory']) ? $area['directory'] : '');
            if ($areaDirectory && $areaDirectory === $directory) {
                return $area;
            }
        }
        return null;
    }

    public static function getContext()
    {
        return self::$booted ? self::$context : self::boot();
    }

    public static function getCurrentAreaCode()
    {
        $context = self::getContext();
        return $context['area_code'];
    }

    public static function getCurrentEntryType()
    {
        $context = self::getContext();
        return $context['entry_type'];
    }

    public static function getCurrentHost()
    {
        $context = self::getContext();
        return $context['entry_host'];
    }

    public static function getCurrentScheme()
    {
        if (function_exists('is_https') && is_https()) {
            return 'https';
        }
        if (! empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off') {
            return 'https';
        }
        return 'http';
    }

    public static function getCurrentBasePath()
    {
        $context = self::getContext();
        return $context['base_path'];
    }

    public static function getRoutePath()
    {
        $context = self::getContext();
        return $context['route_path'];
    }

    public static function stripLanguageDirectory($path, $directory = null)
    {
        $path = self::normalizePath($path);
        $directory = self::normalizeDirectory($directory ?: self::firstPathSegment($path));
        if (! $directory) {
            return trim($path, '/');
        }
        $pattern = '#^/' . preg_quote($directory, '#') . '(/|$)#i';
        return trim(preg_replace($pattern, '/', $path, 1), '/');
    }

    public static function buildAreaHomeUrl($areaCode, $entry = null, $absolute = false)
    {
        return self::buildAreaUrl($areaCode, '', $entry, $absolute);
    }

    public static function buildAreaUrl($areaCode, $path = '', $entry = null, $absolute = false)
    {
        $area = self::findAreaByCode($areaCode);
        if (! $area) {
            return '';
        }

        $target = self::resolveTargetEntry($area, $entry);
        if (! $target) {
            return '';
        }

        $context = self::getContext();
        $path = trim((string) $path, '/');
        $url = self::joinUrlPath($target['base_path'], $path);

        if ($absolute || $target['host'] !== $context['entry_host']) {
            return $context['scheme'] . '://' . $target['host'] . $url;
        }
        return $url;
    }

    public static function buildLanguageSwitchUrl($areaCode, $entry = null)
    {
        $area = self::findAreaByCode($areaCode);
        if (! $area) {
            return '';
        }

        $target = self::resolveTargetEntry($area, $entry);
        if (! $target) {
            return '';
        }

        $query = http_build_query(array(
            'code' => $areaCode,
            'entry' => $target['entry']
        ));
        $context = self::getContext();
        return $context['scheme'] . '://' . $target['host'] . '/language/switch?' . $query;
    }

    public static function getCacheContextKey()
    {
        $context = self::getContext();
        return implode('|', array(
            $context['entry_host'],
            $context['area_code'],
            $context['entry_type'],
            $context['base_path'],
            $context['route_path'],
            self::normalizeQuery(isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '')
        ));
    }

    public static function isStaticOrSystemPath($path)
    {
        $first = self::firstPathSegment('/' . trim($path, '/'));
        return in_array($first, self::reservedDirectories(), true);
    }

    public static function isKnownLanguageDirectory($directory)
    {
        return self::resolveAreaByDirectory($directory) !== null;
    }

    public static function isConfiguredEntryHost($host)
    {
        $host = self::normalizeHost($host);
        return in_array($host, self::getTrustedHosts(), true);
    }

    public static function normalizeHost($host)
    {
        $host = strtolower(trim((string) $host));
        $host = preg_replace('#^https?://#i', '', $host);
        $host = preg_replace('#/.*$#', '', $host);
        $host = preg_replace('#:\d+$#', '', $host);
        return rtrim($host, '.');
    }

    public static function normalizeDirectory($directory)
    {
        $directory = strtolower(trim((string) $directory));
        return trim($directory, "/ \t\n\r\0\x0B");
    }

    public static function getAreas()
    {
        return self::$booted ? self::$areas : (self::boot() ? self::$areas : array());
    }

    public static function resetForTesting()
    {
        self::$booted = false;
        self::$context = array();
        self::$areas = array();
    }

    public static function reservedDirectories()
    {
        return array(
            'admin', 'api', 'apps', 'config', 'core', 'data', 'runtime', 'static',
            'skin', 'style', 'template', 'upload', 'uploads', 'rewrite', 'search',
            'tag', 'member', 'form', 'message', 'comment', 'sitemap', 'robots.txt',
            'index.php', 'admin.php', 'language'
        );
    }

    private static function normalizeAreas($areas)
    {
        $normalized = array();
        foreach ($areas as $area) {
            if (is_object($area)) {
                $area = get_object_vars($area);
            }
            if (! is_array($area) || empty($area['acode'])) {
                continue;
            }
            $area['domain'] = self::normalizeHost(isset($area['domain']) ? $area['domain'] : '');
            $area['directory'] = self::normalizeDirectory(isset($area['directory']) ? $area['directory'] : '');
            $normalized[$area['acode']] = $area;
        }
        return $normalized;
    }

    private static function getTrustedHosts()
    {
        $hosts = array();
        foreach (array(Config::get('global_primary_domain'), Config::get('wap_domain')) as $host) {
            $host = self::normalizeHost($host);
            if ($host) {
                $hosts[] = $host;
            }
        }
        foreach (explode(',', (string) Config::get('extra_trusted_hosts')) as $host) {
            $host = self::normalizeHost($host);
            if ($host) {
                $hosts[] = $host;
            }
        }
        foreach (self::$areas as $area) {
            if (! empty($area['domain'])) {
                $hosts[] = self::normalizeHost($area['domain']);
            }
        }
        return array_values(array_unique($hosts));
    }

    private static function getDefaultArea()
    {
        foreach (self::$areas as $area) {
            if (! empty($area['is_default'])) {
                return $area;
            }
        }
        return self::firstArea();
    }

    private static function firstArea()
    {
        foreach (self::$areas as $area) {
            return $area;
        }
        return array();
    }

    private static function findAreaByCode($areaCode)
    {
        return isset(self::$areas[$areaCode]) ? self::$areas[$areaCode] : null;
    }

    private static function resolveTargetEntry($area, $entry = null)
    {
        $entry = $entry ?: self::selectEntryForArea($area);
        $globalHost = self::normalizeHost(Config::get('global_primary_domain'));

        if ($entry === 'directory') {
            if (empty($area['directory']) || ! $globalHost) {
                return null;
            }
            return array('entry' => 'directory', 'host' => $globalHost, 'base_path' => '/' . $area['directory']);
        }

        if ($entry === 'domain') {
            if (empty($area['domain'])) {
                return null;
            }
            return array('entry' => 'domain', 'host' => self::normalizeHost($area['domain']), 'base_path' => '');
        }

        if ($entry === 'global') {
            $defaultArea = self::getDefaultArea();
            if (! $globalHost || empty($defaultArea['acode']) || $defaultArea['acode'] !== $area['acode']) {
                return null;
            }
            return array('entry' => 'global', 'host' => $globalHost, 'base_path' => '');
        }

        return null;
    }

    private static function selectEntryForArea($area)
    {
        if (! empty($area['directory']) && self::normalizeHost(Config::get('global_primary_domain'))) {
            return 'directory';
        }
        if (! empty($area['domain'])) {
            return 'domain';
        }
        $defaultArea = self::getDefaultArea();
        if (! empty($defaultArea['acode']) && $defaultArea['acode'] === $area['acode']) {
            return 'global';
        }
        return '';
    }

    private static function extractBusinessPath()
    {
        $path = parse_url(isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/', PHP_URL_PATH);
        $path = self::normalizePath($path);
        if ($path !== '/') {
            return trim($path, '/');
        }

        $query = isset($_SERVER['QUERY_STRING']) ? trim($_SERVER['QUERY_STRING']) : '';
        if ($query && strpos($query, '=') === false) {
            $query = preg_replace('/[&#].*$/', '', $query);
            return trim($query, '/');
        }

        return '';
    }

    private static function firstPathSegment($path)
    {
        $path = trim((string) $path, '/');
        if ($path === '') {
            return '';
        }
        $parts = explode('/', $path);
        return strtolower($parts[0]);
    }

    private static function normalizePath($path)
    {
        $path = '/' . trim((string) $path, '/');
        return preg_replace('#/+#', '/', $path);
    }

    private static function joinUrlPath($basePath, $path)
    {
        $basePath = '/' . trim((string) $basePath, '/');
        $basePath = $basePath === '/' ? '' : $basePath;
        $path = trim((string) $path, '/');
        $url = $path === '' ? ($basePath ?: '/') : $basePath . '/' . $path;
        if (substr($url, -1) !== '/' && ! preg_match('/\.[a-z0-9]+$/i', $url)) {
            $url .= '/';
        }
        return $url;
    }

    private static function normalizeQuery($query)
    {
        parse_str((string) $query, $params);
        foreach (array_keys($params) as $key) {
            if (preg_match('/^(utm_source|utm_medium|utm_campaign|utm_term|utm_content|gclid|fbclid)$/i', $key)) {
                unset($params[$key]);
            }
        }
        ksort($params);
        return http_build_query($params);
    }

    private static function redirect($path, $status = 301)
    {
        $scheme = self::getCurrentScheme();
        $host = self::normalizeHost(isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '');
        $query = isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] !== '' ? '?' . $_SERVER['QUERY_STRING'] : '';
        $path = self::joinUrlPath('', $path);
        header('Location: ' . $scheme . '://' . $host . $path . $query, true, $status);
        exit();
    }

    private static function notFound()
    {
        http_response_code(404);
        exit('404 Not Found');
    }
}
