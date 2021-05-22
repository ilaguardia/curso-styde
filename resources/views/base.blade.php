
<?php
$info = ['title' => 'Ficha de buceador - Divers Cabo de Palos',
    'description' => 'Rellena la ficha de buceador antes de venir a bucear.',
    'image' => 'http://www.diverscabodepalos.com/wp-content/uploads/2016/11/20161201-buzo-con-barracudas-h-1024x194.jpg'
        ]

/*
 * @if($info['image']){{ $info['image'] }}@else{{ 'http://www.diverscabodepalos.com/wp-content/uploads/2016/11/20161201-buzo-con-barracudas-h-1024x194.jpg' }}@endif
 *
 */
?>


<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8"/>
        <meta name="twitter:widgets:csp" content="on"/>
        <link rel="profile" href="http://gmpg.org/xfn/11"/>
        <link rel="pingback" href="http://www.diverscabodepalos.com/xmlrpc.php"/>

        <link rel="alternate" hreflang="es" href="{{ route('users.create') }}" />

        <!-- This site is optimized with the Yoast SEO plugin v15.8 - https://yoast.com/wordpress/plugins/seo/ -->
        <title>{{ $info['title'] }}</title>
        <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
        <link rel="canonical" href="{{ route('users.create') }}" />
        <meta property="og:locale" content="es_ES" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="{{ $info['title'] }}" />
        <meta property="og:description" content="{{ $info['description'] }}" />
        <meta property="og:url" content="{{ route('users.create') }}" />
        <meta property="og:site_name" content="Divers Cabo de Palos" />
        <meta property="article:publisher" content="https://www.facebook.com/diverscabodepalos/" />
        <meta property="article:published_time" content="2021-03-22T22:04:09+00:00" />
        <meta property="article:modified_time" content="2021-03-25T18:59:44+00:00" />
        <meta property="og:image" content="http://www.diverscabodepalos.com/wp-content/uploads/2016/11/20161201-buzo-con-barracudas-e.jpg" />
        <meta property="og:image:width" content="1069" />
        <meta property="og:image:height" content="600" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:creator" content="@diverscabopalos" />
        <meta name="twitter:site" content="@diverscabopalos" />
        <meta name="twitter:label1" content="Escrito por">
        <meta name="twitter:data1" content="Divers">
        <meta name="twitter:label2" content="Tiempo de lectura">
        <meta name="twitter:data2" content="3 minutos">
        <script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"http://www.diverscabodepalos.com/#website","url":"http://www.diverscabodepalos.com/","name":"Divers Cabo de Palos","description":"Centro de Buceo en Cabo de Palos","potentialAction":[{"@type":"SearchAction","target":"http://www.diverscabodepalos.com/?s={search_term_string}","query-input":"required name=search_term_string"}],"inLanguage":"es"},{"@type":"ImageObject","@id":"{{ route('users.create') }}#primaryimage","inLanguage":"es","url":"http://www.diverscabodepalos.com/wp-content/uploads/2016/11/20161201-buzo-con-barracudas-e.jpg","width":1069,"height":600},{"@type":"WebPage","@id":"{{ route('users.create') }}#webpage","url":"{{ route('users.create') }}","name":"Buceo del 26 de Marzo al 5 de Abril \u2013 Planing de Inmersiones - Divers Cabo de Palos","isPartOf":{"@id":"http://www.diverscabodepalos.com/#website"},"primaryImageOfPage":{"@id":"{{ route('users.create') }}#primaryimage"},"datePublished":"2021-03-22T22:04:09+00:00","dateModified":"2021-03-25T18:59:44+00:00","author":{"@id":"http://www.diverscabodepalos.com/#/schema/person/1eeb8bfa2b466819da64c2ba7800432d"},"breadcrumb":{"@id":"{{ route('users.create') }}#breadcrumb"},"inLanguage":"es","potentialAction":[{"@type":"ReadAction","target":["{{ route('users.create') }}"]}]},{"@type":"BreadcrumbList","@id":"{{ route('users.create') }}#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"item":{"@type":"WebPage","@id":"http://www.diverscabodepalos.com/","url":"http://www.diverscabodepalos.com/","name":"Portada"}},{"@type":"ListItem","position":2,"item":{"@type":"WebPage","@id":"http://www.diverscabodepalos.com/actividades-de-buceo/","url":"http://www.diverscabodepalos.com/actividades-de-buceo/","name":"Actividades de buceo"}},{"@type":"ListItem","position":3,"item":{"@type":"WebPage","@id":"{{ route('users.create') }}","url":"{{ route('users.create') }}","name":"Buceo del 26 de Marzo al 5 de Abril \u2013 Planing de Inmersiones"}}]},{"@type":"Person","@id":"http://www.diverscabodepalos.com/#/schema/person/1eeb8bfa2b466819da64c2ba7800432d","name":"Divers","image":{"@type":"ImageObject","@id":"http://www.diverscabodepalos.com/#personlogo","inLanguage":"es","url":"http://2.gravatar.com/avatar/be628af7b5a70e45ee178d749b160325?s=96&d=mm&r=g","caption":"Divers"}}]}</script>
        <!-- / Yoast SEO plugin. -->


        <link rel='dns-prefetch' href='//www.google.com' />
        <link rel='dns-prefetch' href='//fonts.googleapis.com' />
        <link rel='dns-prefetch' href='//s.w.org' />
        <link rel="alternate" type="application/rss+xml" title="Divers Cabo de Palos &raquo; Feed" href="http://www.diverscabodepalos.com/feed/" />
        <link rel="alternate" type="application/rss+xml" title="Divers Cabo de Palos &raquo; Feed de los comentarios" href="http://www.diverscabodepalos.com/comments/feed/" />
        <link rel="alternate" type="application/rss+xml" title="Divers Cabo de Palos &raquo; Comentario {{ $info['title'] }} del feed" href="{{ route('users.create') }}feed/" />
        <script type="text/javascript">
            window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/72x72\/", "ext":".png", "svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/svg\/", "svgExt":".svg", "source":{"concatemoji":"http:\/\/www.diverscabodepalos.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=c7694d7c052c2aa08291b296bfa454b9"}};
            !function(e, a, t){var r, n, o, i, p = a.createElement("canvas"), s = p.getContext && p.getContext("2d"); function c(e, t){var a = String.fromCharCode; s.clearRect(0, 0, p.width, p.height), s.fillText(a.apply(this, e), 0, 0); var r = p.toDataURL(); return s.clearRect(0, 0, p.width, p.height), s.fillText(a.apply(this, t), 0, 0), r === p.toDataURL()}function l(e){if (!s || !s.fillText)return!1; switch (s.textBaseline = "top", s.font = "600 32px Arial", e){case"flag":return!c([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) && (!c([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !c([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447])); case"emoji":return!c([55357, 56424, 8205, 55356, 57212], [55357, 56424, 8203, 55356, 57212])}return!1}function d(e){var t = a.createElement("script"); t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)}for (i = Array("flag", "emoji"), t.supports = {everything:!0, everythingExceptFlag:!0}, o = 0; o < i.length; o++)t.supports[i[o]] = l(i[o]), t.supports.everything = t.supports.everything && t.supports[i[o]], "flag" !== i[o] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[i[o]]); t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function(){t.DOMReady = !0}, t.supports.everything || (n = function(){t.readyCallback()}, a.addEventListener?(a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)):(e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function(){"complete" === a.readyState && t.readyCallback()})), (r = t.source || {}).concatemoji?d(r.concatemoji):r.wpemoji && r.twemoji && (d(r.twemoji), d(r.wpemoji)))}(window, document, window._wpemojiSettings);
        </script>

        <style type="text/css">
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 .07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        <link rel='stylesheet' id='zn_all_g_fonts-css'  href='//fonts.googleapis.com/css?family=Roboto%3A100%2C300%2Cregular%2C500%2C700%2C900%7CPatua+One%7CLato%3A100%2C300%2Cregular%2C700%2C900%7CKaushan+Script%3Aregular&#038;ver=c7694d7c052c2aa08291b296bfa454b9' type='text/css' media='all' />
        <link rel='stylesheet' id='wp-block-library-css'  href='http://www.diverscabodepalos.com/wp-includes/css/dist/block-library/style.min.css?ver=c7694d7c052c2aa08291b296bfa454b9' type='text/css' media='all' />
        <link rel='stylesheet' id='front-estilos-css'  href='http://www.diverscabodepalos.com/wp-content/plugins/asesor-cookies-para-la-ley-en-espana/html/front/estilos.css?ver=c7694d7c052c2aa08291b296bfa454b9' type='text/css' media='all' />
        <link rel='stylesheet' id='wpml-legacy-horizontal-list-0-css'  href='//www.diverscabodepalos.com/wp-content/plugins/sitepress-multilingual-cms/templates/language-switchers/legacy-list-horizontal/style.css?ver=1' type='text/css' media='all' />
        <style id='wpml-legacy-horizontal-list-0-inline-css' type='text/css'>
            .wpml-ls-statics-shortcode_actions{background-color:#eeeeee;}.wpml-ls-statics-shortcode_actions, .wpml-ls-statics-shortcode_actions .wpml-ls-sub-menu, .wpml-ls-statics-shortcode_actions a {border-color:#cdcdcd;}.wpml-ls-statics-shortcode_actions a {color:#444444;background-color:#ffffff;}.wpml-ls-statics-shortcode_actions a:hover,.wpml-ls-statics-shortcode_actions a:focus {color:#000000;background-color:#eeeeee;}.wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a {color:#444444;background-color:#ffffff;}.wpml-ls-statics-shortcode_actions .wpml-ls-current-language:hover>a, .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a:focus {color:#000000;background-color:#eeeeee;}
        </style>
        <link rel='stylesheet' id='wpml-legacy-post-translations-0-css'  href='//www.diverscabodepalos.com/wp-content/plugins/sitepress-multilingual-cms/templates/language-switchers/legacy-post-translations/style.css?ver=1' type='text/css' media='all' />
        <link rel='stylesheet' id='hg-mailchimp-styles-css'  href='http://www.diverscabodepalos.com/wp-content/themes/kallyas/framework/hogash-mailchimp/assets/css/hg-mailchimp.css?ver=1.0.0' type='text/css' media='all' />
        <link rel='stylesheet' id='kallyas-styles-css'  href='http://www.diverscabodepalos.com/wp-content/themes/kallyas/style.css?ver=4.17.5' type='text/css' media='all' />
        <link rel='stylesheet' id='th-bootstrap-styles-css'  href='http://www.diverscabodepalos.com/wp-content/themes/kallyas/css/bootstrap.min.css?ver=4.17.5' type='text/css' media='all' />
        <link rel='stylesheet' id='th-theme-template-styles-css'  href='http://www.diverscabodepalos.com/wp-content/themes/kallyas/css/template.min.css?ver=4.17.5' type='text/css' media='all' />
        <link rel='stylesheet' id='zion-frontend-css'  href='http://www.diverscabodepalos.com/wp-content/themes/kallyas/framework/zion-builder/assets/css/znb_frontend.css?ver=1.0.28' type='text/css' media='all' />
        <link rel='stylesheet' id='4924-layout.css-css'  href='//www.diverscabodepalos.com/wp-content/uploads/zion-builder/cache/4924-layout.css?ver=77ccb2ebc1ff987afe0ac6debbbeae26' type='text/css' media='all' />
        <link rel='stylesheet' id='th-theme-print-stylesheet-css'  href='http://www.diverscabodepalos.com/wp-content/themes/kallyas/css/print.css?ver=4.17.5' type='text/css' media='print' />
        <link rel='stylesheet' id='th-theme-options-styles-css'  href='//www.diverscabodepalos.com/wp-content/uploads/zn_dynamic.css?ver=1614018293' type='text/css' media='all' />

        <script type='text/javascript' src='http://www.diverscabodepalos.com/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp' id='jquery-core-js'></script>
        <script type='text/javascript' id='front-principal-js-extra'>
            /* <![CDATA[ */
            var cdp_cookies_info = {"url_plugin":"http:\/\/www.diverscabodepalos.com\/wp-content\/plugins\/asesor-cookies-para-la-ley-en-espana\/plugin.php", "url_admin_ajax":"http:\/\/www.diverscabodepalos.com\/wp-admin\/admin-ajax.php"};
            /* ]]> */
        </script>
        <script type='text/javascript' src='http://www.diverscabodepalos.com/wp-content/plugins/asesor-cookies-para-la-ley-en-espana/html/front/principal.js?ver=c7694d7c052c2aa08291b296bfa454b9' id='front-principal-js'></script>
        <script type='text/javascript' id='kl-recaptcha-js-extra'>
            /* <![CDATA[ */
            var zn_contact_form = {"captcha_not_filled":"Please complete the Captcha validation"};
            /* ]]> */
        </script>
        <script type='text/javascript' src='https://www.google.com/recaptcha/api.js?onload=kallyasOnloadCallback&#038;ver=1' id='kl-recaptcha-js'></script>
        <link rel="https://api.w.org/" href="http://www.diverscabodepalos.com/wp-json/" /><link rel="alternate" type="application/json" href="http://www.diverscabodepalos.com/wp-json/wp/v2/posts/4924" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://www.diverscabodepalos.com/xmlrpc.php?rsd" />
        <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://www.diverscabodepalos.com/wp-includes/wlwmanifest.xml" /> 

        <link rel='shortlink' href='http://www.diverscabodepalos.com/?p=4924' />
        <link rel="alternate" type="application/json+oembed" href="http://www.diverscabodepalos.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fwww.diverscabodepalos.com%2Factividades-de-buceo%2Fbuceo-del-26-de-marzo-al-5-de-abril-2021%2F" />
        <link rel="alternate" type="text/xml+oembed" href="http://www.diverscabodepalos.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fwww.diverscabodepalos.com%2Factividades-de-buceo%2Fbuceo-del-26-de-marzo-al-5-de-abril-2021%2F&#038;format=xml" />
        <meta name="generator" content="WPML ver:4.4.9 stt:1,2;" />
        <meta name="theme-color"
              content="#693f67">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

        <!--[if lte IE 8]>
        <script type="text/javascript">
                var $buoop = {
                        vs: {i: 10, f: 25, o: 12.1, s: 7, n: 9}
                };

                $buoop.ol = window.onload;

                window.onload = function () {
                        try {
                                if ($buoop.ol) {
                                        $buoop.ol()
                                }
                        }
                        catch (e) {
                        }

                        var e = document.createElement("script");
                        e.setAttribute("type", "text/javascript");
                        e.setAttribute("src", "http://browser-update.org/update.js");
                        document.body.appendChild(e);
                };
        </script>
        <![endif]-->

        <!-- for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Fallback for animating in viewport -->
        <noscript>
        <style type="text/css" media="screen">
            .zn-animateInViewport {visibility: visible;}
        </style>
        </noscript>
        <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style><script type="text/javascript" src="http://www.diverscabodepalos.com/wp-content/plugins/si-captcha-for-wordpress/captcha/si_captcha.js?ver=1616699888"></script>
        <!-- begin SI CAPTCHA Anti-Spam - login/register form style -->
        <style type="text/css">
            .si_captcha_small { width:175px; height:45px; padding-top:10px; padding-bottom:10px; }
            .si_captcha_large { width:250px; height:60px; padding-top:10px; padding-bottom:10px; }
            img#si_image_com { border-style:none; margin:0; padding-right:5px; float:left; }
            img#si_image_reg { border-style:none; margin:0; padding-right:5px; float:left; }
            img#si_image_log { border-style:none; margin:0; padding-right:5px; float:left; }
            img#si_image_side_login { border-style:none; margin:0; padding-right:5px; float:left; }
            img#si_image_checkout { border-style:none; margin:0; padding-right:5px; float:left; }
            img#si_image_jetpack { border-style:none; margin:0; padding-right:5px; float:left; }
            img#si_image_bbpress_topic { border-style:none; margin:0; padding-right:5px; float:left; }
            .si_captcha_refresh { border-style:none; margin:0; vertical-align:bottom; }
            div#si_captcha_input { display:block; padding-top:15px; padding-bottom:5px; }
            label#si_captcha_code_label { margin:0; }
            input#si_captcha_code_input { width:65px; }
            p#si_captcha_code_p { clear: left; padding-top:10px; }
            .si-captcha-jetpack-error { color:#DC3232; }
        </style>
        <!-- end SI CAPTCHA Anti-Spam - login/register form style -->
    </head>

    <body  class="post-template-default single single-post postid-4924 single-format-standard res1170 kl-sticky-header kl-skin--light" itemscope="itemscope" itemtype="https://schema.org/WebPage" >


        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58977343c375f8d1"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-77134817-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments); }
            gtag('js', new Date());
            gtag('config', 'UA-77134817-1');
        </script><div class="login_register_stuff"></div><!-- end login register stuff -->		<div id="fb-root"></div>
        <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return; }
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>


        <div id="page_wrapper">

            <header id="header" class="site-header  style6 header--sticky header--not-sticked     sticky-resize headerstyle--image_color site-header--relative nav-th--light siteheader-classic siteheader-classic-normal sheader-sh--light"  >
                <div class="site-header-wrapper sticky-top-area">

                    <div class="kl-top-header site-header-main-wrapper clearfix   sh--light">

                        <div class="container siteheader-container header--oldstyles">

                            <div class="fxb-row fxb-row-col-sm">

                                <div class='fxb-col fxb fxb-center-x fxb-center-y fxb-basis-auto fxb-grow-0'>
                                    <div id="logo-container" class="logo-container  hasHoverMe logosize--no zn-original-logo">
                                        <!-- Logo -->
                                        <h3 class='site-logo logo ' id='logo'><a href='http://www.diverscabodepalos.com/' class='site-logo-anch'><img class="logo-img-sticky site-logo-img-sticky" src="http://diverscabodepalos.com/wp-content/uploads/2016/04/divers-cabo-de-palos-centro-de-buceo-logo-blanco-footer-2.png"  alt="Divers Cabo de Palos" title="Centro de Buceo en Cabo de Palos" /><img class="logo-img site-logo-img" src="http://diverscabodepalos.com/wp-content/uploads/2016/04/divers-cabo-de-palos-centro-de-buceo-logo-blanco-3.png" width="230" height="105"  alt="Divers Cabo de Palos" title="Centro de Buceo en Cabo de Palos"  /></a></h3>			<!-- InfoCard -->
                                    </div>

                                </div>

                                <div class='fxb-col fxb-basis-auto'>



                                    <div class="separator site-header-separator visible-xs"></div>
                                    <div class="fxb-row site-header-row site-header-top ">

                                        <div class='fxb-col fxb fxb-start-x fxb-center-y fxb-basis-auto site-header-col-left site-header-top-left'>
                                        </div>

                                        <div class='fxb-col fxb fxb-end-x fxb-center-y fxb-basis-auto site-header-col-right site-header-top-right'>
                                            <div class="sh-component kl-header-toptext kl-font-alt"><ul class="topnav topnav-no-sc clearfix"><li id="menu-item-174" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174"><a href="tel:+0034687802891">Tel: <b>687 802 891</b></a></li> <li id="menu-item-48" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-48"><a href="mailto:info@diverscabodepalos.com">info@diverscabodepalos.com</a></li> </ul></div><ul class="sh-component topnav navLeft topnav--lang topnav-no-sc topnav-no-hdnav toplang--alt"><li class="languages drop topnav-drop topnav-li"><a href="#" class="topnav-item"><span class="toplang-flag-wrapper"><img src="http://www.diverscabodepalos.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/es.png" alt="Español" class="toplang-flag" /></span><span class="toplang-flag-code">Español</span><i class="glyphicon glyphicon-menu-down kl-icon-white"></i> </a><div class="pPanel topnav-drop-panel u-trans-all-2s"><ul class="inner topnav-drop-panel-inner"><li class="toplang-item "><a href="http://www.diverscabodepalos.com/en/" class="toplang-anchor"><img src="http://www.diverscabodepalos.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/en.png" alt="English" class="toplang-flag" /> English </a></li></ul></div></li></ul><ul class="sh-component social-icons sc--clean topnav navRight topnav-no-hdnav"><li class="topnav-li social-icons-li"><a href="https://www.facebook.com/diverscabodepalos/?fref=nf" data-zniconfam="kl-social-icons" data-zn_icon="" target="_blank" class="topnav-item social-icons-item scheader-icon-" title="Facebook"></a></li><li class="topnav-li social-icons-li"><a href="https://twitter.com/diverscabopalos" data-zniconfam="kl-social-icons" data-zn_icon="" target="_blank" class="topnav-item social-icons-item scheader-icon-" title="Twitter"></a></li><li class="topnav-li social-icons-li"><a href="http://instgy.com/profile.php?id=3096429075&name=diverscabodepalos" data-zniconfam="kl-social-icons" data-zn_icon="" target="_blank" class="topnav-item social-icons-item scheader-icon-" title="Instagram"></a></li><li class="topnav-li social-icons-li"><a href="https://plus.google.com/u/0/b/110215124138136884172/110215124138136884172/about/" data-zniconfam="kl-social-icons" data-zn_icon="" target="_blank" class="topnav-item social-icons-item scheader-icon-" title="Google+"></a></li><li class="topnav-li social-icons-li"><a href="https://www.youtube.com/channel/UCvMqQoW7vOiZqjHDH1d657g" data-zniconfam="kl-social-icons" data-zn_icon="" target="_blank" class="topnav-item social-icons-item scheader-icon-" title="YouTube"></a></li><li class="topnav-li social-icons-li"><a href="https://www.tripadvisor.es/Attraction_Review-g1087580-d10404906-Reviews-Divers_Cabo_de_Palos-Cabo_de_Palos.html" data-zniconfam="kl-social-icons" data-zn_icon="" target="_blank" class="topnav-item social-icons-item scheader-icon-" title="TripAdvisor"></a></li></ul>
                                            <div id="search" class="sh-component header-search headsearch--def">

                                                <a href="#" class="searchBtn header-search-button">
                                                    <span class="glyphicon glyphicon-search kl-icon-white"></span>
                                                </a>

                                                <div class="search-container header-search-container">

                                                    <form id="searchform" class="gensearch__form" action="http://www.diverscabodepalos.com/" method="get">
                                                        <input id="s" name="s" value="" class="inputbox gensearch__input" type="text" placeholder="BUSCAR..." />
                                                        <button type="submit" id="searchsubmit" value="go" class="gensearch__submit glyphicon glyphicon-search"></button>
                                                    </form>			</div>
                                            </div>

                                        </div>

                                    </div><!-- /.site-header-top -->

                                    <div class="separator site-header-separator visible-xs"></div>


                                    <div class="fxb-row site-header-row site-header-main ">

                                        <div class='fxb-col fxb fxb-start-x fxb-center-y fxb-basis-auto site-header-col-left site-header-main-left'>
                                        </div>

                                        <div class='fxb-col fxb fxb-center-x fxb-center-y fxb-basis-auto site-header-col-center site-header-main-center'>
                                        </div>

                                        <div class='fxb-col fxb fxb-end-x fxb-center-y fxb-basis-auto site-header-col-right site-header-main-right'>

                                            <div class='fxb-col fxb fxb-end-x fxb-center-y fxb-basis-auto site-header-main-right-top'>
                                                <div class="sh-component main-menu-wrapper" role="navigation" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement" >

                                                    <div class="zn-res-menuwrapper">
                                                        <a href="#" class="zn-res-trigger zn-menuBurger zn-menuBurger--3--s zn-menuBurger--anim1 " id="zn-res-trigger">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </a>
                                                    </div><!-- end responsive menu -->
                                                    <div id="main-menu" class="main-nav mainnav--sidepanel mainnav--active-bg mainnav--pointer-dash nav-mm--light zn_mega_wrapper "><ul id="menu-menu" class="main-menu main-menu-nav zn_mega_menu "><li id="menu-item-341" class="main-menu-item menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-341  main-menu-item-top  menu-item-even menu-item-depth-0"><a href="http://www.diverscabodepalos.com/" class=" main-menu-link main-menu-link-top"><span>Inicio</span></a></li>
                                                            <li id="menu-item-336" class="main-menu-item menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-336  main-menu-item-top  menu-item-even menu-item-depth-0"><a href="http://www.diverscabodepalos.com/inmersiones-de-buceo/" class=" main-menu-link main-menu-link-top"><span>Inmersiones</span></a>
                                                                <ul class="sub-menu clearfix">
                                                                    <li id="menu-item-312" class="main-menu-item menu-item menu-item-type-post_type menu-item-object-page menu-item-312  main-menu-item-sub  menu-item-odd menu-item-depth-1"><a href="http://www.diverscabodepalos.com/inmersiones-de-buceo/bajo-de-dentro/" class=" main-menu-link main-menu-link-sub"><span>Bajo de Dentro</span></a></li>
                                                                    <li id="menu-item-340" class="main-menu-item menu-item menu-item-type-post_type menu-item-object-page menu-item-340  main-menu-item-sub  menu-item-odd menu-item-depth-1"><a href="http://www.diverscabodepalos.com/inmersiones-de-buceo/bajo-de-piles-1/" class=" main-menu-link main-menu-link-sub"><span>Bajo de Piles 1</span></a></li>
                                                                    <li id="menu-item-2430" class="main-menu-item menu-item menu-item-type-post_type menu-item-object-page menu-item-2430  main-menu-item-sub  menu-item-odd menu-item-depth-1"><a href="http://www.diverscabodepalos.com/inmersiones-de-buceo/buceo-piles-2/" class=" main-menu-link main-menu-link-sub"><span>Bajo de Piles 2</span></a></li>
                                                                    <li id="menu-item-339" class="main-menu-item menu-item menu-item-type-post_type menu-item-object-page menu-item-339  main-menu-item-sub  menu-item-odd menu-item-depth-1"><a href="http://www.diverscabodepalos.com/inmersiones-de-buceo/bajo-de-testa/" class=" main-menu-link main-menu-link-sub"><span>Bajo de Testa</span></a></li>
                                                                    <li id="menu-item-320" class="main-menu-item menu-item menu-item-type-post_type menu-item-object-page menu-item-320  main-menu-item-sub  menu-item-odd menu-item-depth-1"><a href="http://www.diverscabodepalos.com/inmersiones-de-buceo/bajo-de-la-morra/" class=" main-menu-link main-menu-link-sub"><span>Bajo de La Morra</span></a></li>
                                                                    <li id="menu-item-413" class="main-menu-item menu-item menu-item-type-post_type menu-item-object-page menu-item-413  main-menu-item-sub  menu-item-odd menu-item-depth-1"><a href="http://www.diverscabodepalos.com/inmersiones-de-buceo/bajo-de-fuera/" class=" main-menu-link main-menu-link-sub"><span>Bajo de Fuera</span></a></li>
                                                                    <li id="menu-item-610" class="main-menu-item menu-item menu-item-type-post_type menu-item-object-page menu-item-610  main-menu-item-sub  menu-item-odd menu-item-depth-1"><a href="http://www.diverscabodepalos.com/inmersiones-de-buceo/pecio-naranjito/" class=" main-menu-link main-menu-link-sub"><span>Pecio Naranjito</span></a></li>
                                                                    <li id="menu-item-698" class="main-menu-item menu-item menu-item-type-post_type menu-item-object-page menu-item-698  main-menu-item-sub  menu-item-odd menu-item-depth-1"><a href="http://www.diverscabodepalos.com/inmersiones-de-buceo/pecio-carbonero/" class=" main-menu-link main-menu-link-sub"><span>Pecio Carbonero</span></a></li>
                                                                    <li id="menu-item-338" class="main-menu-item menu-item menu-item-type-post_type menu-item-object-page menu-item-338  main-menu-item-sub  menu-item-odd menu-item-depth-1"><a href="http://www.diverscabodepalos.com/inmersiones-de-buceo/escalerita/" class=" main-menu-link main-menu-link-sub"><span>Escalerita</span></a></li>
                                                                    <li id="menu-item-337" class="main-menu-item menu-item menu-item-type-post_type menu-item-object-page menu-item-337  main-menu-item-sub  menu-item-odd menu-item-depth-1"><a href="http://www.diverscabodepalos.com/inmersiones-de-buceo/cala-fria/" class=" main-menu-link main-menu-link-sub"><span>Cala Fría</span></a></li>
                                                                </ul>
                                                            </li>
                                                            <li id="menu-item-378" class="main-menu-item menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-378  main-menu-item-top  menu-item-even menu-item-depth-0"><a href="http://www.diverscabodepalos.com/cursos-de-buceo/" class=" main-menu-link main-menu-link-top"><span>Cursos</span></a>
                                                                <ul class="sub-menu clearfix">
                                                                    <li id="menu-item-40" class="main-menu-item menu-item menu-item-type-post_type menu-item-object-page menu-item-40  main-menu-item-sub  menu-item-odd menu-item-depth-1"><a href="http://www.diverscabodepalos.com/cursos-de-buceo/bautizo-de-buceo/" class=" main-menu-link main-menu-link-sub"><span>Bautizo de buceo</span></a></li>
                                                                    <li id="menu-item-4404" class="main-menu-item menu-item menu-item-type-post_type menu-item-object-page menu-item-4404  main-menu-item-sub  menu-item-odd menu-item-depth-1"><a href="http://www.diverscabodepalos.com/cursos-de-buceo/discover-scuba-diving/" class=" main-menu-link main-menu-link-sub"><span>Discover Scuba Diving</span></a></li>
                                                                    <li id="menu-item-39" class="main-menu-item menu-item menu-item-type-post_type menu-item-object-page menu-item-39  main-menu-item-sub  menu-item-odd menu-item-depth-1"><a href="http://www.diverscabodepalos.com/cursos-de-buceo/padi-scuba-diver/" class=" main-menu-link main-menu-link-sub"><span>PADI Scuba Diver</span></a></li>
                                                                    <li id="menu-item-38" class="main-menu-item menu-item menu-item-type-post_type menu-item-object-page menu-item-38  main-menu-item-sub  menu-item-odd menu-item-depth-1"><a href="http://www.diverscabodepalos.com/cursos-de-buceo/padi-open-water-diver/" class=" main-menu-link main-menu-link-sub"><span>PADI Open Water Diver</span></a></li>
                                                                    <li id="menu-item-37" class="main-menu-item menu-item menu-item-type-post_type menu-item-object-page menu-item-37  main-menu-item-sub  menu-item-odd menu-item-depth-1"><a href="http://www.diverscabodepalos.com/cursos-de-buceo/padi-advanced-open-water-diver/" class=" main-menu-link main-menu-link-sub"><span>PADI Advanced Open Water</span></a></li>
                                                                    <li id="menu-item-3332" class="main-menu-item menu-item menu-item-type-post_type menu-item-object-page menu-item-3332  main-menu-item-sub  menu-item-odd menu-item-depth-1"><a href="http://www.diverscabodepalos.com/cursos-de-buceo/padi-rescue-diver/" class=" main-menu-link main-menu-link-sub"><span>PADI Rescue Diver</span></a></li>
                                                                    <li id="menu-item-36" class="main-menu-item menu-item menu-item-type-post_type menu-item-object-page menu-item-36  main-menu-item-sub  menu-item-odd menu-item-depth-1"><a href="http://www.diverscabodepalos.com/cursos-de-buceo/padi-reactivate/" class=" main-menu-link main-menu-link-sub"><span>PADI Reactivate</span></a></li>
                                                                    <li id="menu-item-142" class="main-menu-item menu-item menu-item-type-post_type menu-item-object-page menu-item-142  main-menu-item-sub  menu-item-odd menu-item-depth-1"><a href="http://www.diverscabodepalos.com/cursos-de-buceo/especialidades-buceo/" class=" main-menu-link main-menu-link-sub"><span>Especialidades de buceo</span></a></li>
                                                                </ul>
                                                            </li>
                                                            <li id="menu-item-468" class="main-menu-item menu-item menu-item-type-post_type menu-item-object-page current_page_parent menu-item-468  main-menu-item-top  menu-item-even menu-item-depth-0"><a href="http://www.diverscabodepalos.com/actividades-de-buceo/" class=" main-menu-link main-menu-link-top"><span>Actividades</span></a></li>
                                                            <li id="menu-item-3976" class="main-menu-item menu-item menu-item-type-post_type menu-item-object-page menu-item-3976  main-menu-item-top  menu-item-even menu-item-depth-0"><a href="http://www.diverscabodepalos.com/viajes-de-buceo/" class=" main-menu-link main-menu-link-top"><span>Viajes</span></a></li>
                                                            <li id="menu-item-173" class="main-menu-item menu-item menu-item-type-custom menu-item-object-custom menu-item-173  main-menu-item-top  menu-item-even menu-item-depth-0"><a href="http://www.buceoiberico.com/tienda-online/" class=" main-menu-link main-menu-link-top"><span>Tienda</span></a></li>
                                                            <li id="menu-item-3905" class="main-menu-item menu-item menu-item-type-post_type menu-item-object-page menu-item-3905  main-menu-item-top  menu-item-even menu-item-depth-0"><a href="http://www.diverscabodepalos.com/regalos-para-buceadores/" class=" main-menu-link main-menu-link-top"><span>Regalos</span></a></li>
                                                            <li id="menu-item-1149" class="main-menu-item menu-item menu-item-type-post_type menu-item-object-page menu-item-1149  main-menu-item-top  menu-item-even menu-item-depth-0"><a href="http://www.diverscabodepalos.com/comicdivers/" class=" main-menu-link main-menu-link-top"><span>Comic Divers</span></a></li>
                                                            <li id="menu-item-43" class="main-menu-item menu-item menu-item-type-post_type menu-item-object-page menu-item-43  main-menu-item-top  menu-item-even menu-item-depth-0"><a href="http://www.diverscabodepalos.com/contacto/" class=" main-menu-link main-menu-link-top"><span>Contacta con Divers Cabo de Palos</span></a></li>
                                                        </ul></div>		</div>
                                                <!-- end main_menu -->
                                            </div>


                                        </div>

                                    </div><!-- /.site-header-main -->


                                </div>
                            </div>
                        </div><!-- /.siteheader-container -->
                    </div><!-- /.site-header-main-wrapper -->

                </div><!-- /.site-header-wrapper -->
            </header>
            <div class="zn_pb_wrapper clearfix zn_sortable_content" data-droplevel="0"><div id="page_header" class="page-subheader maskcontainer--mask6 page-subheader--custom site-subheader-cst uh_zn_def_header_style eluid49e8b28a  psubhead-stheader--relative sh-tcolor--light">

                    <div class="bgback"></div>

                    <div class="zn-bgSource "  ><div class="zn-bgSource-image" style="background-image:url(http://www.diverscabodepalos.com/wp-content/uploads/2016/11/20161201-buzo-con-barracudas-h.jpg);background-repeat:no-repeat;background-position:center top;background-size:cover;background-attachment:scroll"></div></div>
                    <div class="th-sparkles"></div>

                    <!-- DEFAULT HEADER STYLE -->
                    <div class="ph-content-wrap">
                        <div class="ph-content-v-center">
                            <div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <ul vocab="http://schema.org/" typeof="BreadcrumbList" class="breadcrumbs fixclear bread-style--black">
                                                <li property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" href="http://www.diverscabodepalos.com"><span property="name">Inicio</span></a><meta property="position" content="1"></li>
                                            </ul>
                                            <li property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="{{ $info['title'] }}" href="{{ route('users.create') }}"><span property="name">{{ $info['title'] }}</span></a><meta property="position" content="2"></li>
                                            <div                                                                             class="clearfix"></div>
                                        </div>

                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kl-mask kl-bottommask kl-mask--mask6 kl-mask--light"><svg width="2700px" height="57px" class="svgmask" viewBox="0 0 2700 57" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" >
                        <defs>
                        <filter x="-50%" y="-50%" width="200%" height="200%" filterUnits="objectBoundingBox" id="filter-mask6">
                            <feOffset dx="0" dy="-2" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                            <feGaussianBlur stdDeviation="2" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
                            <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.5 0" in="shadowBlurOuter1" type="matrix" result="shadowMatrixOuter1"></feColorMatrix>
                            <feMerge>
                                <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                                <feMergeNode in="SourceGraphic"></feMergeNode>
                            </feMerge>
                        </filter>
                        </defs>
                        <g transform="translate(-1.000000, 10.000000)">
                        <path d="M0.455078125,18.5 L1,47 L392,47 L1577,35 L392,17 L0.455078125,18.5 Z" fill="#000000"></path>
                        <path d="M2701,0.313493752 L2701,47.2349598 L2312,47 L391,47 L2312,0 L2701,0.313493752 Z" fill="#f5f5f5" class="bmask-bgfill" filter="url(#filter-mask6)"  style="fill:"></path>
                        <path d="M2702,3 L2702,19 L2312,19 L1127,33 L2312,3 L2702,3 Z" fill="#cd2122" class="bmask-customfill"></path>
                        </g>
                        </svg>
                    </div></div>
                <section class="zn_section eluidf83e120c     section-sidemargins    section--no " id="eluidf83e120c"  >


                    <div class="zn_section_size container zn-section-height--auto zn-section-content_algn--top ">

                        <div class="row ">

                            <div class="eluid0016e000            col-md-12 col-sm-12   znColumnElement"  id="eluid0016e000" >


                                <div class="znColumnElement-innerWrapper-eluid0016e000 znColumnElement-innerWrapper znColumnElement-innerWrapper--valign-top znColumnElement-innerWrapper--halign-left " >

                                    <div class="znColumnElement-innerContent">					<div class="kl-title-block clearfix tbk--text- tbk--left text-left tbk-symbol--line_border  tbk-icon-pos--after-title eluid58cbb96e " >
                                            <h3 class="tbk__title" itemprop="headline" >{{ $info['title'] }}</h3>
                                            <span class="tbk__symbol "><span></span></span>
                                            <h4 class="tbk__subtitle" itemprop="alternativeHeadline" >Inmersiones de buceo para la próxima semana:</h4>
                                            <div class="tbk__text">
                                                @yield('content')
                                            </div></div>				</div>
                                </div>


                            </div>

                        </div>
                    </div>

                </section>


                <div class="eluid72852e4d " ><div class="eluid6bf619c9 " >		<section class="zn_section eluid20601a60     section-sidemargins    section--no " id="eluid20601a60"  >


                            <div class="zn_section_size container zn-section-height--auto zn-section-content_algn--top ">

                                <div class="row ">

                                    <div class="eluid340fab1b            col-md-6 col-sm-6   znColumnElement"  id="eluid340fab1b" >


                                        <div class="znColumnElement-innerWrapper-eluid340fab1b znColumnElement-innerWrapper znColumnElement-innerWrapper--valign-top znColumnElement-innerWrapper--halign-left " >

                                            <div class="znColumnElement-innerContent">					<div class="zn_text_box eluidf92a4f95  zn_text_box-light element-scheme--light" ><div style="border: 1px solid #EBDCED; margin: -13px 2px 2px 2px;">
                                                        <p style="text-align: center; margin: 4px;"><a href="http://www.diverscabodepalos.com/actividades-de-buceo/febrero-mes-de-los-regalos-2021/"><strong>FEBRERO, Mes de los regalos</strong> en <strong>Divers Cabo de Palos</strong></a></p>
                                                        <p style="text-align: center; margin: 4px;">Compra ahora con descuento y bucea cuando quieras <a class="btn btn-fullcolor prc-table-btn" href="http://www.diverscabodepalos.com/actividades-de-buceo/febrero-mes-de-los-regalos-2021/">+ INFO</a></p>
                                                    </div>
                                                </div>				</div>
                                        </div>


                                    </div>

                                    <div class="eluid5990fbe2            col-md-6 col-sm-6   znColumnElement"  id="eluid5990fbe2" >


                                        <div class="znColumnElement-innerWrapper-eluid5990fbe2 znColumnElement-innerWrapper znColumnElement-innerWrapper--valign-top znColumnElement-innerWrapper--halign-left " >

                                            <div class="znColumnElement-innerContent">					<div class="zn_text_box eluid57ac9d72  zn_text_box-light element-scheme--light" ><div style="border: 1px solid #EBDCED; margin: -13px 2px 2px 2px;">
                                                        <p style="text-align: center; margin: 4px;"><strong><a href="http://www.diverscabodepalos.com/actividades-de-buceo/febrero-mes-de-los-regalos-2021/">Bautizos, Cursos e inmersiones de buceo</a></strong> a los mejores precios</p>
                                                        <p style="text-align: center; margin: 4px;"><a href="http://www.diverscabodepalos.com/actividades-de-buceo/febrero-mes-de-los-regalos-2021/">Este Febrero <strong>Regala Buceo</strong></a>  <a class="btn btn-fullcolor prc-table-btn" href="http://www.diverscabodepalos.com/actividades-de-buceo/febrero-mes-de-los-regalos-2021/">+ INFO</a></p>
                                                    </div>
                                                </div>				</div>
                                        </div>


                                    </div>

                                </div>
                            </div>

                        </section>


                    </div><div class="eluid704bcb27 " >		<section class="zn_section eluidcb0e3065     section-sidemargins    section--no " id="eluidcb0e3065"  >


                            <div class="zn_section_size container zn-section-height--auto zn-section-content_algn--top ">

                                <div class="row ">

                                    <div class="eluid28b0d684            col-md-12 col-sm-12   znColumnElement"  id="eluid28b0d684" >


                                        <div class="znColumnElement-innerWrapper-eluid28b0d684 znColumnElement-innerWrapper znColumnElement-innerWrapper--valign-top znColumnElement-innerWrapper--halign-left " >

                                            <div class="znColumnElement-innerContent">					<div class="elm-phpcode eluid5fe72146 "><div class="alignleft"><- <a href="http://www.diverscabodepalos.com/actividades-de-buceo/febrero-mes-de-los-regalos-2021/" rel="prev">Febrero, mes de los regalos en Divers Cabo de Palos</a></div></div>				</div>
                                        </div>


                                    </div>

                                </div>
                            </div>

                        </section>


                    </div><div class="eluid40730ab5 " >		<section class="zn_section eluid3e621b6e     section-sidemargins    zn_section--relative section--no element-scheme--dark" id="eluid3e621b6e"  >

                            <div class="zn-bgSource "  ><div class="zn-bgSource-overlay" style="background: -webkit-linear-gradient(top,  rgba(53,53,53,0.3) 0%,rgba(53,53,53,0.3) 100%); background: linear-gradient(to bottom,  rgba(53,53,53,0.3) 0%,rgba(53,53,53,0.3) 100%); "></div></div>
                            <div class="zn_section_size container zn-section-height--auto zn-section-content_algn--top ">

                                <div class="row ">

                                    <div class="eluid046e3743            col-md-12 col-sm-12   znColumnElement"  id="eluid046e3743" >


                                        <div class="znColumnElement-innerWrapper-eluid046e3743 znColumnElement-innerWrapper znColumnElement-innerWrapper--valign-top znColumnElement-innerWrapper--halign-left " >

                                            <div class="znColumnElement-innerContent">					<div class="kl-title-block clearfix tbk--text- tbk--center text-center tbk-symbol--  tbk-icon-pos--after-title eluiddecbb22f " ><h3 class="tbk__title" itemprop="headline" ><b>INMERSIONES</b> DE BUCEO:</h3><h4 class="tbk__subtitle" itemprop="alternativeHeadline" >Ven a conocer los espectaculares fondos submarinos de Cabo de Palos.</h4></div><div class="table-responsive-normal"><div id="eluide753bb2c" class="pricing-table-element prc-table eluide753bb2c  prt--light element-scheme--light"  data-columns="4"><div class="plan-column prc-table-col  "><ul class="prc-table-col-list">
                                                                <li class="plan-title prc-table-col-title text-custom">
                                                                    <div class="inner-cell prc-table-col-title-cell kl-font-alt" >EN LA RESERVA</div>
                                                                </li>
                                                                <li class="subscription-price prc-table-col-price">
                                                                    <div class="inner-cell prc-table-col-title">
                                                                        <span class="prc-table-col-titlePrice"><span class="price kl-font-alt">45<small>€</small></span><span class="currency"></span></span><br>
                                                                        <span class="prc-table-col-titlePer">per</span> <span class="prc-table-col-titlePeriod"></span></div>
                                                                </li></ul></div><div class="plan-column prc-table-col  "><ul class="prc-table-col-list">
                                                                <li class="plan-title prc-table-col-title text-custom">
                                                                    <div class="inner-cell prc-table-col-title-cell kl-font-alt" >EN LAS CALAS</div>
                                                                </li>
                                                                <li class="subscription-price prc-table-col-price">
                                                                    <div class="inner-cell prc-table-col-title">
                                                                        <span class="prc-table-col-titlePrice"><span class="price kl-font-alt">35<small>€</small></span><span class="currency"></span></span><br>
                                                                        <span class="prc-table-col-titlePer">per</span> <span class="prc-table-col-titlePeriod"></span></div>
                                                                </li></ul></div><div class="plan-column prc-table-col  "><ul class="prc-table-col-list">
                                                                <li class="plan-title prc-table-col-title text-custom">
                                                                    <div class="inner-cell prc-table-col-title-cell kl-font-alt" >NARANJITO</div>
                                                                </li>
                                                                <li class="subscription-price prc-table-col-price">
                                                                    <div class="inner-cell prc-table-col-title">
                                                                        <span class="prc-table-col-titlePrice"><span class="price kl-font-alt">40<small>€</small></span><span class="currency"></span></span><br>
                                                                        <span class="prc-table-col-titlePer">per</span> <span class="prc-table-col-titlePeriod"></span></div>
                                                                </li></ul></div><div class="plan-column prc-table-col  "><ul class="prc-table-col-list">
                                                                <li class="plan-title prc-table-col-title text-custom">
                                                                    <div class="inner-cell prc-table-col-title-cell kl-font-alt" >ESPECIALES</div>
                                                                </li>
                                                                <li class="subscription-price prc-table-col-price">
                                                                    <div class="inner-cell prc-table-col-title">
                                                                        <span class="prc-table-col-titlePrice"><span class="price kl-font-alt"><small>Consultar</small></span><span class="currency"></span></span><br>
                                                                        <span class="prc-table-col-titlePer">per</span> <span class="prc-table-col-titlePeriod"></span></div>
                                                                </li></ul></div></div></div><div class="kl-title-block clearfix tbk--text- tbk--center text-center tbk-symbol--  tbk-icon-pos--after-title eluide1735664 " ><h4 class="tbk__subtitle" itemprop="alternativeHeadline" >Todas las inmersiones incluyen traslado en barco al punto de inmersión, guía, botella y plomos. Las inmersiones en la Reserva incluyen las tasas. </br>Consúltanos los descuentos para grupos y otras tarifas rellenando el <a href="http://diverscabodepalos.com/contacto/"><b>FORMULARIO DE CONTACTO.</b></font></a></h4></div>				</div>
                                        </div>


                                    </div>

                                </div>
                            </div>

                        </section>


                    </div><div class="eluid77fb0762 " >		<section class="zn_section eluidfab32dbb     section-sidemargins    zn_section--relative section--no " id="eluidfab32dbb"  >

                            <div class="zn-bgSource "  ><div class="zn-bgSource-overlay" style="background-color:rgba(0,0,0,0)"></div></div>
                            <div class="zn_section_size container zn-section-height--auto zn-section-content_algn--top ">

                                <div class="row ">

                                    <div class="eluid8647de5f            col-md-12 col-sm-12   znColumnElement"  id="eluid8647de5f" >


                                        <div class="znColumnElement-innerWrapper-eluid8647de5f znColumnElement-innerWrapper znColumnElement-innerWrapper--valign-top znColumnElement-innerWrapper--halign-left " >

                                            <div class="znColumnElement-innerContent">					<div class="kl-title-block clearfix tbk--text- tbk--left text-left tbk-symbol--  tbk-icon-pos--after-title eluida9cf6cea " ><h3 class="tbk__title" itemprop="headline" ><span id="apuntate">¡Ven a bucear con Divers Cabo de Palos!</span></h3><h4 class="tbk__subtitle" itemprop="alternativeHeadline" >Rellena el siguiente formulario para reservar tu plaza:</h4></div>				</div>
                                        </div>


                                    </div>

                                </div>
                            </div>

                        </section>


                        <section class="zn_section eluid279d49a6     section-sidemargins    zn_section--relative section--no " id="eluid279d49a6"  >

                            <div class="zn-bgSource "  ><div class="zn-bgSource-overlay" style="background-color:rgba(235,220,237,0)"></div></div>
                            <div class="zn_section_size container zn-section-height--auto zn-section-content_algn--top ">

                                <div class="row ">

                                    <div class="eluid9024fb9b            col-md-6 col-sm-6   znColumnElement"  id="eluid9024fb9b" >


                                        <div class="znColumnElement-innerWrapper-eluid9024fb9b znColumnElement-innerWrapper znColumnElement-innerWrapper--valign-top znColumnElement-innerWrapper--halign-left " >

                                            <div class="znColumnElement-innerContent">					
                                                <div class="zn_contact_form_container contactForm cf-elm eluidae8d6e9a  cf--light element-scheme--light  " >
                                                    <form action="#" id="form_eluidae8d6e9a" method="post" class="zn_contact_form contact_form cf-elm-form row " data-redirect=""><div class="col-sm-12  kl-fancy-form zn_form_field zn_cf_text"><input type="text" name="zn_form_field_nombre1_0" id="zn_form_field_nombre1_0"  value="" class="zn_form_input zn-field-text form-control  kl-fancy-form-input zn_validate_not_empty "/><label for="zn_form_field_nombre1_0" class="control-label kl-font-alt kl-fancy-form-label">Nombre</label></div><div class="col-sm-12  kl-fancy-form zn_form_field zn_cf_text"><input type="text" name="zn_form_field_email1_1" id="zn_form_field_email1_1"  value="" class="zn_form_input zn-field-text form-control  kl-fancy-form-input zn_validate_is_email "/><label for="zn_form_field_email1_1" class="control-label kl-font-alt kl-fancy-form-label">Email</label></div><div class="col-sm-12  kl-fancy-form zn_form_field zn_cf_text"><input type="text" name="zn_form_field_telefono1_2" id="zn_form_field_telefono1_2"  value="" class="zn_form_input zn-field-text form-control  kl-fancy-form-input zn_validate_not_empty "/><label for="zn_form_field_telefono1_2" class="control-label kl-font-alt kl-fancy-form-label">Teléfono</label></div><div class="col-sm-12  kl-fancy-form zn_form_field zn_cf_text"><input type="text" name="zn_form_field_titulacion_buceo1_3" id="zn_form_field_titulacion_buceo1_3"  value="" class="zn_form_input zn-field-text form-control  kl-fancy-form-input zn_validate_none "/><label for="zn_form_field_titulacion_buceo1_3" class="control-label kl-font-alt kl-fancy-form-label">Titulación buceo</label></div><div class="col-sm-12  kl-fancy-form zn_form_field zn_cf_textarea"><textarea name="zn_form_field_escribe_tu_consulta1_4" class="zn_form_input form-control  kl-fancy-form-textarea zn_validate_none " id="zn_form_field_escribe_tu_consulta1_4"  cols="40" rows="6"></textarea><label for="zn_form_field_escribe_tu_consulta1_4" class="control-label kl-font-alt kl-fancy-form-label">Escribe tu consulta</label></div><div class="col-sm-12  kl-fancy-form zn_form_field zn_cf_checkbox"><input  type="checkbox" name="zn_form_field_acepta_la_a_href_http_www_diverscabodepalos_com_politica_de_privacidad_politica_de_privacidad_a_1_5" class="zn_form_input form-control--light zn_validate_not_empty" id="zn_form_field_acepta_la_a_href_http_www_diverscabodepalos_com_politica_de_privacidad_politica_de_privacidad_a_1_5" value="true"/><label class="control-label" for="zn_form_field_acepta_la_a_href_http_www_diverscabodepalos_com_politica_de_privacidad_politica_de_privacidad_a_1_5">Acepta la <a href="http://www.diverscabodepalos.com/politica-de-privacidad/">política de privacidad</a></label></div><div class="col-sm-12  kl-fancy-form zn_form_field zn_cf_captcha"><span class="kl-recaptcha" data-colorscheme="light" data-sitekey="6LdD7NgUAAAAAMB6Uafkw8-u_Jfhqk9cT8ejQHuA" id="zn_recaptcha_1"></span></div><div class="col-sm-12  kl-fancy-form zn_form_field zn_cf_hidden"><input type="hidden" name="zn_pb_form_submit_1" id="zn_pb_form_submit_1" value="1" class="zn_form_input zn_validate_none" /></div><p class="col-sm-12  kl-fancy-form zn_form_field zn_cf_checkbox"><input id="mailchimp_subscribe_eluidae8d6e9a" name="mailchimp_subscribe_eluidae8d6e9a" value="yes" class="zn_form_input form-control--light" type="checkbox"/><label for="mailchimp_subscribe_eluidae8d6e9a">Apúntate a nuestra lista de correo</label><p><div class="col-sm-12"><div class="zn_contact_ajax_response titleColor" id="zn_form_id1" ></div><div class="zn_submit_container text-left"><button class="zn_contact_submit btn btn-fullcolor btn--rounded  " type="submit">Enviar</button></div></div></form>
                                                </div>

                                            </div>
                                        </div>


                                    </div>

                                    <div class="eluid49290ec5            col-md-6 col-sm-6   znColumnElement"  id="eluid49290ec5" >


                                        <div class="znColumnElement-innerWrapper-eluid49290ec5 znColumnElement-innerWrapper znColumnElement-innerWrapper--valign-top znColumnElement-innerWrapper--halign-left " >

                                            <div class="znColumnElement-innerContent">					<div class="action_box eluid0270e0b6  actionbox--light style2" data-arrowpos="center" ><div class="action_box_inner action_box-inner"><div class="action_box_content action_box-content"><div class="ac-content-text action_box-text"><h4 class="text action_box-title" itemprop="headline" ><strong>También puedes reservar por teléfono o preguntarnos cualquier duda que tengas.</strong></h4><h5 class="ac-subtitle action_box-subtitle"><strong>¡Te esperamos!</strong></h5></div><div class="ac-buttons action_box-buttons"><a href="tel:+0034687802891"  class="btn ac-btn action_box-button action_box-button-first btn-fullcolor"  target="_blank" rel="noopener" itemprop="url" >¡Llámanos!</a><a href="tel:+0034687802891"  class="btn ac-btn action_box-button action_box-button-second btn-fullwhite"  target="_blank" rel="noopener" itemprop="url" >Móvil: 687 802 891</a></div></div></div></div>				</div>
                                        </div>


                                    </div>

                                </div>
                            </div>

                        </section>


                    </div><div class="eluid3e8cd522 " >		<section class="zn_section eluid8c504e96     section-sidemargins    section--no " id="eluid8c504e96"  >


                            <div class="zn_section_size container zn-section-height--auto zn-section-content_algn--top ">

                                <div class="row ">

                                    <div class="eluid3cded478            col-md-12 col-sm-12   znColumnElement"  id="eluid3cded478" >


                                        <div class="znColumnElement-innerWrapper-eluid3cded478 znColumnElement-innerWrapper znColumnElement-innerWrapper--valign-top znColumnElement-innerWrapper--halign-left " >

                                            <div class="znColumnElement-innerContent">									<div class=" eluid49b12710  latest-posts-carousel latest-posts-crs" >

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="controls latest-posts-crs-controls">
                                                                <a href="http://www.diverscabodepalos.com/actividades-de-buceo/" class="latest-posts-grid kw-gridSymbol"></a>
                                                            </div>
                                                            <h3 class="m_title m_title_ext text-custom latest-posts-crs-elmtitle" itemprop="headline" >Otros artículos que te pueden interesar:</h3>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="posts-carousel latest-posts-crs-list-wrapper">
                                                                <ul class="latest-posts-crs-list js-slick" data-slick='{"infinite":true,"slidesToShow":3,"slidesToScroll":1,"autoplay":false,"appendArrows":".eluid49b12710 .latest-posts-crs-controls","arrows":true,"responsive":[{"breakpoint":1199,"settings":{"slidesToShow":3}},{"breakpoint":767,"settings":{"slidesToShow":2}},{"breakpoint":520,"settings":{"slidesToShow":1}}]}'>
                                                                    <li class="post latest-posts-crs-post">
                                                                        <a href="http://www.diverscabodepalos.com/actividades-de-buceo/febrero-mes-de-los-regalos-2021/" class="hoverBorder plus latest-posts-crs-link text-custom-parent-hov">
                                                                            <img class="latest-posts-crs-img" src="http://www.diverscabodepalos.com/wp-content/uploads/2019/02/20190201-san-valentin-en-diverscabodepalos-16X9-420x240_c.jpg" width="420" height="240" alt="" title="San Valentin en Divers Cabo de Palos"/>													<span class="latest-posts-crs-readon u-trans-all-2s text-custom-child kl-main-bgcolor">Leer más +</span>
                                                                        </a>
                                                                        <em class="latest-posts-crs-details">
                                                                            9 febrero, 2021													Por													Divers													en													<a href="http://www.diverscabodepalos.com/noticias/actividades-de-buceo/" title="View all posts in Actividades de Buceo">Actividades de Buceo</a>												</em>
                                                                        <h3 class="m_title m_title_ext text-custom latest-posts-crs-title" itemprop="headline" ><a class="latest-posts-crs-title-link" href="http://www.diverscabodepalos.com/actividades-de-buceo/febrero-mes-de-los-regalos-2021/">Febrero, mes de los regalos en Divers Cabo de Palos</a></h3>
                                                                    </li>
                                                                    <li class="post latest-posts-crs-post">
                                                                        <a href="http://www.diverscabodepalos.com/actividades-de-buceo/seguimos-con-las-ofertas-de-invierno-2020/" class="hoverBorder plus latest-posts-crs-link text-custom-parent-hov">
                                                                            <img class="latest-posts-crs-img" src="http://www.diverscabodepalos.com/wp-content/uploads/2020/11/Promo-Navidad-2020-16X9-scaled-420x240_c.jpg" width="420" height="240" alt="" title="Promo Navidad 2020 16X9"/>													<span class="latest-posts-crs-readon u-trans-all-2s text-custom-child kl-main-bgcolor">Leer más +</span>
                                                                        </a>
                                                                        <em class="latest-posts-crs-details">
                                                                            10 enero, 2021													Por													Divers													en													<a href="http://www.diverscabodepalos.com/noticias/actividades-de-buceo/" title="View all posts in Actividades de Buceo">Actividades de Buceo</a>												</em>
                                                                        <h3 class="m_title m_title_ext text-custom latest-posts-crs-title" itemprop="headline" ><a class="latest-posts-crs-title-link" href="http://www.diverscabodepalos.com/actividades-de-buceo/seguimos-con-las-ofertas-de-invierno-2020/">Seguimos con las Ofertas de Invierno en Divers Cabo de Palos</a></h3>
                                                                    </li>
                                                                    <li class="post latest-posts-crs-post">
                                                                        <a href="http://www.diverscabodepalos.com/actividades-de-buceo/feliz-2021/" class="hoverBorder plus latest-posts-crs-link text-custom-parent-hov">
                                                                            <img class="latest-posts-crs-img" src="http://www.diverscabodepalos.com/wp-content/uploads/2020/12/diverscabodepalos-feliz-2021-1024x577-420x240_c.jpg" width="420" height="240" alt="" title="diverscabodepalos-feliz-2021"/>													<span class="latest-posts-crs-readon u-trans-all-2s text-custom-child kl-main-bgcolor">Leer más +</span>
                                                                        </a>
                                                                        <em class="latest-posts-crs-details">
                                                                            31 diciembre, 2020													Por													Divers													en													<a href="http://www.diverscabodepalos.com/noticias/actividades-de-buceo/" title="View all posts in Actividades de Buceo">Actividades de Buceo</a>												</em>
                                                                        <h3 class="m_title m_title_ext text-custom latest-posts-crs-title" itemprop="headline" ><a class="latest-posts-crs-title-link" href="http://www.diverscabodepalos.com/actividades-de-buceo/feliz-2021/">¡Feliz año 2021!</a></h3>
                                                                    </li>
                                                                    <li class="post latest-posts-crs-post">
                                                                        <a href="http://www.diverscabodepalos.com/actividades-de-buceo/ofertas-de-invierno-2020/" class="hoverBorder plus latest-posts-crs-link text-custom-parent-hov">
                                                                            <img class="latest-posts-crs-img" src="http://www.diverscabodepalos.com/wp-content/uploads/2020/11/Promo-Navidad-2020-16X9-scaled-420x240_c.jpg" width="420" height="240" alt="" title="Promo Navidad 2020 16X9"/>													<span class="latest-posts-crs-readon u-trans-all-2s text-custom-child kl-main-bgcolor">Leer más +</span>
                                                                        </a>
                                                                        <em class="latest-posts-crs-details">
                                                                            13 diciembre, 2020													Por													Divers													en													<a href="http://www.diverscabodepalos.com/noticias/actividades-de-buceo/" title="View all posts in Actividades de Buceo">Actividades de Buceo</a>												</em>
                                                                        <h3 class="m_title m_title_ext text-custom latest-posts-crs-title" itemprop="headline" ><a class="latest-posts-crs-title-link" href="http://www.diverscabodepalos.com/actividades-de-buceo/ofertas-de-invierno-2020/">Ofertas de invierno en Divers Cabo de Palos</a></h3>
                                                                    </li>
                                                                    <li class="post latest-posts-crs-post">
                                                                        <a href="http://www.diverscabodepalos.com/actividades-de-buceo/buceo-del-30-de-octubre-al-2-de-noviembre-2020/" class="hoverBorder plus latest-posts-crs-link text-custom-parent-hov">
                                                                            <img class="latest-posts-crs-img" src="http://www.diverscabodepalos.com/wp-content/uploads/2018/11/20181119-lechas-bajo-de-dentro-4X3-420x240_c.jpg" width="420" height="240" alt="" title="Lechas en el Bajo de Dentro"/>													<span class="latest-posts-crs-readon u-trans-all-2s text-custom-child kl-main-bgcolor">Leer más +</span>
                                                                        </a>
                                                                        <em class="latest-posts-crs-details">
                                                                            28 octubre, 2020													Por													Divers													en													<a href="http://www.diverscabodepalos.com/noticias/actividades-de-buceo/" title="View all posts in Actividades de Buceo">Actividades de Buceo</a>												</em>
                                                                        <h3 class="m_title m_title_ext text-custom latest-posts-crs-title" itemprop="headline" ><a class="latest-posts-crs-title-link" href="http://www.diverscabodepalos.com/actividades-de-buceo/buceo-del-30-de-octubre-al-2-de-noviembre-2020/">Buceo del 30 de Octubre al 2 de Noviembre &#8211; Planing de Inmersiones</a></h3>
                                                                    </li>
                                                                    <li class="post latest-posts-crs-post">
                                                                        <a href="http://www.diverscabodepalos.com/actividades-de-buceo/buceo-del-22-al-26-de-octubre-2020-2/" class="hoverBorder plus latest-posts-crs-link text-custom-parent-hov">
                                                                            <img class="latest-posts-crs-img" src="http://www.diverscabodepalos.com/wp-content/uploads/2018/11/20181028-surcando-la-ola-bajo-de-dentro-4X3-420x240_c.jpg" width="420" height="240" alt="" title="Surcando la ola en el Bajo de Dentro"/>													<span class="latest-posts-crs-readon u-trans-all-2s text-custom-child kl-main-bgcolor">Leer más +</span>
                                                                        </a>
                                                                        <em class="latest-posts-crs-details">
                                                                            19 octubre, 2020													Por													Isa TeniSpain													en													<a href="http://www.diverscabodepalos.com/noticias/actividades-de-buceo/" title="View all posts in Actividades de Buceo">Actividades de Buceo</a>												</em>
                                                                        <h3 class="m_title m_title_ext text-custom latest-posts-crs-title" itemprop="headline" ><a class="latest-posts-crs-title-link" href="http://www.diverscabodepalos.com/actividades-de-buceo/buceo-del-22-al-26-de-octubre-2020-2/">Buceo del 22 al 26 de Octubre-Planing de Inmersiones</a></h3>
                                                                    </li>
                                                                    <li class="post latest-posts-crs-post">
                                                                        <a href="http://www.diverscabodepalos.com/actividades-de-buceo/buceo-del-15-al-20-de-octubre-2020/" class="hoverBorder plus latest-posts-crs-link text-custom-parent-hov">
                                                                            <img class="latest-posts-crs-img" src="http://www.diverscabodepalos.com/wp-content/uploads/2018/11/20181106-mero-escondido-en-piles-16X9-420x240_c.jpg" width="420" height="240" alt="" title="Mero escondido en Piles 1 &#8211; Divers Cabo de Palos"/>													<span class="latest-posts-crs-readon u-trans-all-2s text-custom-child kl-main-bgcolor">Leer más +</span>
                                                                        </a>
                                                                        <em class="latest-posts-crs-details">
                                                                            14 octubre, 2020													Por													Isa TeniSpain													en													<a href="http://www.diverscabodepalos.com/noticias/actividades-de-buceo/" title="View all posts in Actividades de Buceo">Actividades de Buceo</a>												</em>
                                                                        <h3 class="m_title m_title_ext text-custom latest-posts-crs-title" itemprop="headline" ><a class="latest-posts-crs-title-link" href="http://www.diverscabodepalos.com/actividades-de-buceo/buceo-del-15-al-20-de-octubre-2020/">Buceo del 15 al 20 de Octubre – Planing de inmersiones</a></h3>
                                                                    </li>
                                                                    <li class="post latest-posts-crs-post">
                                                                        <a href="http://www.diverscabodepalos.com/actividades-de-buceo/buceo-del-8-al-13-de-octubre-2020/" class="hoverBorder plus latest-posts-crs-link text-custom-parent-hov">
                                                                            <img class="latest-posts-crs-img" src="http://www.diverscabodepalos.com/wp-content/uploads/2019/02/20190226-blenido-en-cala-escalerita-16X9-420x240_c.jpg" width="420" height="240" alt="" title="Blénido en Escalerita con Divers Cabo de Palos"/>													<span class="latest-posts-crs-readon u-trans-all-2s text-custom-child kl-main-bgcolor">Leer más +</span>
                                                                        </a>
                                                                        <em class="latest-posts-crs-details">
                                                                            24 septiembre, 2020													Por													Isa TeniSpain													en													<a href="http://www.diverscabodepalos.com/noticias/actividades-de-buceo/" title="View all posts in Actividades de Buceo">Actividades de Buceo</a>												</em>
                                                                        <h3 class="m_title m_title_ext text-custom latest-posts-crs-title" itemprop="headline" ><a class="latest-posts-crs-title-link" href="http://www.diverscabodepalos.com/actividades-de-buceo/buceo-del-8-al-13-de-octubre-2020/">Buceo del 8 al 13 de Octubre – Planing de inmersiones</a></h3>
                                                                    </li>
                                                                    <li class="post latest-posts-crs-post">
                                                                        <a href="http://www.diverscabodepalos.com/actividades-de-buceo/buceo-del-24-al-29-de-septiembre-2020/" class="hoverBorder plus latest-posts-crs-link text-custom-parent-hov">
                                                                            <img class="latest-posts-crs-img" src="http://www.diverscabodepalos.com/wp-content/uploads/2018/11/20181119-lechas-bajo-de-dentro-4X3-420x240_c.jpg" width="420" height="240" alt="" title="Lechas en el Bajo de Dentro"/>													<span class="latest-posts-crs-readon u-trans-all-2s text-custom-child kl-main-bgcolor">Leer más +</span>
                                                                        </a>
                                                                        <em class="latest-posts-crs-details">
                                                                            19 septiembre, 2020													Por													Isa TeniSpain													en													<a href="http://www.diverscabodepalos.com/noticias/actividades-de-buceo/" title="View all posts in Actividades de Buceo">Actividades de Buceo</a>												</em>
                                                                        <h3 class="m_title m_title_ext text-custom latest-posts-crs-title" itemprop="headline" ><a class="latest-posts-crs-title-link" href="http://www.diverscabodepalos.com/actividades-de-buceo/buceo-del-24-al-29-de-septiembre-2020/">Buceo del 24 al 29 de Septiembre – Planing de inmersiones</a></h3>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>

                        </section>


                    </div></div></div>	<footer id="footer" class="site-footer"  role="contentinfo" itemscope="itemscope" itemtype="https://schema.org/WPFooter" >
                <div class="container">
                    <div class="row"><div class="col-sm-3"><div id="zn_mailchimp-2" class="widget widget_zn_mailchimp"><div class="newsletter-signup kl-newsletter-wrapper"><h3 class="widgettitle title m_title m_title_ext text-custom">Apúntate a nuestra lista de correo</h3><div class=" js-mcForm-result dn-widgetNewsletter-result"></div><form method="post" class="js-mcForm newsletter_subscribe newsletter-signup kl-newsletter clearfix" data-url="http://www.diverscabodepalos.com/" name="newsletter_form">	<input type="text" name="mc_email" class="nl-email kl-newsletter-field form-control js-mcForm-email" value="" placeholder="tu.mail@mail.com" />	<input type="hidden" name="mailchimp_list" class="nl-lid" value="5eb8c6e720" />  <input type="hidden" name="nonce" value="dd82089d7b" class="zn_hg_mailchimp"/>  <input type="hidden" name="action" value="hg_mailchimp_register" />	<input type="submit" name="submit" class="kl-newsletter-submit kl-font-alt btn btn-fullcolor" value="Enviar" /></form><p>Recibe en tu correo nuestras actividades</p>	</div><!-- end newsletter-signup --></div><div id="nav_menu-2" class="widget widget_nav_menu"><div class="menu-footer_1-container"><ul id="menu-footer_1" class="menu"><li id="menu-item-3375" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-3375"><a href="http://www.diverscabodepalos.com/">Divers Cabo de Palos</a></li>
                                        <li id="menu-item-3407" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3407"><a href="http://www.diverscabodepalos.com/fotos-buceo/">Galería de Fotos</a></li>
                                        <li id="menu-item-3399" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3399"><a href="http://www.diverscabodepalos.com/contacto/">Contacta con Divers Cabo de Palos</a></li>
                                        <li id="menu-item-3401" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3401"><a href="http://www.diverscabodepalos.com/politica-de-cookies/">Política de cookies</a></li>
                                        <li id="menu-item-3402" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3402"><a href="http://www.diverscabodepalos.com/politica-de-privacidad/">Política de Privacidad</a></li>
                                    </ul></div></div></div><div class="col-sm-3"><div id="nav_menu-3" class="widget widget_nav_menu"><div class="menu-footer_2-container"><ul id="menu-footer_2" class="menu"><li id="menu-item-3404" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3404"><a href="http://www.diverscabodepalos.com/regalos-para-buceadores/"><small>#</small> Regalos para buceadores</a></li>
                                        <li id="menu-item-3376" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3376"><a href="http://www.diverscabodepalos.com/cursos-de-buceo/">Cursos de Buceo</a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-3389" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3389"><a href="http://www.diverscabodepalos.com/cursos-de-buceo/bautizo-de-buceo/">Bautizo de buceo</a></li>
                                                <li id="menu-item-3390" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3390"><a href="http://www.diverscabodepalos.com/cursos-de-buceo/padi-scuba-diver/">PADI Scuba Diver</a></li>
                                                <li id="menu-item-3391" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3391"><a href="http://www.diverscabodepalos.com/cursos-de-buceo/padi-open-water-diver/">PADI Open Water Diver</a></li>
                                                <li id="menu-item-3392" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3392"><a href="http://www.diverscabodepalos.com/cursos-de-buceo/padi-advanced-open-water-diver/">PADI Advanced Open Water Diver</a></li>
                                                <li id="menu-item-3393" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3393"><a href="http://www.diverscabodepalos.com/cursos-de-buceo/padi-reactivate/">PADI Reactivate</a></li>
                                                <li id="menu-item-3394" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3394"><a href="http://www.diverscabodepalos.com/cursos-de-buceo/padi-rescue-diver/">PADI Rescue Diver</a></li>
                                                <li id="menu-item-3395" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3395"><a href="http://www.diverscabodepalos.com/cursos-de-buceo/especialidades-buceo/">Especialidades de buceo</a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-3405" class="menu-item menu-item-type-post_type menu-item-object-page current_page_parent menu-item-3405"><a href="http://www.diverscabodepalos.com/actividades-de-buceo/">Actividades de buceo</a></li>
                                        <li id="menu-item-3406" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3406"><a href="http://www.diverscabodepalos.com/comicdivers/"><small>#</small> Comic Divers</a></li>
                                    </ul></div></div></div><div class="col-sm-3"><div id="nav_menu-4" class="widget widget_nav_menu"><div class="menu-footer_3-container"><ul id="menu-footer_3" class="menu"><li id="menu-item-3378" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3378"><a href="http://www.diverscabodepalos.com/inmersiones-de-buceo/">Inmersiones de buceo</a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-3380" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3380"><a href="http://www.diverscabodepalos.com/inmersiones-de-buceo/bajo-de-dentro/">Inmersión en Bajo de Dentro</a></li>
                                                <li id="menu-item-3381" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3381"><a href="http://www.diverscabodepalos.com/inmersiones-de-buceo/bajo-de-piles-1/">Inmersión en Bajo de Piles 1</a></li>
                                                <li id="menu-item-3382" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3382"><a href="http://www.diverscabodepalos.com/inmersiones-de-buceo/buceo-piles-2/">Inmersión en Bajo de Piles 2</a></li>
                                                <li id="menu-item-3383" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3383"><a href="http://www.diverscabodepalos.com/inmersiones-de-buceo/bajo-de-testa/">Inmersión en Bajo de Testa</a></li>
                                                <li id="menu-item-3379" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3379"><a href="http://www.diverscabodepalos.com/inmersiones-de-buceo/bajo-de-la-morra/">Inmersión en Bajo de La Morra</a></li>
                                                <li id="menu-item-3388" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3388"><a href="http://www.diverscabodepalos.com/inmersiones-de-buceo/pecio-naranjito/">Inmersión en Pecio Naranjito</a></li>
                                                <li id="menu-item-3386" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3386"><a href="http://www.diverscabodepalos.com/inmersiones-de-buceo/escalerita/">Inmersión en Cala Escalerita</a></li>
                                                <li id="menu-item-3384" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3384"><a href="http://www.diverscabodepalos.com/inmersiones-de-buceo/cala-fria/">Inmersión en Cala Fría</a></li>
                                                <li id="menu-item-3387" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3387"><a href="http://www.diverscabodepalos.com/inmersiones-de-buceo/bajo-de-fuera/">Inmersión en Bajo de Fuera</a></li>
                                                <li id="menu-item-3385" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3385"><a href="http://www.diverscabodepalos.com/inmersiones-de-buceo/pecio-carbonero/">Inmersión en Pecio Carbonero</a></li>
                                            </ul>
                                        </li>
                                    </ul></div></div></div><div class="col-sm-3"><div id="text-2" class="widget widget_text">			<div class="textwidget"><img src="http://www.diverscabodepalos.com/wp-content/uploads/2018/05/2018_COE_Logos_Green-bkg_translations_es-ES-AR-LX-200px.jpg" alt="2018 Certificado de Excelencia"/>
                                    <div style="text-align:right"><div id="TA_cdsratingsonlywide172" class="TA_cdsratingsonlywide"><ul id="CjTXd1" class="TA_links enmDNj"><li id="46ZbkCn" class="pWpA1k9F"><a target="_blank" href="https://www.tripadvisor.es/" rel="noopener noreferrer"><img src="https://www.tripadvisor.es/img/cdsi/img2/branding/tripadvisor_logo_transp_340x80-18034-2.png" alt="TripAdvisor"/></a></li></ul></div><script src="https://www.jscache.com/wejs?wtype=cdsratingsonlywide&amp;uniq=172&amp;locationId=10404906&amp;lang=es&amp;border=true&amp;display_version=2"></script></div></div>
                            </div></div></div><!-- end row --><div class="row"><div class="col-sm-3"></div><div class="col-sm-3"></div><div class="col-sm-3"></div><div class="col-sm-3"></div></div><!-- end row -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="bottom site-footer-bottom clearfix">


                                <ul class="social-icons sc--clean clearfix"><li class="social-icons-li title">SOCIALÍZATE</li><li class="social-icons-li"><a data-zniconfam="kl-social-icons" data-zn_icon="" href="https://www.facebook.com/diverscabodepalos" target="_blank" title="Facebook" class="social-icons-item scfooter-icon-"></a></li><li class="social-icons-li"><a data-zniconfam="kl-social-icons" data-zn_icon="" href="https://twitter.com/diverscabopalos" target="_blank" title="Twitter" class="social-icons-item scfooter-icon-"></a></li><li class="social-icons-li"><a data-zniconfam="kl-social-icons" data-zn_icon="" href="http://instgy.com/profile.php?id=3096429075&name=diverscabodepalos" target="_blank" title="Instagram" class="social-icons-item scfooter-icon-"></a></li><li class="social-icons-li"><a data-zniconfam="kl-social-icons" data-zn_icon="" href="https://plus.google.com/u/0/b/110215124138136884172/110215124138136884172/about/p/pub" target="_blank" title="Google+" class="social-icons-item scfooter-icon-"></a></li><li class="social-icons-li"><a data-zniconfam="kl-social-icons" data-zn_icon="" href="https://www.youtube.com/channel/UCvMqQoW7vOiZqjHDH1d657g" target="_blank" title="Youtube" class="social-icons-item scfooter-icon-"></a></li><li class="social-icons-li"><a data-zniconfam="kl-social-icons" data-zn_icon="" href="https://www.tripadvisor.es/Attraction_Review-g1087580-d10404906-Reviews-Divers_Cabo_de_Palos-Cabo_de_Palos.html" target="_blank" title="TripAdvisor" class="social-icons-item scfooter-icon-"></a></li></ul>

                                <div class="copyright footer-copyright">
                                    <a href="http://www.diverscabodepalos.com" class="footer-copyright-link"><img class="footer-copyright-img" src="http://diverscabodepalos.com/wp-content/uploads/2016/04/divers-cabo-de-palos-centro-de-buceo-logo-blanco-footer-2.png"  alt="Divers Cabo de Palos" /></a><p class="footer-copyright-text"><br>© 2016. Todos los derechos reservados.</p>							</div><!-- end copyright -->
                            </div>
                            <!-- end bottom -->
                        </div>
                    </div>
                    <!-- end row -->
                </div>
            </footer>
        </div><!-- end page_wrapper -->

        <a href="#" id="totop" class="u-trans-all-2s js-scroll-event" data-forch="300" data-visibleclass="on--totop">SUBIR</a>

        <!-- HTML del pié de página -->
        <div class="cdp-cookies-alerta  cdp-solapa-ocultar cdp-cookies-tema-azul">
            <div class="cdp-cookies-texto">
                <strong style="font-size:15px !important;line-height:15px !important">Uso de cookies</strong><p style="font-size:12px !important;line-height:12px !important">Este sitio web utiliza cookies para que usted tenga la mejor experiencia de usuario. Si continúa navegando está dando su consentimiento para la aceptación de las mencionadas cookies y la aceptación de nuestra <a href="http://diverscabodepalos.com/politica-de-cookies/" style="font-size:12px !important;line-height:12px !important">política de cookies</a>, pinche el enlace para mayor información.
                    <a href="javascript:;" class="cdp-cookies-boton-cerrar">ACEPTAR</a> 
            </div>
            <a class="cdp-cookies-solapa">Aviso de cookies</a>
        </div>
        <script type='text/javascript' id='hg-mailchimp-js-js-extra'>
            /* <![CDATA[ */
            var hgMailchimpConfig = {"ajaxurl":"\/wp-admin\/admin-ajax.php", "l10n":{"error":"Error:"}};
            /* ]]> */
        </script>
        <script type='text/javascript' src='http://www.diverscabodepalos.com/wp-content/themes/kallyas/framework/hogash-mailchimp/assets/js/hg-mailchimp.js?ver=1.0.0' id='hg-mailchimp-js-js'></script>
        <script type='text/javascript' src='http://www.diverscabodepalos.com/wp-content/themes/kallyas/js/plugins.min.js?ver=4.17.5' id='kallyas_vendors-js'></script>
        <script type='text/javascript' src='http://www.diverscabodepalos.com/wp-includes/js/comment-reply.min.js?ver=c7694d7c052c2aa08291b296bfa454b9' id='comment-reply-js'></script>
        <script type='text/javascript' src='http://www.diverscabodepalos.com/wp-content/themes/kallyas/addons/scrollmagic/scrollmagic.js?ver=4.17.5' id='scrollmagic-js'></script>
        <script type='text/javascript' id='zn-script-js-extra'>
            /* <![CDATA[ */
            var zn_do_login = {"ajaxurl":"\/wp-admin\/admin-ajax.php", "add_to_cart_text":"\u00a1Producto a\u00f1adido al carrito!"};
            var ZnThemeAjax = {"ajaxurl":"\/wp-admin\/admin-ajax.php", "zn_back_text":"Back", "zn_color_theme":"light", "res_menu_trigger":"992", "top_offset_tolerance":"", "logout_url":"http:\/\/www.diverscabodepalos.com\/wp-login.php?action=logout&redirect_to=http%3A%2F%2Fwww.diverscabodepalos.com&_wpnonce=125b737c2f"};
            /* ]]> */
        </script>
        <script type='text/javascript' src='http://www.diverscabodepalos.com/wp-content/themes/kallyas/js/znscript.min.js?ver=4.17.5' id='zn-script-js'></script>
        <script type='text/javascript' src='http://www.diverscabodepalos.com/wp-content/themes/kallyas/addons/slick/slick.min.js?ver=4.17.5' id='slick-js'></script>
        <script type='text/javascript' id='zion-frontend-js-js-extra'>
            /* <![CDATA[ */
            var ZionBuilderFrontend = {"allow_video_on_mobile":""};
            /* ]]> */
        </script>
        <script type='text/javascript' src='http://www.diverscabodepalos.com/wp-content/themes/kallyas/framework/zion-builder/dist/znpb_frontend.bundle.js?ver=1.0.28' id='zion-frontend-js-js'></script>
        <script type='text/javascript' src='http://www.diverscabodepalos.com/wp-includes/js/wp-embed.min.js?ver=c7694d7c052c2aa08291b296bfa454b9' id='wp-embed-js'></script>
        <svg style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <defs>

    <symbol id="icon-znb_close-thin" viewBox="0 0 100 100">
        <path d="m87.801 12.801c-1-1-2.6016-1-3.5 0l-33.801 33.699-34.699-34.801c-1-1-2.6016-1-3.5 0-1 1-1 2.6016 0 3.5l34.699 34.801-34.801 34.801c-1 1-1 2.6016 0 3.5 0.5 0.5 1.1016 0.69922 1.8008 0.69922s1.3008-0.19922 1.8008-0.69922l34.801-34.801 33.699 33.699c0.5 0.5 1.1016 0.69922 1.8008 0.69922 0.69922 0 1.3008-0.19922 1.8008-0.69922 1-1 1-2.6016 0-3.5l-33.801-33.699 33.699-33.699c0.89844-1 0.89844-2.6016 0-3.5z"/>
    </symbol>


    <symbol id="icon-znb_play" viewBox="0 0 22 28">
        <path d="M21.625 14.484l-20.75 11.531c-0.484 0.266-0.875 0.031-0.875-0.516v-23c0-0.547 0.391-0.781 0.875-0.516l20.75 11.531c0.484 0.266 0.484 0.703 0 0.969z"></path>
    </symbol>

    </defs>
    </svg>
</body>
</html>

