<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{pboot:sitetitle} - {pboot:sitesubtitle}</title>
    <meta name="description" content="{sort:description}">
    <meta name="keywords" content="{sort:keywords}">
    <meta name="robots" content="index, follow">
    
    <!-- 全局字体与图标库 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;family=Noto+Sans+SC:wght@300;400;500;700&amp;display=swap">
    
    <!-- 页面样式文件 -->
    <link rel="stylesheet" href="/skin/css/base.css">
    <link rel="stylesheet" href="/skin/css/topbar.css">
    <link rel="stylesheet" href="/skin/css/sidebar.css">
    <link rel="stylesheet" href="/skin/css/index.css">
    <link rel="stylesheet" href="/skin/css/footer.css">
    <link rel="stylesheet" href="/skin/css/mobile-tabbar.css">
    <link rel="stylesheet" href="/skin/css/back-to-top.css">
</head>
<body class="sidebar-embedded-page">
    <!-- 顶部信息栏 -->
<!-- TOPBAR_START 顶部栏组件 -->
<script>
(function () {
    var theme = '';
    try {
        theme = window.localStorage.getItem('theme') || '';
    } catch (error) {
        theme = '';
    }
    if (theme !== 'dark' && theme !== 'light') {
        theme = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
    }
    document.documentElement.setAttribute('data-theme', theme);
    document.documentElement.style.colorScheme = theme;
}());
</script>
    <!-- 顶部信息栏 -->
