<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{content:title} - {pboot:sitesubtitle}</title>
    <meta name="description" content="{content:description}">
    <meta name="keywords" content="{content:keywords}">
    <meta name="robots" content="index, follow">
    
    <!-- 字体与图标库（全局引用） -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;family=Noto+Sans+SC:wght@300;400;500;700&amp;display=swap">
    <link rel="stylesheet" href="/skin/vendor/tcplayer/tcplayer.min.css">
    <script src="/skin/vendor/tcplayer/tcplayer.v5.3.3.min.js"></script>
    
    <!-- 模块化CSS -->
    <link rel="stylesheet" href="/skin/css/base.css">
    <link rel="stylesheet" href="/skin/css/topbar.css">
    <link rel="stylesheet" href="/skin/css/sidebar.css">
    <link rel="stylesheet" href="/skin/css/video.css?v=startup_mask_20260623a">
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
<!-- 主内容包装器 -->
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
                <div class="video-detail-wrapper">
                    <div class="video-detail-grid">
                        <!-- 左侧主视频区 -->
                        <div class="video-main">
                            <div class="video-player-container" id="videoPlayerContainer">
                                <video id="mainVideoPlayer" class="video-player" playsinline webkit-playsinline x5-playsinline controls preload="none" muted
                                    data-content-id="{content:id}" 
                                    data-file-id="{content:ext_tcplayer_file_id}" 
                                    data-sign-api="/api/tencent-vod-psign.php">
                                </video>
                                <!-- 中央播放按钮（桌面端） -->
                                <div class="center-play-btn" id="centerPlayBtn">
                                    <i class="fas fa-play"></i>
                                </div>
                                <div class="video-startup-mask" id="videoStartupMask" aria-hidden="false">
                                    <div class="video-startup-spinner"></div>
                                    <span>视频加载中...</span>
                                </div>
                                {pboot:if('{content:prelink}'!='')}
                                <a class="player-nav-btn player-nav-prev" id="prevVideoBtn" href="{content:prelink}" title="{content:pretitle}" aria-label="上一个视频"><i class="fas fa-step-backward"></i></a>
                                {else}
                                <button class="player-nav-btn player-nav-prev is-disabled" id="prevVideoBtn" type="button" disabled aria-disabled="true" title="没有上一个视频" aria-label="没有上一个视频"><i class="fas fa-step-backward"></i></button>
                                {/pboot:if}
                                {pboot:if('{content:nextlink}'!='')}
                                <a class="player-nav-btn player-nav-next" id="nextVideoBtn" href="{content:nextlink}" title="{content:nexttitle}" aria-label="下一个视频"><i class="fas fa-step-forward"></i></a>
                                {else}
                                <button class="player-nav-btn player-nav-next is-disabled" id="nextVideoBtn" type="button" disabled aria-disabled="true" title="没有下一个视频" aria-label="没有下一个视频"><i class="fas fa-step-forward"></i></button>
                                {/pboot:if}
                            </div>
                            <div class="video-info-section">
                                <div class="video-info-header">
                                    <div class="video-info-breadcrumb">
                                        <ul class="breadcrumb-list">
                                            <li class="breadcrumb-item"><a href="/" class="breadcrumb-link breadcrumb-home-link" aria-label="首页" title="首页"><i class="fas fa-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="{content:sortlink}" class="breadcrumb-link"><i class="fas fa-video"></i>{content:sortname}</a></li>
                                        </ul>
                                    </div>
                                    <div class="video-meta-stats">
                                        <span><i class="fas fa-eye"></i> {content:visits} 次观看</span>
                                        <span><i class="far fa-calendar"></i> {content:date style=Y-m-d}</span>
                                    </div>
                                </div>
                                
                                <div class="video-title-row">
                                    <div class="video-avatar video-product-avatar" id="videoAvatarBtn"><i class="fas fa-shopping-cart"></i></div>
                                    <h1 class="video-title">{content:title}</h1>
                                </div>
                                
                                <div class="video-description-wrapper" id="videoDescriptionWrapper">
                                    <div class="video-description" id="videoDescription">
                                        {content:description}
                                    </div>
                                    <button class="video-description-toggle" id="videoDescriptionToggle" type="button" aria-expanded="false">
                                        <i class="fas fa-chevron-down"></i><span>展开</span>
                                    </button>
                                </div>
                                
                                <div class="video-tags">
                                    {pboot:tags id={content:id} target=tag}
                                    <a href="[tags:link]" class="video-tag"><i class="fas fa-hashtag video-tag-mark"></i>[tags:text]</a>
                                    {/pboot:tags}
                                </div>
                                
                                <div class="video-interact-buttons">
                                    <a class="interact-btn" id="likeBtn" href="{content:likeslink}"><i class="far fa-heart"></i> <span id="likeCount">{content:likes}</span></a>
                                    <button class="interact-btn" id="commentIconBtn" type="button"><i class="far fa-comment"></i> <span id="commentCountIcon">0</span></button>
                                    <button class="interact-btn" id="shareBtn" type="button"><i class="fas fa-share-alt"></i> <span id="shareCount">128</span> 分享</button>
                                    <button class="interact-btn" id="saveBtn" type="button"><i class="far fa-star"></i> <span>收藏</span></button>
                                </div>
                                
                            </div>
                            
                            <div class="comment-section" id="commentSection" data-server-comments="1" data-is-login="{pboot:islogin}" data-login-url="{pboot:login}">
                                {pboot:if('{pboot:commentstatus}'=='1')}
                                <form class="comment-input-area" action="{pboot:commentaction}" method="post">
                                    <input type="text" class="comment-input" id="newCommentInput" name="comment" placeholder="写下你的评论..." required>
                                    <span class="comment-captcha-fields" aria-hidden="true">
                                        <input type="text" class="comment-checkcode" name="checkcode" placeholder="验证码">
                                        <img class="comment-code-img" src="{pboot:checkcode}" alt="验证码" title="点击刷新" onclick="this.src='{pboot:checkcode}?'+Math.round(Math.random()*10);">
                                    </span>
                                    <button class="comment-submit" id="submitCommentBtn" type="submit">发布</button>
                                </form>
                                {/pboot:if}
                                <div class="comment-list" id="commentList">
                                    {pboot:comment contentid={content:id} num=100 order='a.id desc'}
                                    <div class="comment-item" data-comment-id="[comment:id]">
                                        <div class="comment-main">
                                            <a class="comment-avatar" href="[comment:homepage]" title="[comment:nickname]"><img src="[comment:headpic]" alt="[comment:nickname]"></a>
                                            <div class="comment-content">
                                                <div class="comment-header">
                                                    <span class="comment-name">[comment:nickname]</span>
                                                    <span class="comment-time">[comment:date style=Y-m-d H:i]</span>
                                                </div>
                                                <div class="comment-text">[comment:comment]</div>
                                                {pboot:if('{pboot:commentstatus}'=='1')}
                                                <div class="reply-btn-wrapper">
                                                    <button class="reply-btn" type="button">回复</button>
                                                </div>
                                                {/pboot:if}
                                            </div>
                                        </div>
                                        {pboot:if('{pboot:commentstatus}'=='1')}
                                        <form class="reply-input-area" action="[comment:replyaction]" method="post">
                                            <div class="reply-avatar">W</div>
                                            <input type="text" class="reply-input" name="comment" placeholder="写下你的回复..." required>
                                            <span class="comment-captcha-fields" aria-hidden="true">
                                                <input type="text" class="comment-checkcode" name="checkcode" placeholder="验证码">
                                                <img class="comment-code-img" src="{pboot:checkcode}" alt="验证码" title="点击刷新" onclick="this.src='{pboot:checkcode}?'+Math.round(Math.random()*10);">
                                            </span>
                                            <button class="reply-submit" type="submit">发布</button>
                                        </form>
                                        {/pboot:if}
                                        <div class="replies-list">
                                            {pboot:commentsub}
                                            <div class="reply-item">
                                                <div class="reply-main">
                                                    <a class="reply-avatar-small" href="[commentsub:homepage]" title="[commentsub:nickname]"><img src="[commentsub:headpic]" alt="[commentsub:nickname]"></a>
                                                    <div class="reply-content">
                                                        <div class="reply-name">[commentsub:nickname] <span class="reply-time">[commentsub:date style=Y-m-d H:i]</span></div>
                                                        <div class="reply-text">[commentsub:comment]</div>
                                                    </div>
                                                </div>
                                                {pboot:if('{pboot:commentstatus}'=='1')}
                                                <div class="reply-actions">
                                                    <button class="reply-reply-btn" type="button">回复</button>
                                                </div>
                                                <form class="nested-reply-input-area" action="[commentsub:replyaction]" method="post">
                                                    <input type="text" class="nested-reply-input" name="comment" placeholder="写下你的回复..." required>
                                                    <span class="comment-captcha-fields" aria-hidden="true">
                                                        <input type="text" class="comment-checkcode" name="checkcode" placeholder="验证码">
                                                        <img class="comment-code-img" src="{pboot:checkcode}" alt="验证码" title="点击刷新" onclick="this.src='{pboot:checkcode}?'+Math.round(Math.random()*10);">
                                                    </span>
                                                    <button class="nested-reply-submit" type="submit">发布</button>
                                                </form>
                                                {/pboot:if}
                                            </div>
                                            {/pboot:commentsub}
                                        </div>
                                    </div>
                                    {/pboot:comment}
                                </div>
                                <div class="load-more-comments" id="loadMoreCommentsBtnContainer" style="display: none;">
                                    <button class="load-more-btn-comment" id="loadMoreCommentsBtn" type="button">加载更多评论 (5条)</button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- 右侧栏 -->
                        <div class="video-sidebar">
                            <div class="author-card-outer">
                                <div class="author-card">
                                    <div class="author-avatar-wrapper" id="aiCustomerAvatar">
                                        <i class="fas fa-headset"></i>
                                    </div>
                                    <div class="author-info">
                                        <div class="author-name"><a href="/channel/wishpower" id="channelLink">WishPower 官方频道</a></div>
                                        <div class="author-bio">专业绝缘子制造商 | 高压电气专家 | 20年经验</div>
                                        <div class="author-stats">
                                            <span><i class="fas fa-video"></i> 视频总数 128</span>
                                            <span><i class="fas fa-eye"></i> 观看 12.5k</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            {pboot:if('{content:ext_product_id}'!='')}
                            {pboot:content id={content:ext_product_id}}
                            <div class="product-card-wrapper">
                                <div class="shop-section-title">
                                    <i class="fas fa-shopping-cart"></i>
                                    <span>商品直通车</span>
                                </div>
                                <div class="product-card">
                                    <div class="product-img-container">
                                        <div class="product-carousel" id="productCarousel">
                                            <div class="carousel-slides" id="carouselSlides">
                                                {pboot:pics id=[content:id]}
                                                <img class="carousel-slide" src="[pics:src]" alt="[pics:title]">
                                                {/pboot:pics}
                                            </div>
                                            <button class="carousel-btn prev" id="carouselPrev" type="button" aria-label="上一张"><i class="fas fa-chevron-left"></i></button>
                                            <button class="carousel-btn next" id="carouselNext" type="button" aria-label="下一张"><i class="fas fa-chevron-right"></i></button>
                                            <div class="carousel-dots" id="carouselDots"></div>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-title">[content:title]</div>
                                        <div class="product-price">¥[content:ext_price] <small>/ 支</small></div>
                                        <a href="[content:link]" class="product-btn" id="buyProductBtn"><i class="fas fa-shopping-cart"></i> 立即购买/采购</a>
                                    </div>
                                </div>
                            </div>
                            {/pboot:content}
                            {/pboot:if}
                            
                            {pboot:if('{content:ext_shop_recommend_scode}'!='')}
                            <div class="shop-recommend">
                                <div class="shop-recommend-title">
                                    <div class="shop-recommend-title-left">
                                        <i class="fas fa-store"></i>
                                        <span>店铺推荐</span>
                                    </div>
                                    {pboot:sort scode={content:ext_shop_recommend_scode}}
                                    <a href="[sort:link]" class="shop-recommend-more" id="shopMoreBtn">查看更多 &gt;</a>
                                    {/pboot:sort}
                                </div>
                                <div class="rec-list">
                                    {pboot:list scode={content:ext_shop_recommend_scode} num=3 order=sorting}
                                    <a href="[list:link]" class="rec-item">
                                        <img class="rec-img" src="[list:ico]" alt="[list:title]">
                                        <div class="rec-info">
                                            <div class="rec-title">[list:title]</div>
                                            <div class="rec-price">¥[list:ext_price]</div>
                                        </div>
                                    </a>
                                    {/pboot:list}
                                </div>
                            </div>
                            {/pboot:if}
                            
                            <div class="related-videos">
                                <div class="related-title"><i class="fas fa-list-ul"></i> 推荐视频</div>
                                <div class="related-list" id="relatedList">
                                    {pboot:list scode={content:scode} num=7 order=random}
                                    <a href="[list:link]" class="related-item" data-content-id="[list:id]">
                                        <div class="related-thumb-container">
                                            <img class="related-thumb" src="[list:ico]" alt="[list:title]">
                                            <div class="play-icon-overlay"><i class="fas fa-play-circle"></i></div>
                                        </div>
                                        <div class="related-info">
                                            <h4>[list:title]</h4>
                                            <div class="related-meta"><span><i class="fas fa-eye"></i> [list:visits]</span><span class="related-duration" data-video-duration data-content-id="[list:id]" data-sign-api="/api/tencent-vod-psign.php">--:--</span></div>
                                        </div>
                                    </a>
                                    {/pboot:list}
                                </div>
                                <div class="load-more-btn" id="loadMoreBtn">显示更多</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{pboot:if('{content:ext_product_id}'!='')}
{pboot:content id={content:ext_product_id}}
<!-- 标题购物车商品弹窗 -->
<div class="cart-product-popup-overlay" id="cartProductPopupOverlay"></div>
<div class="cart-product-popup-modal" id="cartProductPopupModal" role="dialog" aria-modal="true" aria-label="商品详情">
    <button class="cart-product-popup-close" id="cartProductPopupClose" type="button" aria-label="关闭"><i class="fas fa-times"></i></button>
    <div class="cart-product-popup-wrapper">
        <div class="cart-product-popup-title">
            <i class="fas fa-shopping-cart"></i>
            <span>商品直通车</span>
        </div>
        <div class="cart-product-popup-card">
            <div class="cart-product-img-container">
                <div class="cart-product-carousel" id="cartProductCarousel">
                    <div class="cart-product-slides" id="cartProductSlides">
                        {pboot:pics id=[content:id]}
                        <img class="cart-product-slide" src="[pics:src]" alt="[pics:title]">
                        {/pboot:pics}
                    </div>
                    <button class="cart-product-carousel-btn cart-product-prev" id="cartProductPrev" type="button" aria-label="上一张"><i class="fas fa-chevron-left"></i></button>
                    <button class="cart-product-carousel-btn cart-product-next" id="cartProductNext" type="button" aria-label="下一张"><i class="fas fa-chevron-right"></i></button>
                    <div class="cart-product-dots" id="cartProductDots"></div>
                </div>
            </div>
            <div class="cart-product-info">
                <div class="cart-product-title-text">[content:title]</div>
                <div class="cart-product-price">¥[content:ext_price] <small>/ 支</small></div>
                <a href="[content:link]" class="cart-product-buy-btn"><i class="fas fa-shopping-cart"></i> 立即购买/采购</a>
            </div>
        </div>
    </div>
