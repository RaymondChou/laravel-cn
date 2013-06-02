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
                        <li class="menu-level-0"><a href="work.html">API <span>Api detail</span></a></li>
                        <li class="menu-level-0"><a href="blog.html">相关资料 <span>Resource</span></a>   </li>
                        <li class="menu-level-0"><a href="#">扩展包 <span>Packages</span></a>

                            <ul class="submenu-1">
                                <li class="menu-level-1"><a href="prices.html"><span>Pricing</span></a></li>
                                <li class="menu-level-1"><a href="shortcodes-buttons.html"><span>Shortcodes</span></a>
                                    <ul class="submenu-2">
                                        <li class="menu-level-2"><a href="shortcodes-buttons.html"><span>Buttons & Lists</span></a></li>
                                        <li class="menu-level-2"><a href="shortcodes-text.html"><span>Text & Images</span></a></li>
                                        <li class="menu-level-2"><a href="shortcodes-tabs.html"><span>Tabs & Toggles</span></a></li>
                                        <li class="menu-level-2"><a href="shortcodes-charts.html"><span>Charts</span></a></li>
                                        <li class="menu-level-2"><a href="shortcodes-columns.html"><span>Columns</span></a></li>
                                        <li class="menu-level-2"><a href="shortcodes-columns-full.html"><span>Full Width Columns</span></a></li>
                                        <li class="menu-level-2"><a href="shortcodes-lightbox.html"><span>Lightbox</span></a></li>
                                        <li class="menu-level-2"><a href="shortcodes-tables.html"><span>Tables & Boxes</span></a></li>
                                        <li class="menu-level-2"><a href="shortcodes-media.html"><span>Media (Videos & Img)</span></a></li>
                                        <li class="menu-level-2"><a href="shortcodes-maps.html"><span>Maps & Locations</span></a></li>
                                        <li class="menu-level-2"><a href="shortcodes-typography.html"><span>Typography</span></a></li>
                                        <li class="menu-level-2"><a href="shortcodes-widgets.html"><span>Widgets</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>


                    </ul>
                </div>
                <!--/top menu-->
            </div>

            <!--Let's Do It-->
            <a href="contacts.html"><div class="header-box"><h2 class=" text-white text-extrabold">4.0</h2></div></a>
            <!--/let's do it-->
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