<!-- TOPBAR_START -->
<div class="top-bar">
    <div class="top-bar-content">
        <div class="top-bar-city">
            <div class="topbar-city-picker" id="topbarCityPicker">
                <button type="button" class="topbar-city-trigger" id="topbarCityTrigger">
                    <i class="fas fa-map-marker-alt location-icon" aria-hidden="true"></i>
                    <span id="topbarCurrentCity">&#35199;&#23433;</span>
                    <i class="fas fa-chevron-down topbar-city-arrow" aria-hidden="true"></i>
                </button>
                <div class="topbar-city-dropdown" id="topbarCityDropdown">
                    <div class="topbar-city-section">
                        <div class="topbar-city-title">&#28909;&#38376;&#22478;&#24066;</div>
                        <div class="topbar-city-grid">
                            <a href="/city/beijing/" class="topbar-city-item topbar-hot-city">&#21271;&#20140;</a>
                            <a href="/city/shanghai/" class="topbar-city-item topbar-hot-city">&#19978;&#28023;</a>
                            <a href="/city/guangzhou/" class="topbar-city-item topbar-hot-city">&#24191;&#24030;</a>
                            <a href="/city/shenzhen/" class="topbar-city-item topbar-hot-city">&#28145;&#22323;</a>
                            <a href="/city/hangzhou/" class="topbar-city-item topbar-hot-city">&#26477;&#24030;</a>
                            <a href="/city/nanjing/" class="topbar-city-item topbar-hot-city">&#21335;&#20140;</a>
                            <a href="/city/suzhou/" class="topbar-city-item topbar-hot-city">&#33487;&#24030;</a>
                            <a href="/city/tianjin/" class="topbar-city-item topbar-hot-city">&#22825;&#27941;</a>
                            <a href="/city/chongqing/" class="topbar-city-item topbar-hot-city">&#37325;&#24198;</a>
                            <a href="/city/chengdu/" class="topbar-city-item topbar-hot-city">&#25104;&#37117;</a>
                            <a href="/city/wuhan/" class="topbar-city-item topbar-hot-city">&#27494;&#27721;</a>
                            <a href="/city/xian/" class="topbar-city-item topbar-hot-city">&#35199;&#23433;</a>
                        </div>
                    </div>
                    <div class="topbar-city-section">
                        <div class="topbar-city-title">&#20840;&#37096;&#22478;&#24066;</div>
                        <div class="topbar-city-grid">
                            <a href="/city/beijing/" class="topbar-city-item">&#21271;&#20140;</a>
                            <a href="/city/shanghai/" class="topbar-city-item">&#19978;&#28023;</a>
                            <a href="/city/guangzhou/" class="topbar-city-item">&#24191;&#24030;</a>
                            <a href="/city/shenzhen/" class="topbar-city-item">&#28145;&#22323;</a>
                            <a href="/city/tianjin/" class="topbar-city-item">&#22825;&#27941;</a>
                            <a href="/city/chongqing/" class="topbar-city-item">&#37325;&#24198;</a>
                            <a href="/city/hangzhou/" class="topbar-city-item">&#26477;&#24030;</a>
                            <a href="/city/nanjing/" class="topbar-city-item">&#21335;&#20140;</a>
                            <a href="/city/suzhou/" class="topbar-city-item">&#33487;&#24030;</a>
                            <a href="/city/wuhan/" class="topbar-city-item">&#27494;&#27721;</a>
                            <a href="/city/xian/" class="topbar-city-item active">&#35199;&#23433;</a>
                            <a href="/city/hefei/" class="topbar-city-item">&#21512;&#32933;</a>
                            <a href="/city/fuzhou/" class="topbar-city-item">&#31119;&#24030;</a>
                            <a href="/city/changsha/" class="topbar-city-item">&#38271;&#27801;</a>
                            <a href="/city/chengdu/" class="topbar-city-item">&#25104;&#37117;</a>
                            <a href="/city/zhengzhou/" class="topbar-city-item">&#37073;&#24030;</a>
                            <a href="/city/jinan/" class="topbar-city-item">&#27982;&#21335;</a>
                            <a href="/city/qingdao/" class="topbar-city-item">&#38738;&#23707;</a>
                            <a href="/city/shenyang/" class="topbar-city-item">&#27784;&#38451;</a>
                            <a href="/city/dalian/" class="topbar-city-item">&#22823;&#36830;</a>
                            <a href="/city/harbin/" class="topbar-city-item">&#21704;&#23572;&#28392;</a>
                            <a href="/city/changchun/" class="topbar-city-item">&#38271;&#26149;</a>
                            <a href="/city/shijiazhuang/" class="topbar-city-item">&#30707;&#23478;&#24196;</a>
                            <a href="/city/taiyuan/" class="topbar-city-item">&#22826;&#21407;</a>
                            <a href="/city/huhehaote/" class="topbar-city-item">&#21628;&#21644;&#28009;&#29305;</a>
                            <a href="/city/nanchang/" class="topbar-city-item">&#21335;&#26124;</a>
                            <a href="/city/xiamen/" class="topbar-city-item">&#21414;&#38376;</a>
                            <a href="/city/ningbo/" class="topbar-city-item">&#23425;&#27874;</a>
                            <a href="/city/wuxi/" class="topbar-city-item">&#26080;&#38177;</a>
                            <a href="/city/dongguan/" class="topbar-city-item">&#19996;&#33694;</a>
                            <a href="/city/foshan/" class="topbar-city-item">&#20315;&#23665;</a>
                            <a href="/city/nanning/" class="topbar-city-item">&#21335;&#23425;</a>
                            <a href="/city/kunming/" class="topbar-city-item">&#26118;&#26126;</a>
                            <a href="/city/guiyang/" class="topbar-city-item">&#36149;&#38451;</a>
                            <a href="/city/lanzhou/" class="topbar-city-item">&#20848;&#24030;</a>
                            <a href="/city/yinchuan/" class="topbar-city-item">&#38134;&#24029;</a>
                            <a href="/city/xining/" class="topbar-city-item">&#35199;&#23425;</a>
                            <a href="/city/urumqi/" class="topbar-city-item">&#20044;&#40065;&#26408;&#40784;</a>
                            <a href="/city/haikou/" class="topbar-city-item">&#28023;&#21475;</a>
                            <a href="/city/sanya/" class="topbar-city-item">&#19977;&#20122;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="welcome-text">
            <i class="fas fa-handshake"></i>
            <span>Welcome To WishPower</span>
            <!--<span>Welcome To WishPower - Source Factory for Power Insulation Solutions & OEM</span>-->
        </div>

        <nav class="topbar-main-nav" id="topbarMainNav" aria-label="Topbar navigation">
            <a href="/" class="topbar-nav-link {pboot:if(0=='{sort:scode}')}active{/pboot:if}">Home</a>
            {pboot:nav}
            <div class="topbar-nav-item" data-topbar-nav-item data-soncount="[nav:soncount]">
                <a href="[nav:link]" class="topbar-nav-link{pboot:if('[nav:scode]'=='{sort:tcode}')} active{/pboot:if}{pboot:if('[nav:scode]'=='{sort:scode}')} active{/pboot:if}">
                    <span>[nav:subname]</span>
                    <i class="fas fa-chevron-down topbar-nav-arrow" aria-hidden="true"></i>
                </a>
                <div class="topbar-nav-dropdown">
                    <div class="topbar-nav-dropdown-inner">
                        <div class="topbar-nav-categories">
                            {pboot:2nav parent=[nav:scode]}
                            <a href="[2nav:link]" class="topbar-nav-category {pboot:if([2nav:i]==1)}active{/pboot:if}" data-topbar-category="[2nav:scode]">
                                <span class="topbar-nav-category-icon" data-icon="[2nav:ico]" aria-hidden="true"><i class="fas fa-circle"></i></span>
                                <span class="topbar-nav-category-name">[2nav:subname]</span>
                            </a>
                            {/pboot:2nav}
                        </div>
                        <div class="topbar-nav-preview">
                            {pboot:2nav parent=[nav:scode]}
                            <div class="topbar-nav-panel {pboot:if([2nav:i]==1)}active{/pboot:if}" data-topbar-panel="[2nav:scode]">
                                {pboot:list scode=[2nav:scode] num=6 recommend=1}
                                <a href="[list:link]" class="topbar-nav-product">
                                    <span class="topbar-nav-product-tag">Top</span>
                                    <span class="topbar-nav-product-image">
                                        <img src="[list:ico]" alt="[list:title]" onerror="this.style.display='none'">
                                    </span>
                                    <span class="topbar-nav-product-info">
                                        <span class="topbar-nav-product-title">[list:title]</span>
                                        <span class="topbar-nav-product-desc">[list:subtitle]</span>
                                    </span>
                                </a>
                                {/pboot:list}
                            </div>
                            {/pboot:2nav}
                        </div>
                    </div>
                    <div class="topbar-nav-footer">
                        <a href="[nav:link]">View All [nav:subname] <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                        <div class="topbar-nav-contact">
                            <a href="tel:+86{pboot:companyphone}" class="topbar-nav-contact-link">
                                <i class="fas fa-phone-alt" aria-hidden="true"></i>
                                <span>Hotline: {pboot:companyphone}</span>
                            </a>
                            <a href="https://wa.me/86{pboot:companymobile}" target="_blank" class="topbar-nav-contact-link whatsapp">
                                <i class="fab fa-whatsapp" aria-hidden="true"></i>
                                <span>WhatsApp: +86 {pboot:companymobile}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {/pboot:nav}
        </nav>
        
        <div class="top-bar-links">
            <div class="topbar-social-menu" id="topbarSocialMenu">
                <button type="button" class="topbar-social-trigger" id="topbarSocialTrigger" aria-label="Social media" aria-expanded="false">
                    <i class="fas fa-share-alt" aria-hidden="true"></i>
                    <i class="fas fa-chevron-down topbar-social-arrow" aria-hidden="true"></i>
                </button>
                <div class="topbar-social-dropdown" id="topbarSocialDropdown">
                    <a href="https://www.youtube.com/@wishpower-videos" target="_blank" class="topbar-social-item youtube" aria-label="YouTube">
                        <i class="fab fa-youtube" aria-hidden="true"></i>
                        <span>YouTube</span>
                    </a>
                    <a href="https://www.tiktok.com/@wishpower1" target="_blank" class="topbar-social-item tiktok" aria-label="TikTok">
                        <i class="fab fa-tiktok" aria-hidden="true"></i>
                        <span>TikTok</span>
                    </a>
                    <a href="https://www.instagram.com/wishpower66/" target="_blank" class="topbar-social-item instagram" aria-label="Instagram">
                        <i class="fab fa-instagram" aria-hidden="true"></i>
                        <span>Instagram</span>
                    </a>
                    <a href="https://twitter.com/" target="_blank" class="topbar-social-item twitter" aria-label="Twitter X">
                        <i class="fab fa-twitter" aria-hidden="true"></i>
                        <span>Twitter/X</span>
                    </a>
                </div>
            </div>
            
            <button type="button" class="company-email" id="topEmailCopy" data-email="{pboot:companyemail}" aria-label="Copy email">
                <i class="fas fa-envelope"></i>
                <span class="email-copy-tip" id="topEmailCopyTip">&#24050;&#22797;&#21046;</span>
            </button>
            
            <div class="top-contact-buttons">
                <div class="top-contact-link quote" id="topQuoteBtn">Get a Quote</div>

                <button class="top-bar-theme-toggle" id="topThemeToggle" aria-label="切换主题">
                    <i class="fas fa-moon" id="topThemeIcon" aria-hidden="true"></i>
                </button>

                <div class="language-selector dropdown-container" id="languageSelector">
                    <button class="language-btn dropdown-trigger">
                        <i class="fas fa-globe" aria-hidden="true"></i>
                        <span class="language-text">EN</span>
                        <i class="fas fa-chevron-down arrow dropdown-arrow" aria-hidden="true"></i>
                    </button>
                    <div class="language-dropdown dropdown-panel">
                        <a href="/zh/" class="language-item active">
                            <div class="flag-icon flag-cn"></div>
                            <span class="language-name">中文</span>
                        </a>
                        <a href="/en/" class="language-item">
                            <div class="flag-icon flag-us"></div>
                            <span class="language-name">English</span>
                        </a>
                        <a href="/es/" class="language-item">
                            <div class="flag-icon flag-es"></div>
                            <span class="language-name">Español</span>
                        </a>
                        <a href="/ru/" class="language-item">
                            <div class="flag-icon flag-ru"></div>
                            <span class="language-name">Русский</span>
                        </a>
                        <a href="/de/" class="language-item">
                            <div class="flag-icon flag-de"></div>
                            <span class="language-name">Deutsch</span>
                        </a>
                        <a href="/fr/" class="language-item">
                            <div class="flag-icon flag-fr"></div>
                            <span class="language-name">Français</span>
                        </a>
                        <a href="/ja/" class="language-item">
                            <div class="flag-icon flag-jp"></div>
                            <span class="language-name">&#26085;&#26412;&#35486;</span>
                        </a>
                        <a href="/ko/" class="language-item">
                            <div class="flag-icon flag-kr"></div>
                            <span class="language-name">&#54620;&#44397;&#50612;</span>
                        </a>
                    </div>
                </div>
                <div class="topbar-search" id="topbarSearch">
                    <button type="button" class="topbar-search-trigger" id="topbarSearchTrigger" aria-label="Search" aria-expanded="false">
                        <i class="fas fa-search" aria-hidden="true"></i>
                    </button>
                    <div class="topbar-search-panel" id="topbarSearchPanel">
                        <input type="text" class="topbar-search-input" id="topbarSearchInput" placeholder="Search products...">
                        <button type="button" class="topbar-search-submit" id="topbarSearchSubmit" aria-label="Search">
                            <i class="fas fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- TOPBAR_END -->

