<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{sort:title} - {pboot:sitesubtitle}</title>
    <meta name="keywords" content="{sort:keywords}">
    <meta name="description" content="{sort:description}">
    <meta name="robots" content="index, follow">
    
    <!-- 字体与图标库（全局引用） -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;family=Noto+Sans+SC:wght@300;400;500;700&amp;display=swap">
    
    <!-- 模块化CSS -->
    <link rel="stylesheet" href="/skin/css/base.css">
    <link rel="stylesheet" href="/skin/css/topbar.css">
    <link rel="stylesheet" href="/skin/css/sidebar.css">
    <link rel="stylesheet" href="/skin/vendor/tcplayer/tcplayer.min.css">
    <link rel="stylesheet" href="/skin/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/skin/css/videolist03.css?v=shortfeed_mobile_avatar_plain_20260622a">
    <link rel="stylesheet" href="/skin/css/footer.css">
    <link rel="stylesheet" href="/skin/css/mobile-tabbar.css">
    <link rel="stylesheet" href="/skin/css/back-to-top.css">
</head>
<body class="sidebar-embedded-page">
    <!-- 顶部信息栏 -->
<!-- TOPBAR_START -->
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

<!-- TOPBAR_END -->
    
    <!-- 主导航栏 -->
    
    <!-- 侧边栏导航 -->
<!-- ===== 主内容区包装器 ===== -->
<div class="main-content-wrapper">
    <div class="sidebar-embedded-aside">
<!-- SIDEBAR_START -->
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

