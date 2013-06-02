<!DOCTYPE html>
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="zh" class="no-js"> <!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <meta name="author" content="RaymondChou">
    <meta name="keywords" content="Laravel,laravel4,php,框架,MVC,简单,易用,最好">
    <meta name="description" content="Laravel 中国社区, Laravel 是一个简单优雅的 PHP WEB 开发框架，将你从意大利面条式的代码中解放出来。通过简单的、高雅、表达式语法开发出很棒的 Web 应用。">

    <title>Laravel 中国 - 巨匠级PHP开发框架 Laravel 中国社区</title>
    <link href="/css/style.css" media="screen" rel="stylesheet">
    <link href="/css/screen.css" media="screen" rel="stylesheet">
    <link href="/css/flexslider.css" media="screen" rel="stylesheet" type="text/css">

    <link rel="shortcut icon" href="favicon.ico">

    <!-- Mobile optimized -->
    <script src="/js/libs/modernizr.min.js"></script>
    <script src="/js/libs/respond.min.js"></script>
    <script src="/js/libs/jquery.min.js"></script>

    <!-- scripts -->
    <script src="/js/jquery.easing.1.3.min.js"></script>
    <script src="/js/hoverIntent.js"></script>
    <script src="/js/general.js"></script>

    <!-- carousel -->
    <script src="/js/jquery.carouFredSel.packed.js"></script>
    <script src="/js/jquery.touchSwipe.min.js"></script>
    <!-- lightbox prettyPhoto -->
    <link rel="stylesheet" href="/css/prettyPhoto.css">
    <script src="/js/jquery.prettyPhoto.js"></script>
    <!-- top slider -->
    <script src="/js/jquery.flexslider-min.js"></script>
    <script src="/js/search-input.js"></script>

    <script type="text/javascript" charset="utf-8">

        $(window).load(function() {
            $('.tf-header-slider').flexslider({
                animation: "fade",
                maxItems: 11,
                controlNav: true
            });
        });

        $(window).load(function() {
            $('.tf-work-carousel').flexslider({
                animation: "slade",
                animationLoop: false,
                itemWidth: 280,
                itemMargin: 30,
                move: 1,
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });
        });

        $(window).load(function() {
            $('.tf-footer-carousel').flexslider({
                animation: "slide",
                animationLoop: true,
                itemWidth: 140,
                itemMargin: 15,
                minItems: 1,
                maxItems: 6,
                move:1
            });
        });

    </script>
    <script type="text/javascript" language="javascript" src="/js/custom.js"></script>
</head>
<body>
<div class="body-wrapper">

@include('layouts.header')

@yield('content')

@include('layouts.footer')

</div>

<script type="text/javascript">
    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fcbd85e238f6c8a54c657bdd653d81015' type='text/javascript'%3E%3C/script%3E"));
</script>
</body>
</html>
