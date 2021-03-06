<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>首页</title>
<link href="<{$path_css}>bootstrap.min.css" rel="stylesheet">
<link href="<{$path_css}>datepicker3.css" rel="stylesheet">
<link href="<{$path_css}>styles.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
</head>
<body>
    <!--导航栏-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<{$path_app}>index/index">
                    <span>后台</span>管理
                </a>
                <ul class="user-menu">
                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-user"></span> <{$username}> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> 个人信息</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-cog"></span> 设置</a></li>
                            <li><a href="<{$path_app}>index/login_out"><span class="glyphicon glyphicon-log-out"></span> 注销</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!-- /.container-fluid -->
    </nav>
    <!--导航栏结束-->
    <!--菜单栏-->
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <!--搜索栏结束-->
        <form role="search" action="http://www.baidu.com/baidu" target="_blank">
            <div class="form-group">
                <div class="input-group">
                    <input name="tn" type="hidden" value="SE_zzsearchcode_shhzc78w" style="">
                    <input type="text" class="form-control" placeholder="百度搜索" onfocus="checkHttps;" name="word">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        </button>
                    </span>
                </div>
            </div>
        </form>
        <!--搜索栏结束-->
        <ul class="nav menu">
            <li class="active"><a href="<{$path_app}>index/index"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
            <li class="parent ">
                <a href="#">
                    <span class="glyphicon glyphicon-th-large"></span>
                    内容管理
                    <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right">
                        <em class="glyphicon glyphicon-s glyphicon-plus"></em>
                    </span>
                </a>
                <ul class="children collapse" id="sub-item-1">
                    <li>
                        <a class="" href="#">
                            <span class="glyphicon glyphicon-tags"></span> 微博
                        </a>
                    </li>
                    <li>
                        <a class="" href="#">
                            <span class="glyphicon glyphicon-file"></span> 文章
                        </a>
                    </li>
                    <li>
                        <a class="" href="#">
                            <span class="glyphicon glyphicon-picture"></span> 相册
                        </a>
                    </li>
                    <li>
                        <a class="" href="#">
                            <span class="glyphicon glyphicon-envelope"></span> 邮件
                        </a>
                    </li>
                </ul>
            </li>
            <li class="parent ">
                <a href="#">
                    <span class="glyphicon glyphicon-hdd"></span>
                    前台管理
                    <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right">
                        <em class="glyphicon glyphicon-s glyphicon-plus"></em>
                    </span>
                </a>
                <ul class="children collapse" id="sub-item-2">
                    <li>
                        <a class="" href="#">
                            <span class="glyphicon glyphicon-share-alt"></span> Sub Item 1
                        </a>
                    </li>
                    <li>
                        <a class="" href="#">
                            <span class="glyphicon glyphicon-share-alt"></span> Sub Item 2
                        </a>
                    </li>
                </ul>
            </li>
            <li class="parent ">
                <a href="#">
                    <span class="glyphicon glyphicon-hdd"></span>
                    后台管理
                    <span data-toggle="collapse" href="#sub-item-3" class="icon pull-right">
                        <em class="glyphicon glyphicon-s glyphicon-plus"></em>
                    </span>
                </a>
                <ul class="children collapse" id="sub-item-3">
                    <li>
                        <a class="" href="#">
                            <span class="glyphicon glyphicon-share-alt"></span> Sub Item 1
                        </a>
                    </li>
                    <li>
                        <a class="" href="#">
                            <span class="glyphicon glyphicon-share-alt"></span> Sub Item 2
                        </a>
                    </li>
                </ul>
            </li>
            <li><a href="panels.html"><span class="glyphicon glyphicon-dashboard"></span> 访问统计</a></li>
            <li role="presentation" class="divider"></li>
        </ul>
    </div><!--/.sidebar-->
    <!--菜单栏结束-->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="<{$path_app}>index/index"><span class="glyphicon glyphicon-home"></span></a></li>
                <li class="active">
                    <{block name="page_name"}>
                    
                    <{/block}>
                </li>
            </ol>
        </div><!--/.row-->
        <{block name="container"}>
        
        <{/block}>
    </div><!--/.main-->
    <script src="<{$path_js}>jquery-1.11.1.min.js"></script>
    <script src="<{$path_js}>bootstrap.min.js"></script>
    <script src="<{$path_js}>chart.min.js"></script>
    <script src="<{$path_js}>chart-data.js"></script>
    <script src="<{$path_js}>easypiechart.js"></script>
    <script src="<{$path_js}>easypiechart-data.js"></script>
    <script src="<{$path_js}>bootstrap-datepicker.js"></script>
    <script>
        $('#calendar').datepicker({
            
        });
        !function ($) {
            $(document).on("click","ul.nav li.parent > a > span.icon", function(){
                $(this).find('em:first').toggleClass("glyphicon-minus");
            }); 
            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
        }(window.jQuery);
        $(window).on('resize', function () {
            if ($(window).width() > 768) $('#sidebar-collapse').collapse('show');
        });
        $(window).on('resize', function () {
            if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide');
        });
    </script>	
</body>
</html>
