<?php /* Smarty version Smarty-3.1.8, created on 2016-12-23 14:36:22
         compiled from "./admin/views/default\public\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19685816dc4cce4028-95599387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '801674d704ae92acedbf55c041f37b31be055246' => 
    array (
      0 => './admin/views/default\\public\\header.tpl',
      1 => 1478328604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19685816dc4cce4028-95599387',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5816dc4cd39fb3_71280845',
  'variables' => 
  array (
    'title' => 0,
    'res' => 0,
    'app' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5816dc4cd39fb3_71280845')) {function content_5816dc4cd39fb3_71280845($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Admin panel developed with the Bootstrap from Twitter.">
    <meta name="author" content="travis">
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/ueditor/ueditor.config.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/ueditor/ueditor.all.js"></script>
	<link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/ueditor/themes/default/css/ueditor.css"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/site.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/01.css" rel="stylesheet">
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
			<a class="btn" href="my-profile.html"><i class="icon-user"></i> <?php echo $_SESSION['user']['username'];?>
</a>
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
			  <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/userdetail/id/<?php echo $_SESSION['user']['id'];?>
">更改密码</a></li>
              <li class="divider"></li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/login/logout">退出</a></li>
            </ul>
          </div>
          <div class="nav-collapse">
            <ul class="nav">
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/index/index">主页</a></li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">基本信息管理<b class="caret"></b></a>
				<ul class="dropdown-menu">
			
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/baseinfo/pagepic">网页大图</a></li>
			  <li class="divider"></li>
			  <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/baseinfo/welcome">欢迎语</a></li>
			  <li class="divider"></li>
			  <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/baseinfo/contact">联系我们</a></li>
			  <li class="divider"></li>
			  <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/baseinfo/service">业务介绍</a></li>
			  <li class="divider"></li>
			   <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/baseinfo/footer">页脚信息</a></li>
				</ul>
			  </li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">业务<b class="caret"></b></a>
				<ul class="dropdown-menu">
			 <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/service/index">业务信息</a></li>
			   <li class="divider"></li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/service/add">添加业务信息</a></li>
				</ul>
			  </li>
			   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">新闻动态<b class="caret"></b></a>
				<ul class="dropdown-menu">
				 <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/news/index"> 新闻动态</a></li>
				 <li class="divider"></li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/news/add">添加新闻动态</a></li>
				</ul>
			  </li>
			   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">留言<b class="caret"></b></a>
				<ul class="dropdown-menu">
			   <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/baseinfo/message">留言</a></li>
			    <li class="divider"></li>
			   <li> <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/baseinfo/nowcontact">现在留言</a></li>
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
      <?php }} ?>