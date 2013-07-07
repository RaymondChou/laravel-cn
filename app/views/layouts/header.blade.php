<div class="white-background">
    <div class="container">
        <div class="header">
            <div class="header-nav box_white">
                <!--logo-->
                <div class="logo"><a href="/"><img src="/images/logo.png" alt="" /></a></div>
                <!--/logo-->
                <!--Top Menu-->
                <div id="topmenu">
                    <ul class="dropdown">
                        <li class="menu-level-0"><a href="/">首页<span>Home</span></a></li>
                        <li class="menu-level-0"><a href="{{URL::to('docs')}}">中文文档 <span>Documents</span></a></li>
                        <li class="menu-level-0"><a href="http://laravel.io/" target="_blank">相关资料 <span>Resource</span></a>   </li>
                        <li class="menu-level-0"><a href="https://packagist.org/" target="_blank">扩展包 <span>Packages</span></a> </li>
                        <li class="menu-level-0"><a href="http://forums.laravel-cn.com">中文社区 <span>Forums</span></a></li>



                    </ul>
                </div>
                <!--/top menu-->
            </div>

            <a href="https://github.com/laravel/laravel" target="_blank"><div class="header-box"><h2 class=" text-white text-extrabold">4.0</h2></div></a>
            <div class="clear"></div>


        </div>
        @if(Route::currentRouteAction() == 'HomeController@index')
        <!--header title-->
        <div class="header-title box_white">
            <div class="header-title-content text-center">
                <h1><span class="text-orange">Laravel </span><span style="font-size: 18px;color: #808080" lang="EN-US" xml:lang="EN-US">[lærəˈvel]</span> 巨匠级PHP开发框架 </h1>
            </div>

            <!--top search-->
            <div class="topsearch">
                <form method=get action="http://www.google.com/search">
                    <div class="header-search">
                        <input type="text" name="q" class="s"  autocomplete="off"/>
                        <input type="hidden" name="ie" value=GB2312>
                        <input type="hidden" name="oe" value=GB2312>
                        <input type="hidden" name="hl" value=zh-CN>
                        <input type="hidden" name="domains" value="laravel-cn.com">
                        <input type="hidden" name="sitesearch" value="laravel-cn.com">
                    </div>
                </form>
            </div>
            <!--/top search-->
        </div>
        <!--/header title-->
        @endif
    </div>
    <div class="clear"></div>
</div>
<!--/header-->