<!-- TOPBAR_END 顶部栏组件结束 -->
    
    <!-- 主内容区 -->
<div class="main-content-wrapper">
    <div class="sidebar-embedded-aside">
<!-- SIDEBAR_START 侧边栏组件 -->
<script>
    (function() {
        if (window.matchMedia && window.matchMedia('(min-width: 769px)').matches) {
            document.body.classList.add('sidebar-collapsed');
        }
    })();
</script>
<!-- SIDEBAR_START -->
<div class="sidebar" id="sidebar">
    <button type="button" class="sidebar-desktop-toggle" id="sidebarDesktopToggle" aria-label="Expand sidebar" aria-expanded="false">
        <i class="fas fa-bars" aria-hidden="true"></i>
    </button>
    <div class="sidebar-content">
        <div class="sidebar-item">
            <span class="sidebar-icon"><i class="fas fa-home" aria-hidden="true"></i></span>
            <span><a href="/" style="color: inherit;">Home</a></span>
        </div>

        {pboot:nav}
        <div class="sidebar-nav-group" data-sidebar-group>
            <div class="sidebar-item">
                <span class="sidebar-icon" data-icon="[nav:ico]" data-title="[nav:subname]" data-index="[nav:i]"><i class="fas fa-circle" aria-hidden="true"></i></span>
                <span><a href="[nav:link]" style="color: inherit;">[nav:subname]</a></span>
                <button type="button" class="sidebar-subnav-toggle" aria-expanded="false" aria-label="Toggle [nav:subname] submenu">
                    <i class="fas fa-chevron-down" aria-hidden="true"></i>
                </button>
            </div>
            <div class="sidebar-subnav">
                {pboot:2nav parent=[nav:scode]}
                <a href="[2nav:link]" class="sidebar-subitem">[2nav:subname]</a>
                {/pboot:2nav}
            </div>
        </div>
        {/pboot:nav}
    </div>
