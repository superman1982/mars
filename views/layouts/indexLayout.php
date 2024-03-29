<?php

use yii\helpers\Url;
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Mars</title>
        <!--兼容IE-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--移动优先-->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- lib css -->
        <link rel="stylesheet" href="/lib/bootstrap/dist/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="/lib/components-font-awesome/css/font-awesome.min.css"> -->
        <link rel="stylesheet" href="/lib/font-awesome-4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/main.min.css">
        <link rel="stylesheet" href="/lib/metisMenu/dist/metisMenu.min.css">
        <link rel="stylesheet/less" type="text/css" href="/css/theme.css">
        <script src="/lib/modernizr/modernizr.min.js"></script>
    </head>
    <body>
    <div class="bg-dark dk" id="wrap">
        <div id="top">
            <nav class="navbar navbar-inverse navbar-static-top">
                <div class="container-fluid">
                    <!-- logo-->
                    <header class="navbar-header">
                        <a href="user/index" class="navbar-brand">
                            <img src="/img/logo.png" alt="logo">
                        </a>
                    </header>

                    <!-- 右边小工具列表 -->
                    <div class="topnav">
                        <div class="btn-group">
                          <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip" class="btn btn-default btn-sm" id="toggleFullScreen">
                            <i class="glyphicon glyphicon-fullscreen"></i>
                          </a>
                        </div>
                    </div>

                    <!-- 左边导航列表-->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                          <li> <a href="dashboard.html">Dashboard</a>  </li>
                          <li> <a href="table.html">Tables</a>  </li>
                          <li> <a href="file.html">File Manager</a>  </li>
                          <li class='dropdown '>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              Form Elements
                              <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                              <li> <a href="form-general.html">General</a>  </li>
                              <li> <a href="form-validation.html">Validation</a>  </li>
                              <li> <a href="form-wysiwyg.html">WYSIWYG</a>  </li>
                              <li> <a href="form-wizard.html">Wizard &amp; File Upload</a>  </li>
                            </ul>
                          </li>
                        </ul
                    </div>
                </div>
            </nav><!-- /.navbar -->

            <!-- 搜索域 -->
            <header class="head">
                <div class="search-bar">
                    <form class="main-search" action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="键入关键词">
                            <span class="input-group-btn">
                                <button class="btn btn-primary btn-sm text-muted" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div><!-- /.search-bar -->
                <div class="main-bar">
                    <h3>
                        <i class="fa fa-home"></i>&nbsp; Mars
                    </h3>
                </div>
            </header>
        </div><!-- /#top -->

        <div id="left">
            <!-- 登录用户信息 -->
            <div class="media user-media bg-dark dker">
                <div class="user-media-toggleHover">
                    <span class="fa fa-user"></span>
                </div>
                <div class="user-wrapper bg-dark">
                    <a class="user-link" href="">
                        <img class="media-object img-thumbnail user-img" alt="头像" src="/img/user.gif">
                        <span class="label label-danger user-label">16</span>
                    </a>
                </div>
                <div class="media-body">
                    <h5 class="media-heading">头像</h5>
                    <ul class="list-unstyled user-info">
                        <li><a href="">Administrator</a></li>
                        <li>Last Access :
                            <br>
                            <small>
                                <i class="fa fa-calendar"></i>&nbsp;16 Mar 16:32
                            </small>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- menu -->
            <ul id="menu" class="bg-blue dker">
                <li class="nav-header">菜单</li>
                <li class="nav-divider"></li>
                <li>
                    <a href="">
                        <i class="fa fa-dashboard"></i><span class="link-title">&nbsp;主板</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-building"></i>
                        <span class="link-title">Layouts</span>
                        <span class="fa arrow"></span>
                    </a>
                    <!-- 子列表 -->
                    <ul>
                        <li>
                            <a href="">
                                <i class="fa fa-angle-right"></i>&nbsp; 子列表1
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-angle-right"></i>&nbsp; 子列表2
                            </a>
                        </li>
                    </ul>
                </li>
            </ul><!-- /#menu -->
        </div><!-- /#left -->

        <!-- 主体内容 -->
        <div id="content" style="height:800px">
            <div class="outer">
                <div class="inner bg-light lter">
                    <div class="col-lg-12">
                        <h1>BootStrap</h1>
                    </div>
                </div>
            </div>
        </div><!-- /#content-->
    </div>

    <!-- 底部 -->
    <footer class="Footer bg-dark dker">
        <p>2015 &copy; Mars by yield</p>
    </footer>

    <script src="/lib/jquery/dist/jquery.min.js"></script>
    <script src="/lib/less/dist/less.min.js"></script>
    <script src="/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/lib/metisMenu/dist/metisMenu.min.js"></script>
    <script src="/lib/screenfull/dist/screenfull.min.js"></script>
    <script src="/js/core.min.js"></script>
    <script src="/js/app.js"></script>
    </body>
</html>
