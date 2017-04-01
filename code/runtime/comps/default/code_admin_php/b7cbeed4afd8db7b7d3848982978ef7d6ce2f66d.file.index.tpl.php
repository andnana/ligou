<?php /* Smarty version Smarty-3.1.8, created on 2016-12-23 14:36:22
         compiled from "./admin/views/default\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11753581aa6f03ef0e7-89569266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7cbeed4afd8db7b7d3848982978ef7d6ce2f66d' => 
    array (
      0 => './admin/views/default\\login\\index.tpl',
      1 => 1478157478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11753581aa6f03ef0e7-89569266',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_581aa6f04514c7_40277973',
  'variables' => 
  array (
    'res' => 0,
    'url' => 0,
    'root' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581aa6f04514c7_40277973')) {function content_581aa6f04514c7_40277973($_smarty_tpl) {?><html>
<head>
	<title>用户登录</title>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/login.css">
	
	<!-- For-Mobile-Apps-and-Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //For-Mobile-Apps-and-Meta-Tags -->

</head>
<body>
<h1>网站后台管理平台</h1>
   <div class="main">
   <h2>用户登录</h2>
       <form  action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/login" method="post">
	 
			<input type="text" class="name" name="username" placeholder="用户名" required="">
			<input type="password" class="password" name="password" placeholder="密码" required="">
			<input type="submit" value="登录">
		</form>	
   </div>
   <div class="footer">
		<p> 大连新霆企业顾问有限公司<a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/index.php/index/index">>>点击这里</a>进入网站</p>
   </div>
</body>
</html><?php }} ?>