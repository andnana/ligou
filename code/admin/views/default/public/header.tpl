<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><{$title}></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Admin panel developed with the Bootstrap from Twitter.">
    <meta name="author" content="travis">
	<script type="text/javascript" src="<{$res}>/ueditor/ueditor.config.js"></script>
	<script type="text/javascript" src="<{$res}>/ueditor/ueditor.all.js"></script>
	<link type="text/css" href="<{$res}>/ueditor/themes/default/css/ueditor.css"/>
    <link href="<{$res}>/css/bootstrap.css" rel="stylesheet">
	<link href="<{$res}>/css/site.css" rel="stylesheet">
    <link href="<{$res}>/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<{$res}>/css/01.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">网站后台管理</a>
          <div class="btn-group pull-right">
			<a class="btn" href="my-profile.html"><i class="icon-user"></i> <{$smarty.session.user.username}></a>
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
			  <li><a href="<{$app}>/user/userdetail/id/<{$smarty.session.user.id}>">更改密码</a></li>
              <li class="divider"></li>
              <li><a href="<{$app}>/login/logout">退出</a></li>
            </ul>
          </div>
          <div class="nav-collapse">
            <ul class="nav">
			<li><a href="<{$app}>/index/index">主页</a></li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">基本信息管理<b class="caret"></b></a>
				<ul class="dropdown-menu">
			
              <li><a href="<{$app}>/baseinfo/pagepic">网页大图</a></li>
			  <li class="divider"></li>
			  <li><a href="<{$app}>/baseinfo/welcome">欢迎语</a></li>
			  <li class="divider"></li>
			  <li><a href="<{$app}>/baseinfo/contact">联系我们</a></li>
			  <li class="divider"></li>
			  <li><a href="<{$app}>/baseinfo/service">业务介绍</a></li>
			  <li class="divider"></li>
			   <li><a href="<{$app}>/baseinfo/footer">页脚信息</a></li>
				</ul>
			  </li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">业务<b class="caret"></b></a>
				<ul class="dropdown-menu">
			 <li><a href="<{$app}>/service/index">业务信息</a></li>
			   <li class="divider"></li>
              <li><a href="<{$app}>/service/add">添加业务信息</a></li>
				</ul>
			  </li>
			   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">新闻动态<b class="caret"></b></a>
				<ul class="dropdown-menu">
				 <li><a href="<{$app}>/news/index"> 新闻动态</a></li>
				 <li class="divider"></li>
              <li><a href="<{$app}>/news/add">添加新闻动态</a></li>
				</ul>
			  </li>
			   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">留言<b class="caret"></b></a>
				<ul class="dropdown-menu">
			   <li><a href="<{$app}>/baseinfo/message">留言</a></li>
			    <li class="divider"></li>
			   <li> <a href="<{$app}>/baseinfo/nowcontact">现在留言</a></li>
				</ul>
			  </li>
			 <!-- <li><a href="stats.html">Stats</a></li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
      