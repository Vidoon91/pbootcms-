<?php
namespace app\home\controller;

use app\common\HomeController;
use app\common\LanguageRouter;

class LanguageController extends HomeController
{
    public function index()
    {
        if (isset($_SERVER['REQUEST_METHOD']) && strtoupper($_SERVER['REQUEST_METHOD']) !== 'GET') {
            _404('The requested language switch method is not allowed.');
        }

        $code = get('code', 'var');
        $entry = get('entry', 'var');
        if ($entry && ! in_array($entry, array('global', 'directory', 'domain'), true)) {
            _404('The requested language entry is not allowed.');
        }

        $target = LanguageRouter::buildAreaHomeUrl($code, $entry ?: null, true);

        if (! $target) {
            _404('The requested language does not exist.');
        }

        cookie('lg', $code);
        cookie('preferred_language', $code);
        cookie('language_selected_manually', '1');
        header('Location: ' . $target, true, 302);
        exit();
    }
}