</div>
<!-- SIDEBAR_END -->

<!-- SIDEBAR_END 侧边栏组件结束 -->
    </div>
    <div class="main-container">
        <div class="main-content">
            <div class="content-layout">
                <!-- 首页 Banner 轮播图 -->
                <div class="banner-container">
                    <div class="banner-slider">
                        <div class="banner-slide active" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('/static/upload/image/20260309/1773045047173377.jpg') center/cover">
                            <div class="banner-content">
                                <h2 class="banner-title">全球电力传输解决方案专家</h2>
                                <p class="banner-desc">WishPower专业生产高压绝缘子，为全球输电线路提供安全可靠的绝缘解决方案</p>
                                <a href="/products/" class="banner-link">查看产品 <i class="fas fa-arrow-right"></i></a>
                            </div>
                            <div class="banner-progress"></div>
                        </div>
                        
                        <div class="banner-slide" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('/static/upload/image/20260309/1773044883419335.jpg') center/cover">
                            <div class="banner-content">
                                <h2 class="banner-title">20年专业制造经验</h2>
                                <p class="banner-desc">拥有先进的生产设备和检测实验室，产品通过ISO9001认证，出口全球60多个国家</p>
                                <a href="/about-us/" class="banner-link">了解我们 <i class="fas fa-arrow-right"></i></a>
                            </div>
                            <div class="banner-progress"></div>
                        </div>
                        
                        <div class="banner-slide" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('/static/upload/image/20260311/1773214729454807.jpg') center/cover">
                            <div class="banner-content">
                                <h2 class="banner-title">定制化解决方案</h2>
                                <p class="banner-desc">根据客户需求提供个性化产品设计，满足不同电压等级和环境条件下的特殊要求</p>
                                <a href="/contact-us/" class="banner-link">获取报价 <i class="fas fa-arrow-right"></i></a>
                            </div>
                            <div class="banner-progress"></div>
                        </div>
                        
                        <button class="banner-nav banner-prev" aria-label="上一个">
                            <i class="fas fa-chevron-left" aria-hidden="true"></i>
                        </button>
                        <button class="banner-nav banner-next" aria-label="下一个">
                            <i class="fas fa-chevron-right" aria-hidden="true"></i>
                        </button>
                        
                        <div class="banner-indicators">
                            <div class="banner-indicator active" data-index="0"></div>
                            <div class="banner-indicator" data-index="1"></div>
                            <div class="banner-indicator" data-index="2"></div>
                        </div>
                    </div>
                </div>
                <!-- 公司简介与首页视频 -->
                <div class="company-intro-video" id="about">
                    <div class="intro-video-header">
                        <h2 class="intro-video-title">About WishPower</h2>
                        <div class="intro-video-subtitle">专业绝缘子制造商 | 成立于2003年</div>
                    </div>
                    <div class="intro-video-content">
                        <div class="intro-text-section">
                            <div class="intro-text">
                                <p>WishPower是一家专注于高压绝缘子研发、生产和销售的高新技术企业。公司成立于2003年，拥有20年的专业制造经验。</p>
                                <p>我们致力于为全球电力传输与配电系统提供安全可靠的绝缘解决方案。产品广泛应用于电网、电站、铁路、新能源等领域。</p>
                                <p>公司拥有完善的质量管理体系，通过ISO9001:2015认证，产品符合IEC、ANSI、GB等国际标准，并出口到全球60多个国家和地区。</p>
                            </div>
                            
                            <div class="intro-stats">
                                <div class="stat-item">
                                    <div class="stat-value">20+</div>
                                    <div class="stat-label">年行业经验</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-value">60+</div>
                                    <div class="stat-label">出口国家</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-value">500+</div>
                                    <div class="stat-label">客户案例</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-value">50+</div>
                                    <div class="stat-label">研发人员</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="intro-video-section">
                            <div class="video-container" id="videoContainer">
                                <div class="video-cover" style="background-image: url('/static/upload/image/20260309/1773045525158244.webp');"></div>
                                <div class="video-overlay">
                                    <h3 class="video-title">WishPower 绝缘子制造专家</h3>
                                    <p class="video-description">探索我们先进的生产设施、严格的质量控制流程和全球业务网络</p>
                                    <div class="video-play-container">
                                        <div class="video-play-btn" id="videoPlayBtn">
                                            <i class="fas fa-play"></i>
                                        </div>
                                        <div class="video-play-text">点击播放视频</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 工厂实拍相册 -->
                <div class="factory-album-section">
                    <div class="factory-album-header">
                        <div>
                            <h2 class="factory-album-title">Factory Gallery</h2>
                            <p class="factory-album-subtitle">Explore WishPower’s factory environment</p>
                        </div>
                            {pboot:sort scode=63}
                            <a href="[sort:link]" class="module-view-all">More <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                            {/pboot:sort}
                    </div>
                    
                    <div class="factory-slider-wrapper">
                        <button class="scroll-nudge left js-slider-prev" aria-label="向左轻推">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        
                        <div class="js-horizontal-slider" data-step="1" data-align="start" data-drag="true">
                            <div class="js-slider-track">
                                {pboot:pics scode=63 num=12}
                                <div class="js-slider-item factory-card">
                                    <div class="factory-image-container">
                                        <img src="[pics:src]" alt="[pics:title]" class="factory-image" loading="lazy">
                                        <div class="factory-hover-overlay">
                                            <div class="factory-hover-content">
                                                <h3 class="factory-hover-title">[pics:title]</h3>
                                                <p class="factory-hover-desc">Explore WishPower’s factory environment</p>
                                                {pboot:sort scode=63}
                                                <a href="[sort:link]" class="factory-details-btn">
                                                    <i class="fas fa-search-plus"></i>
                                                    View Details
                                                </a>
                                                {/pboot:sort}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {/pboot:pics}
                            </div>
                        </div>
                        
                        <button class="scroll-nudge right js-slider-next" aria-label="向右轻推">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
                <!-- 热门产品推荐 -->
                <div class="hot-products-carousel" id="products">
                        <div class="module-header">
                            {pboot:sort scode=2}
                            <div>
                                <h2 class="module-title">[sort:subname]</h2>
                                <p class="module-subtitle">Reliable power equipment for T&amp;D projects</p>
                            </div>
                            <a href="[sort:link]" class="module-view-all">More<i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                            {/pboot:sort}
                        </div>
                    
                        <div class="scroll-container">
                            <button class="scroll-nudge left js-slider-prev" aria-label="向左轻推">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                    
                            <div class="js-horizontal-slider" data-step="1" data-align="start" data-drag="true">
                                    <div class="js-slider-track">
                                    {pboot:list scode=2 num=8 order='isrecommend'}
                                    <div class="js-slider-item home-product-slider-item">
                                        <div class="vertical-product-card">
                                            <div class="vertical-image-container">
                                                <img src="[list:ico]" alt="[list:title]" class="vertical-product-image">
                                                <div class="vertical-product-badge">Featured</div>
                                                <div class="vertical-image-hover-info">
                                                    <p class="vertical-hover-description">
                                                        [list:description]
                                                    </p>
                                                    <a href="[list:link]" class="download-btn">
                                                        <i class="fas fa-arrow-right"></i>
                                                        View Details
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="vertical-product-info">
                                                <h3 class="vertical-product-title">[list:title]</h3>
                                                <div class="vertical-product-tags">
                                                    {pboot:tags id=[list:id] num=4 target=tag}
                                                    <a href="[tags:link]" class="vertical-tag-item" rel="tag">[tags:text]</a>
                                                    {/pboot:tags}
                                                </div>
                                                {pboot:if('[list:ext_video_id]' != '')}
                                                {pboot:content id=[list:ext_video_id]}
                                                <div class="vertical-product-actions">
                                                    <a href="[content:link]" class="vertical-product-price" aria-label="查看产品视频">
                                                        <i class="fas fa-video" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                {/pboot:content}
                                                {/pboot:if}
                                            </div>
                                        </div>
                                    </div>
                                    {/pboot:list}
                                </div>

                            </div>
                    
                            <button class="scroll-nudge right js-slider-next" aria-label="向右轻推">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    
                    </div>
                <!-- 新闻中心 -->
                <div class="news-center-carousel">
                        <div class="news-center-header">
                            {pboot:sort scode=7}
                            <div>
                                <h2 class="news-center-title">[sort:subname]</h2>
                                <p class="news-center-subtitle">Latest News & Industry Updates</p>
                            </div>
                            <a href="[sort:link]" class="module-view-all">More<i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                            {/pboot:sort}
                        </div>
                        
                        <div class="news-slider-wrapper">
                            <button class="scroll-nudge left js-slider-prev">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            
                            <div class="js-horizontal-slider" data-step="1" data-align="start" data-drag="true">
                                
                                <div class="js-slider-track">
                                    {pboot:list scode=7 num=8}
                                    <div class="js-slider-item home-news-slider-item">
                                        <div class="news-card">
                                
                                            <div class="news-image-container">
                                                <img src="[list:ico]" alt="[list:title]" class="news-image">
                                
                                                <div class="news-date-badge">
                                                    <span class="news-date-day">[list:date style=d]</span>
                                                    <span class="news-date-month">[list:date style=m]月</span>
                                                </div>
                                
                                                <div class="news-badge">[list:sortname]</div>
                                
                                                <div class="news-hover-overlay">
                                                    <div class="news-hover-content">
                                                        <a href="[list:link]" class="news-read-more-btn">
                                                            <i class="fas fa-book-reader"></i>
                                                            Read More
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                
                                            <div class="news-card-content">
                                                <h3 class="news-title">
                                                    <a href="[list:link]">[list:title]</a>
                                                </h3>
                                                <p class="news-excerpt">
                                                    [list:description]
                                                </p>
                                            </div>
                                
                                        </div>
                                    </div>
                                    {/pboot:list}

                                </div>

                                
                            </div>
                            
                            <button class="scroll-nudge right js-slider-next">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                <!-- 视频中心 -->
                <div class="video-center-carousel" id="videoCenter">
                    <div class="video-center-header">
                        <div>
                            <h2 class="video-center-title">Videos</h2>
                            <p class="video-center-subtitle">Explore WishPower company videos  highlights</p>
                        </div>
                        <a href="{pboot:sort scode=29}[sort:link]{/pboot:sort}" class="module-view-all">More<i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                    
                    <div class="video-slider-wrapper">
                        <button class="scroll-nudge left js-slider-prev" aria-label="向左轻推">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        
                        <div class="js-horizontal-slider" data-step="1" data-align="start" data-drag="true">
                            <div class="js-slider-track">
                                {pboot:list scode=29 num=8 isrecommend=1}
                                <div class="js-slider-item video-card">
                                    <div class="video-cover-container">
                                        <img src="[list:ico]" alt="[list:title]" class="video-cover-img">
                                        <a href="[list:link]" class="video-play-icon" aria-label="播放视频">
                                            <i class="fas fa-play"></i>
                                        </a>
                                    </div>
                                    <div class="video-card-info">
                                        <h3 class="video-card-title">
                                            <a href="[list:link]" style="text-decoration: none; color: inherit;">[list:title]</a>
                                        </h3>
                                        <div class="video-card-meta">
                                            <span class="video-meta-item">
                                                <i class="fas fa-calendar-alt"></i> [list:date]
                                            </span>
                                            <span class="video-meta-item">
                                                <i class="fas fa-eye"></i> [list:visits] 观看
                                            </span>
                                        </div>
                                        <div class="video-card-footer">
                                            <div class="video-tags">
                                                {pboot:tags id=[list:id] num=3}
                                                <span class="video-tag">[tags:text]</span>
                                                {/pboot:tags}
                                            </div>
                                            <a href="[list:link]" class="video-view-link">观看视频 <i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                {/pboot:list}
                            </div>
                        </div>
                        
                        <button class="scroll-nudge right js-slider-next" aria-label="向右轻推">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
