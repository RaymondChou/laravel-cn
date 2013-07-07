@extends('layouts.common')

@section('content')
<div class="black-background">
    <div class="container">
        <!--header title-->
        <div class="header-title box_orange">
            <div class="header-title-content text-left">
                <h1 class="text-white">中文文档</h1>
            </div>

            <!--top search-->
            <div class="topsearch">
                <form action="#" method="POST" >
                    <div class="header-search">
                        <input type="text" name="s" class="s white"  autocomplete="off"/>
                    </div>
                </form>
            </div>
            <!--/top search-->
            <div class="title-corner-orange"></div>
        </div>
        <!--/header title-->
    </div>
</div>

<!-- middle -->
<div class="white-background">
    <div class="container ">
        <div id="middle" class="cols2 box_white">
            <!-- content -->
            <div class="content docs-body" role="main">
                <p>L4文档翻译进行中:
                    https://github.com/RaymondChou/Laravel-cn-docs
                    fork这个项目进行翻译,然后pull-request</p>
                {{ $chapter }}
            </div>
            <!--/content-->

            <!--Sidebar-->
            <div class="sidebar">

                <!-- widget_nav_menu -->
                <div class="widget-container widget_nav_menu">
                    {{ $index }}
                </div>
                <!--/ widget_nav_menu -->

            </div>
            <!--/ sidebar -->

            <div class="clear"></div>
        </div>
        <div class="clear"></div>


        </div>
        <div class="clear"></div>
    </div>
</div>
<!--/middle-->
<script src="/js/code_color.js"></script>
<script>
    $(document).ready(function($)
    {
        $('.content pre, table code').addClass('prettyprint');
        prettyPrint();
    });
</script>
@stop