<!-- SIDEBAR_END -->
    </div>
        <div class="main-container">
            <div class="main-content">
                <div class="content-layout">
                    
                    <!-- 3. 面包屑导航-->
                    <div class="breadcrumb-stats-container">
                        <div class="breadcrumb-section">
                            <ul class="breadcrumb-list">
                                <!-- 首页：固定不变 -->
                                <li class="breadcrumb-item">
                                    <a href="/" class="breadcrumb-link">
                                        <i class="fas fa-home"></i>
                                        首页
                                    </a>
                                </li>
                                <!-- 一级栏目（视频探索）：始终显示，链接和名称动态输出 -->
                                <li class="breadcrumb-item">
                                    <a href="{sort:toplink}" class="breadcrumb-link">
                                        <i class="fas fa-video"></i>
                                        {sort:topname}
                                    </a>
                                </li>
                                <!-- 二级栏目：只在前栏目有父栏目（即在某个二级栏目页）时才显示 -->
                                {pboot:if('{sort:pcode}'!='0')}
                                <li class="breadcrumb-item">
                                    <a href="{sort:link}" class="breadcrumb-link">
                                        <i class="fas fa-play-circle"></i>
                                        {sort:name}
                                    </a>
                                </li>
                                {/pboot:if}
                            </ul>
                        </div>
                    </div>
                    
                    <!-- ===== 新增：视频筛选模块 ===== -->
                    <div class="video-filter-section">
                        <div class="video-filter-container collapsed" id="videoFilterContainer">
                            <div class="video-filter-header" id="videoFilterToggle">
                                <div class="video-filter-title">
                                    <i class="fas fa-filter"></i>
                                    视频筛选
                                </div>
                                <div class="video-filter-toggle">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            
                            <div class="video-filter-content" id="videoFilterContent">
                                <!-- 第一排：产品类型 -->
                                <div class="filter-row">
                                    <div class="filter-row-content">
                                        <div class="filter-row-title" data-clear-filter="product-type">
                                            <i class="fas fa-box"></i>
                                            产品类型
                                        </div>
                                        <div class="filter-tags">
                                            {pboot:selectall field=ext_product_type text=全部 class='filter-tag filter-tag-all' active='filter-tag filter-tag-all active'}
                                            {pboot:select field=ext_product_type}
                                            <a href="[select:link]" class="filter-tag{pboot:if('[select:value]'=='[select:current]')} active{/pboot:if}" data-filter="product-type" data-value="[select:value]">
                                                [select:value]
                                            </a>
                                            {/pboot:select}
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- 第二排：电压等级 -->
                                <div class="filter-row">
                                    <div class="filter-row-content">
                                        <div class="filter-row-title" data-clear-filter="voltage">
                                            <i class="fas fa-bolt"></i>
                                            电压等级
                                        </div>
                                        <div class="filter-tags">
                                            {pboot:selectall field=ext_voltage text=全部 class='filter-tag filter-tag-all' active='filter-tag filter-tag-all active'}
                                            {pboot:select field=ext_voltage}
                                            <a href="[select:link]" class="filter-tag{pboot:if('[select:value]'=='[select:current]')} active{/pboot:if}" data-filter="voltage" data-value="[select:value]">
                                                [select:value]
                                            </a>
                                            {/pboot:select}
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- 第三排：应用场景 -->
                                <div class="filter-row">
                                    <div class="filter-row-content">
                                        <div class="filter-row-title" data-clear-filter="application">
                                            <i class="fas fa-map-marker-alt"></i>
                                            应用场景
                                        </div>
                                        <div class="filter-tags">
                                            {pboot:selectall field=ext_application text=全部 class='filter-tag filter-tag-all' active='filter-tag filter-tag-all active'}
                                            {pboot:select field=ext_application}
                                            <a href="[select:link]" class="filter-tag{pboot:if('[select:value]'=='[select:current]')} active{/pboot:if}" data-filter="application" data-value="[select:value]">
                                                [select:value]
                                            </a>
                                            {/pboot:select}
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- 第四排：认证标准 -->
                                <div class="filter-row">
                                    <div class="filter-row-content">
                                        <div class="filter-row-title" data-clear-filter="standard">
                                            <i class="fas fa-certificate"></i>
                                            认证标准
                                        </div>
                                        <div class="filter-tags">
                                            {pboot:selectall field=ext_standard text=全部 class='filter-tag filter-tag-all' active='filter-tag filter-tag-all active'}
                                            {pboot:select field=ext_standard}
                                            <a href="[select:link]" class="filter-tag{pboot:if('[select:value]'=='[select:current]')} active{/pboot:if}" data-filter="standard" data-value="[select:value]">
                                                [select:value]
                                            </a>
                                            {/pboot:select}
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- 第五排：材料/性能 -->
                                <div class="filter-row">
                                    <div class="filter-row-content">
                                        <div class="filter-row-title" data-clear-filter="material">
                                            <i class="fas fa-flask"></i>
                                            材料/性能
                                        </div>
                                        <div class="filter-tags">
                                            {pboot:selectall field=ext_material text=全部 class='filter-tag filter-tag-all' active='filter-tag filter-tag-all active'}
                                            {pboot:select field=ext_material}
                                            <a href="[select:link]" class="filter-tag{pboot:if('[select:value]'=='[select:current]')} active{/pboot:if}" data-filter="material" data-value="[select:value]">
                                                [select:value]
                                            </a>
                                            {/pboot:select}
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- 筛选操作按钮 -->
                                <div class="filter-actions">
                                    <button class="filter-reset" id="filterReset" data-reset-url="{sort:link}">
                                        <i class="fas fa-redo"></i>
                                        重置筛选
                                    </button>
                                    <div class="filter-stats">
                                        已选择 <strong id="selectedFiltersCount">0</strong> 个筛选条件
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ===== 竖版 shorts 视频区域（PbootCMS 列表嵌套）===== -->
                <div class="vertical-videos-section">
                    <div class="vertical-video-list" id="verticalVideoList">
                        {pboot:list num=10 page=1 order='date desc,id desc'}
                        <article class="vertical-video-card"
                            data-short-video-card
                            data-content-id="[list:id]"
                            data-detail-url="[list:link]"
                            data-title="[list:title]"
                            data-description="[list:description]"
                            data-poster="[list:ico]"
                            data-category="[list:sortname]"
                            data-date="[list:date]"
                            data-visits="[list:visits]"
                            data-file-id="[list:ext_tcplayer_file_id]">
                            <div class="vertical-video-thumb">
                                <a class="vertical-video-cover-link" href="[list:link]" aria-label="[list:title]">
                                    <img class="vertical-video-cover" src="[list:ico]" alt="[list:title]" loading="lazy">
                                </a>
                                <a href="[list:link]" class="vertical-video-play-btn" aria-label="播放视频"><i class="fas fa-play"></i></a>
                                <span class="vertical-video-duration" data-video-duration data-content-id="[list:id]" data-sign-api="/api/tencent-vod-psign.php">--:--</span>
                                <span class="vertical-video-category">[list:sortname]</span>
                            </div>
                            <div class="vertical-video-info">
                                <h3 class="vertical-video-title"><a href="[list:link]">[list:title]</a></h3>
                                <div class="vertical-video-meta">
                                    <span class="vertical-video-views"><i class="fas fa-eye"></i>[list:visits]</span>
                                    <time class="vertical-video-date" datetime="[list:date]"><i class="far fa-calendar"></i>[list:date]</time>
                                </div>
                            </div>
                            <div class="short-video-card-extra" hidden>
                                <div class="short-video-description">[list:description]</div>
                                <div class="short-video-tags">
                                    {pboot:tags id=[list:id] target=tag}
                                    <a href="[tags:link]" target="_blank" rel="tag noopener">[tags:text]</a>
                                    {/pboot:tags}
                                </div>
                                <div class="short-video-mobile-copy">
                                    <div class="video-title-row">
                                        <div class="video-title-header">
                                            <span class="video-title">[list:title]</span>
                                        </div>
                                    </div>
                                    {pboot:if('[list:description]'!='')}
                                    <div class="video-caption">[list:description]</div>
                                    {/pboot:if}
                                    <div class="video-tags">
                                        {pboot:tags id=[list:id] target=tag}
                                        <a class="video-tag" href="[tags:link]" target="_blank" rel="tag noopener">[tags:text]</a>
                                        {/pboot:tags}
                                    </div>
                                </div>
                                <aside class="short-video-desktop-detail short-feed-desktop-detail short-feed-detail-card">
                                    <div class="short-feed-detail-head">
                                        <div class="short-feed-detail-user">
                                            <span class="short-feed-detail-avatar-wrap">
                                                <img class="short-feed-detail-avatar" src="https://randomuser.me/api/portraits/men/1.jpg" alt="WishPower">
                                                <img class="short-feed-detail-v-badge" src="/skin/images/vh-cut.png" alt="V认证" loading="lazy">
                                            </span>
                                            <strong>WishPower</strong>
                                        </div>
                                        <div class="short-feed-detail-actions">
                                            <button type="button" class="short-feed-detail-pill" data-detail-ai><i class="fas fa-headset"></i> 客服</button>
                                            <button type="button" class="short-feed-detail-pill primary" data-detail-quote><i class="fas fa-file-signature"></i> 询价</button>
                                        </div>
                                    </div>
                                    <h2 class="short-feed-detail-title">[list:title]</h2>
                                    {pboot:if('[list:description]'!='')}
                                    <p class="short-feed-detail-desc">[list:description]</p>
                                    {/pboot:if}
                                    <div class="short-feed-detail-tags">
                                        {pboot:tags id=[list:id] target=tag}
                                        <a class="short-feed-detail-tag" href="[tags:link]" target="_blank" rel="tag noopener">#[tags:text]</a>
                                        {/pboot:tags}
                                    </div>
                                    <div class="short-feed-detail-date">[list:date]</div>
                                    <div class="short-feed-detail-comments">
                                        <div class="short-feed-detail-comment">
                                            <div class="short-feed-detail-comment-avatar">技</div>
                                            <div>
                                                <strong>技术控</strong>
                                                <p>这条线效率真高！</p>
                                                <span>2小时前 回复</span>
                                            </div>
                                        </div>
                                        <div class="short-feed-detail-reply">
                                            <div class="short-feed-detail-comment-avatar official">W</div>
                                            <div>
                                                <strong>WishPower官方</strong>
                                                <p>感谢支持!</p>
                                                <span>1小时前</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="short-feed-detail-bottom">
                                        <div class="short-feed-detail-comment-bar">
                                            <input type="text" class="short-feed-detail-input" data-detail-comment-input placeholder="说点什么...">
                                            <button type="button" class="short-feed-detail-submit" data-detail-comment-submit>发布</button>
                                        </div>
                                        <button type="button" data-detail-cart><i class="fas fa-shopping-cart"></i></button>
                                        <button type="button" data-detail-like><i class="far fa-heart"></i><span>0</span></button>
                                        <button type="button" data-detail-save><i class="far fa-star"></i><span>0</span></button>
                                        <button type="button" data-detail-share><i class="fas fa-share-square"></i><span>0</span></button>
                                    </div>
                                </aside>
                                {pboot:if('[list:ext_product_id]'!='')}
                                {pboot:content id=[list:ext_product_id]}
                                <div class="short-video-product">
                                    <div class="product-slide">
                                        <div class="product-carousel">
                                            <button class="product-carousel-nav prev" type="button" data-product-carousel-prev aria-label="上一张">
                                                <i class="fas fa-chevron-left"></i>
                                            </button>
                                            <div class="carousel-slides">
                                                {pboot:pics id=[content:id] num=5}
                                                <img class="carousel-slide" src="[pics:src]" alt="[pics:title]">
                                                {/pboot:pics}
                                            </div>
                                            <button class="product-carousel-nav next" type="button" data-product-carousel-next aria-label="下一张">
                                                <i class="fas fa-chevron-right"></i>
                                            </button>
                                        </div>
                                        <div class="product-detail">
                                            <h3>[content:title]</h3>
                                            <p class="product-desc">[content:description]</p>
                                            <div class="product-price">￥[content:ext_price]</div>
                                            <a class="detail-btn" href="[content:link]"><i class="fas fa-shopping-cart"></i> 立即购买</a>
                                        </div>
                                    </div>
                                </div>
                                {/pboot:content}
                                {/pboot:if}
                            </div>
                        </article>
                        {/pboot:list}
                    </div>
                </div>
                                        <!-- 分页 - 保持原有HTML结构和UI样式 -->
                    <div class="video-pagination">
                        {page:bar}
                    </div>
                    
                    <!-- 视频页面底部CTA -->
                    <div class="video-cta">
                        <h2>想观看更多专业视频？</h2>
                        <p>订阅我们的YouTube频道，获取最新产品视频、安装教程和技术解析，第一时间了解WishPower最新动态。</p>
                        <div class="video-cta-buttons">
                            <a href="https://youtube.com" target="_blank" class="cta-button primary">
                                <i class="fab fa-youtube"></i>
                                订阅YouTube频道
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--页脚 FOOTER_START -->
    <div class="short-feed-overlay" id="shortFeedOverlay" hidden aria-hidden="true" data-site-logo="{pboot:sitelogo}">
        <button class="short-feed-close" id="shortFeedClose" type="button" aria-label="关闭短视频播放">
            <i class="fas fa-times"></i>
        </button>
        <div class="short-feed-shell">
            <div class="swiper short-feed-swiper" id="shortFeedSwiper">
                <div class="swiper-wrapper" id="shortFeedWrapper"></div>
            </div>
            <div class="short-feed-nav" aria-label="短视频切换">
                <button class="short-feed-nav-btn" id="shortFeedPrev" type="button" aria-label="上一个视频">
                    <i class="fas fa-arrow-up"></i>
                </button>
                <button class="short-feed-nav-btn" id="shortFeedNext" type="button" aria-label="下一个视频">
                    <i class="fas fa-arrow-down"></i>
                </button>
            </div>
            <aside class="short-feed-recommend" id="shortFeedRecommend">
                <div class="short-feed-recommend-header"><i class="fas fa-list-ul"></i> 推荐视频</div>
                <div class="short-feed-recommend-list" id="shortFeedRecommendList"></div>
            </aside>
        </div>
    </div>

    <div class="modal-overlay short-feed-modal-overlay" id="shortFeedPanelMask"></div>
    <div class="short-feed-action-panels" id="shortFeedActionPanels">
        <div class="slide-panel short-feed-cart-panel" id="shortFeedCartPanel">
            <div class="panel-header">
                <span>商品详情</span>
                <span class="panel-close" data-short-panel-close>×</span>
            </div>
            <div id="shortFeedCartContent"></div>
        </div>

        <div class="comment-slide-panel short-feed-comment-panel" id="shortFeedCommentPanel">
            <div class="panel-header">
                <span>评论 (<span id="shortFeedCommentCount">0</span>)</span>
                <span class="panel-close" data-short-panel-close>×</span>
            </div>
            <div class="comment-list-area" id="shortFeedComments"></div>
            <div class="comment-input-row">
                <input type="text" id="shortFeedCommentInput" placeholder="写下你的评论...">
                <button type="button" id="shortFeedCommentSubmit">发布</button>
            </div>
        </div>

        <div class="share-popup short-feed-share-panel" id="shortFeedSharePanel">
            <div class="share-popup-header">
                <span>分享视频</span>
                <button class="share-popup-close" type="button" data-short-panel-close>×</button>
            </div>
            <div class="share-popup-grid" id="shortFeedSharePlatforms">
                <div class="share-popup-item whatsapp" data-share-action="whatsapp"><div class="share-popup-icon"><i class="fab fa-whatsapp"></i></div><span>WhatsApp</span></div>
                <div class="share-popup-item wechat" data-share-action="copy"><div class="share-popup-icon"><i class="fab fa-weixin"></i></div><span>微信</span></div>
                <div class="share-popup-item pinterest" data-share-action="copy"><div class="share-popup-icon"><i class="fab fa-pinterest"></i></div><span>Pinterest</span></div>
                <div class="share-popup-item facebook" data-share-action="native"><div class="share-popup-icon"><i class="fab fa-facebook-f"></i></div><span>Facebook</span></div>
                <div class="share-popup-item linkedin" data-share-action="copy"><div class="share-popup-icon"><i class="fab fa-linkedin-in"></i></div><span>LinkedIn</span></div>
                <div class="share-popup-item email" data-share-action="copy"><div class="share-popup-icon"><i class="fas fa-envelope"></i></div><span>邮箱</span></div>
            </div>
            <div class="share-popup-link-row">
                <div class="share-popup-link" id="shortFeedShareLink"></div>
                <button class="share-popup-copy" type="button" data-share-action="copy">复制链接</button>
            </div>
        </div>

        <div class="ai-chat-modal short-feed-ai-panel" id="shortFeedAiPanel">
            <div class="ai-chat-header">
                <span><i class="fas fa-headset"></i> 客服 · WishPower</span>
                <span class="panel-close" data-short-panel-close>×</span>
            </div>
            <div class="ai-chat-body" id="shortFeedAiBody">
                <div class="ai-chat-message bot">您好，我是 WishPower 客服。可以帮您查询产品、报价或技术问题。</div>
                <div class="ai-chat-quick-actions">
                    <button class="ai-chat-quick-btn" type="button" data-msg="我想咨询这款产品的报价">咨询报价</button>
                    <button class="ai-chat-quick-btn" type="button" data-msg="这款产品的交货周期多久？">了解交期</button>
                    <button class="ai-chat-quick-btn" type="button" data-msg="请推荐适合当前场景的产品">产品推荐</button>
                </div>
            </div>
            <div class="ai-chat-input-row">
                <input type="text" id="shortFeedAiInput" placeholder="输入您的问题...">
                <button class="ai-chat-send" type="button" id="shortFeedAiSubmit">发送</button>
            </div>
        </div>

        <div class="ai-chat-modal short-feed-intro-panel" id="shortFeedIntroPanel">
            <div class="ai-chat-header">
                <span><i class="fas fa-info-circle"></i> 视频简介</span>
                <span class="panel-close" data-short-panel-close>×</span>
            </div>
            <div class="ai-chat-body short-feed-intro-body" id="shortFeedIntroBody"></div>
        </div>

        <div class="ai-chat-modal short-feed-quote-panel" id="shortFeedQuotePanel">
            <div class="ai-chat-header">
                <span><i class="fas fa-file-signature"></i> 在线询价</span>
                <span class="panel-close" data-short-panel-close>×</span>
            </div>
            <div class="ai-chat-body short-feed-quote-body">
                <div class="ai-chat-message bot">请留下您的需求，我们会尽快联系您。</div>
                <div class="short-feed-quote-form">
                    <input type="text" id="shortFeedQuoteName" placeholder="请输入姓名">
                    <input type="text" id="shortFeedQuoteContact" placeholder="电话 / WhatsApp">
                    <input type="email" id="shortFeedQuoteEmail" placeholder="请输入邮箱">
                    <textarea id="shortFeedQuoteMessage" rows="4" placeholder="请输入留言内容"></textarea>
                    <button type="button" id="shortFeedQuoteSubmit">提交询价</button>
                </div>
                <div class="comment-list-area" id="shortFeedQuoteMessages"></div>
            </div>
        </div>
    </div>

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

<!-- FOOTER_END -->
    
<!-- 移动端底部导航MOBILE_TABBAR_START -->
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

<!-- MOBILE_TABBAR_END -->
    
<!-- BACK_TO_TOP_START 返回顶部按钮 -->
<!-- ===== 返回顶部按钮 ===== -->
    <!-- BACK_TO_TOP_START -->
    <button class="back-to-top" id="backToTop" aria-label="返回顶部">
        <i class="fas fa-arrow-up" aria-hidden="true"></i>
    </button>
    <!-- BACK_TO_TOP_END -->
<!-- BACK_TO_TOP_END -->
    
    <!-- JS 模块（按依赖顺序） -->
    <script src="/skin/js/topbar.js"></script>
    <script src="/skin/js/sidebar.js"></script>
    <script src="/skin/vendor/tcplayer/tcplayer.v5.3.3.min.js"></script>
    <script src="/skin/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/skin/js/tencent-video-duration.js?v=tencent_duration_fast_20260623c"></script>
    <script src="/skin/js/videolist03.js?v=tencent_duration_fast_20260623c"></script>
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