<!-- FOOTER_START 页脚组件 -->
<footer class="footer" id="contact">
    <div class="footer-container">
        <div class="footer-section footer-company">
            <div class="footer-logo">
                <i class="fas fa-bolt" aria-hidden="true"></i>
                <span>WishPower</span>
            </div>
            <!--<p class="footer-description">-->
            <!--    WishPower is a professional manufacturer of high-voltage insulation and power equipment, with 20+ years of manufacturing experience and products exported to 60+ countries and regions.-->
            <!--</p>-->
            <div class="social-links">
                <a href="#" class="social-link" aria-label="WhatsApp">
                    <i class="fab fa-whatsapp" aria-hidden="true"></i>
                </a>
                <a href="#" class="social-link" aria-label="YouTube">
                    <i class="fab fa-youtube" aria-hidden="true"></i>
                </a>
                <a href="#" class="social-link" aria-label="TikTok">
                    <i class="fab fa-tiktok" aria-hidden="true"></i>
                </a>
                <a href="#" class="social-link" aria-label="Twitter">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#" class="social-link" aria-label="Instagram">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                </a>
            </div>
            <div class="footer-links-section">
                <div class="footer-links-container">
                    <span class="footer-links-label">Links:</span>
                    {pboot:link gid=1 num=10}
                    <a href="[link:link]" class="footer-link" title="[link:name]">[link:name]</a>
                    {/pboot:link}
                </div>
            </div>
        </div>

        <div class="footer-section footer-contact-info-section">
            <h3 class="footer-title">Contact Us</h3>
            <div class="contact-info">
                <div class="contact-item">
                    <i class="fas fa-phone" aria-hidden="true"></i>
                    <span>Phone: <a href="tel:+86{pboot:companyphone}">+86 {pboot:companyphone}</a></span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope" aria-hidden="true"></i>
                    <span>Email: <a href="mailto:{pboot:companyemail}">{pboot:companyemail}</a></span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                    <span>Address: {pboot:companyaddress}</span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-clock" aria-hidden="true"></i>
                    <span>Business Hours: Monday to Friday, 8:30-17:30</span>
                </div>
            </div>
        </div>

        <div class="footer-section footer-qr-combined">
            <h3 class="footer-title">Scan to Connect</h3>
            <div class="qr-row">
                <div class="qr-item">
                    <a href="https://www.douyin.com/user/MS4wLjABAAAAF6_JnPwfdPZjuUoEdbt68OGGbC6L3syc4tn4d5VvfRA?from_tab_name=main&relation=0&vid=7528009761858669858" class="qr-link" target="_blank" rel="noopener noreferrer" aria-label="Open Douyin web">
                        <img src="{label:douyin}" alt="Douyin QR Code" class="qr-img douyin-qr">
                    </a>
                    <span class="qr-label">抖音/Douyin</span>
                </div>
                <div class="qr-item">
                    <a href="https://www.youtube.com/@wishpower-videos" class="qr-link" target="_blank" rel="noopener noreferrer" aria-label="Open YouTube">
                        <img src="{label:douyin}" alt="YouTube QR Code" class="qr-img whatsapp-qr">
                    </a>
                    <span class="qr-label">Youtube</span>
                </div>
                <div class="qr-item">
                    <a href="https://www.tiktok.com/@wishpower1" class="qr-link" target="_blank" rel="noopener noreferrer" aria-label="Open TikTok">
                        <img src="{label:douyin}" alt="TikTok QR Code" class="qr-img official-qr">
                    </a>
                    <span class="qr-label">TikTok</span>
                </div>
            </div>
        </div>

        <div class="footer-section">
            <h3 class="footer-title" id="quote-form">Online Inquiry</h3>
            <div class="footer-contact-form">
                <form class="contact-form" id="contactForm" action="{pboot:msgaction}" method="post">
                    <input type="text" class="contact-input" name="contacts" placeholder="Your Name (Required)" required>
                    <input type="tel" class="contact-input" name="mobile" placeholder="Phone / WhatsApp">
                    <input type="email" class="contact-input" name="email" placeholder="Email (Required)" required>
                    <input type="hidden" name="company" value="Not provided">
                    <textarea class="contact-textarea" name="content" placeholder="Inquiry Details (Required)" required></textarea>

                    <div class="contact-code-wrapper">
                        <input type="text" class="contact-input code-input" name="checkcode" placeholder="Verification Code" required>
                        <img src="{pboot:checkcode}" alt="Verification Code" title="Click to refresh" onclick="this.src='{pboot:checkcode}?'+Math.round(Math.random()*10);">
                    </div>

                    <input type="hidden" name="product" value="Not specified">
                    <input type="hidden" name="inquiry_type" value="General Inquiry">
                    <input type="hidden" name="from_page" id="from_page" value="">

                    <button type="submit" class="contact-btn">Submit Inquiry</button>
                </form>
                <p style="font-size:12px; color:#8899bb; margin-top:8px;">* We will reply to your inquiry within 24 hours.</p>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="copyright">
            &copy; {pboot:sitecopyright} | <?php $load_time = round(microtime(true) - START_TIME, 6); ?>Page load time: <?php echo $load_time; ?> seconds
        </div>
        <div class="footer-nav">
            <a href="/privacy.html">Privacy Policy</a>
            <a href="/terms.html">Terms of Use</a>
            <a href="/sitemap.xml">Sitemap</a>
            <a href="/about-us/" class="about-us">About Us</a>
        </div>
    </div>