</div>
{/pboot:content}
{/pboot:if}

<!-- 移动端评论弹窗 -->
<div class="modal-overlay" id="commentModalOverlay"></div>
<div class="comment-modal" id="commentModal">
    <div class="comment-modal-header">
        <h3><i class="far fa-comment-dots"></i> 评论 (<span id="modalCommentTotal">0</span>)</h3>
        <button class="comment-modal-close" id="commentModalClose" type="button" aria-label="关闭评论"><i class="fas fa-times"></i></button>
    </div>
    <div class="comment-modal-content">
        {pboot:if('{pboot:commentstatus}'=='1')}
        <form class="comment-input-area" action="{pboot:commentaction}" method="post">
            <input type="text" class="comment-input" id="modalCommentInput" name="comment" placeholder="写下你的评论..." required>
            <span class="comment-captcha-fields" aria-hidden="true">
                <input type="text" class="comment-checkcode" name="checkcode" placeholder="验证码">
                <img class="comment-code-img" src="{pboot:checkcode}" alt="验证码" title="点击刷新" onclick="this.src='{pboot:checkcode}?'+Math.round(Math.random()*10);">
            </span>
            <button class="comment-submit" id="modalCommentSubmit" type="submit">发布</button>
        </form>
        {/pboot:if}
        <div class="comment-list" id="modalCommentList"></div>
        <div class="load-more-comments" id="modalLoadMoreCommentsBtnContainer" style="display: none;">
            <button class="load-more-btn-comment" id="modalLoadMoreCommentsBtn" type="button">加载更多评论 (5条)</button>
        </div>
    </div>