</footer>

    
<!-- MOBILE_TABBAR_START 移动端底部导航 -->
<!-- 移动端底部导航 -->
<!-- MOBILE_TABBAR_START -->
<div class="mobile-tabbar">
    <a class="tab-item active" href="/">
        <i class="fas fa-home" aria-hidden="true"></i>
        <span>Home</span>
    </a>
    <a class="tab-item" href="{pboot:sort scode=2}[sort:link]{/pboot:sort}">
        <i class="fas fa-box" aria-hidden="true"></i>
        <span>Products</span>
    </a>
    <a class="tab-item" href="{pboot:sort scode=63}[sort:link]{/pboot:sort}">
        <i class="fas fa-industry" aria-hidden="true"></i>
        <span>Factory</span>
    </a>
    <a class="tab-item" href="{pboot:sort scode=29}[sort:link]{/pboot:sort}">
        <i class="fas fa-video" aria-hidden="true"></i>
        <span>Videos</span>
    </a>
    <a class="tab-item" href="/contact-us/">
        <i class="fas fa-comment-dots" aria-hidden="true"></i>
        <span>Contact</span>
    </a>
</div>
<!-- MOBILE_TABBAR_END -->

    
<!-- BACK_TO_TOP_START 返回顶部按钮 -->
<!-- ===== 返回顶部按钮 ===== -->
    <!-- BACK_TO_TOP_START -->
    <button class="back-to-top" id="backToTop" aria-label="返回顶部">
        <i class="fas fa-arrow-up" aria-hidden="true"></i>
    </button>
    <!-- BACK_TO_TOP_END -->
    
<!-- VIDEO_MODAL_START 首页视频弹窗 -->
<div class="video-modal-overlay" id="videoModalOverlay">
    <div class="video-modal-container">
        <video class="video-modal-player" id="videoModalPlayer" playsinline webkit-playsinline x5-playsinline controls preload="none"
            data-file-id="{label:home_tcplayer_file_id}"
            data-sign-api="/api/tencent-vod-psign.php">
            您的浏览器不支持视频播放。
        </video>
        <button class="video-modal-close" id="videoModalClose" aria-label="关闭视频">
            <i class="fas fa-times"></i>
        </button>
    </div>
</div>
<!-- VIDEO_MODAL_END 首页视频弹窗结束 -->
    
    <!-- 页面脚本，按依赖顺序加载 -->
    <script src="/skin/js/topbar.js"></script>
    <script src="/skin/js/sidebar.js"></script>
    <script src="/skin/js/index.js"></script>
    <script src="/skin/js/footer.js"></script>
    <script src="/skin/js/mobile-tabbar.js"></script>
    <script src="/skin/js/back-to-top.js"></script>
    <script src="/skin/js/main.js"></script>
</body>
</html>
<?php return array (
  0 => 'D:/phpstudy/WWW/test02.wishpower.net/template/muban/topbar.html',
  1 => 'D:/phpstudy/WWW/test02.wishpower.net/template/muban/sidebar.html',
  2 => 'D:/phpstudy/WWW/test02.wishpower.net/template/muban/footer.html',
  3 => 'D:/phpstudy/WWW/test02.wishpower.net/template/muban/mobile_tabbar.html',
  4 => 'D:/phpstudy/WWW/test02.wishpower.net/template/muban/back-to-top.html',
); ?>