</div>

<!-- 分享弹窗 -->
<div id="sharePopup" class="share-popup">
    <div class="share-popup-header">
        <span>分享视频</span>
        <button class="share-popup-close" id="sharePopupClose" type="button" aria-label="关闭分享"><i class="fas fa-times"></i></button>
    </div>
    <div class="share-popup-scroll">
        <div class="share-popup-grid">
            <div class="share-popup-item whatsapp" data-platform="whatsapp"><div class="share-popup-icon"><i class="fab fa-whatsapp"></i></div><span>WhatsApp</span></div>
            <div class="share-popup-item wechat" data-platform="wechat"><div class="share-popup-icon"><i class="fab fa-weixin"></i></div><span>微信</span></div>
            <div class="share-popup-item pinterest" data-platform="pinterest"><div class="share-popup-icon"><i class="fab fa-pinterest"></i></div><span>Pinterest</span></div>
            <div class="share-popup-item facebook" data-platform="facebook"><div class="share-popup-icon"><i class="fab fa-facebook-f"></i></div><span>Facebook</span></div>
            <div class="share-popup-item linkedin" data-platform="linkedin"><div class="share-popup-icon"><i class="fab fa-linkedin-in"></i></div><span>LinkedIn</span></div>
            <div class="share-popup-item email" data-platform="email"><div class="share-popup-icon"><i class="fas fa-envelope"></i></div><span>邮箱</span></div>
        </div>
    </div>
    <div class="share-popup-link-row">
        <div class="share-popup-link" id="sharePopupLink"></div>
        <button class="share-popup-copy" id="sharePopupCopyBtn" type="button">复制链接</button>
    </div>
</div>

<!-- 登录弹窗 -->
<div class="modal-overlay" id="loginModalOverlay"></div>
<div class="login-modal" id="loginModal">
    <div class="login-modal-header">
        <h3>登录后发表评论</h3>
        <button class="login-modal-close" id="loginModalClose" type="button" aria-label="关闭登录"><i class="fas fa-times"></i></button>
    </div>
    <div class="login-modal-content">
        <p>请选择登录方式：</p>
        <div class="login-buttons">
            <div class="login-btn phone" id="loginPhoneBtn"><i class="fas fa-phone-alt"></i> 手机号验证码登录</div>
            <div class="login-btn google" id="loginGoogleBtn"><i class="fab fa-google"></i> Google账号登录</div>
            <div class="login-btn email" id="loginEmailBtn"><i class="fas fa-envelope"></i> 邮箱登录</div>
        </div>
    </div>
</div>
    
<!--页脚 FOOTER_START -->
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
    <script src="/skin/js/video.js?v=startup_mask_20260623a"></script>
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