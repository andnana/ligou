<?php /* Smarty version Smarty-3.1.8, created on 2016-12-23 16:27:46
         compiled from "./home/views/default\contact\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22193581707f8297a37-36250893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e30f382704ba3f0192f9b023992a80ca67e7aa2' => 
    array (
      0 => './home/views/default\\contact\\index.tpl',
      1 => 1482481616,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22193581707f8297a37-36250893',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_581707f83ea117_82577389',
  'variables' => 
  array (
    'res' => 0,
    'app' => 0,
    'root' => 0,
    'pagepic' => 0,
    'contact' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581707f83ea117_82577389')) {function content_581707f83ea117_82577389($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\phpStudy\\WWW\\code\\brophp\\libs\\plugins\\modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<div class="wrap headerbackground">
	<div class="logo">
		<a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/logocompanyname.png" alt=""/></a>
	</div>
	<div class="menu">
			<ul>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/index/index">首页</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/services/index">业务介绍</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/news/index">新闻动态</a></li>
			<li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/contact/index">联系我们</a></li>
		</ul>
	</div>
	
<div class="clear"></div>
</div>
	<div class="wrap">
	<div class="header">
		<div class="header_bottom" style="background: url('<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/public/uploads/<?php echo $_smarty_tpl->tpl_vars['pagepic']->value[0]['pic'];?>
') no-repeat;">
			<h2><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['pagepic']->value[0]['title'],15,"...",false);?>
</h2>
			<span><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['pagepic']->value[0]['title2'],15,"...",false);?>
</span>
			<p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['pagepic']->value[0]['content'],100,"...",false);?>
<!--<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/services/index"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/read_bullet.gif" alt=""/>   了解更多</a></p>-->
		</div>
	</div>
</div>
<div class="wrap">
<div class="Services_content">
	<div class="grid1">
		<h3>现在联系</h3>
		<form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/contact/nowcontactsave">
			
				<textarea id="message" name="message"></textarea>
			
			<input type="text" id="email" name="email" value="您的电子邮件地址写在这里"><br>
				<a style="color:silver;font-size:12px;"href="javascript:void(0)" onclick="changeCode('<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
')">
			<img id="img" name="img" src="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/index/code" />点击更换</a>
			<input type="text" id="check" name="check" value="验证码输入在这里" />
			<input type="submit" value="提交">
			</form>
	</div>
	<div class="grid2">
		<!--<div class="grid2_serv">
			<img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/img4.gif" alt="" />
			<div class="grid2_top_data">
			<h3><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['contact']->value[0]['title'],15,"...",false);?>
</h3>
			</div>
			<div class="clear"></div>
			<h4><span><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['contact']->value[0]['title2'],15,"...",false);?>
</span></h4>
		</div>
	<p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['contact']->value[0]['content'],100,"...",false);?>
</p>-->
	
	 <iframe width="490" height="300" frameborder="2" marginheight="10" marginwidth="10" scrolling="yes" src="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/map/index">  </iframe>
		<div class="contact_form">
		<h4>联系我们 :</h4>
		<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/contact/usermessagesave">
			<table>
			<tr><th>公司名称 :</th><td><input type="text" id="companyname" name="companyname" value=""></td></tr>
			<tr><th>姓名 :</th><td><input type="text" id="name" name="name" value=""></td></tr>
			<tr><th>地址 :</th><td><input type="text" id="address" name="address" value=""></td></tr>
			<tr><th>手机 :</th><td><input type="text" id="phone" name="phone" value=""></td></tr>
			<tr><th>电子邮件 :</th><td><input type="text" id="email" name="email" value=""></td></tr>
			<tr><th>留言 :</th><td><textarea id="message" name="message"></textarea></td></tr>
			<tr><td></td><td>
			
					<a style="color:silver;font-size:12px;"href="javascript:void(0)"
					onclick="changeCode2('<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
')">
					<img id="img2" name="img2" src="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/index/code" />
					
					点击更换</a>
					</td>
					</tr>
			
			<tr><th>验证码 :</th><td><input type="text" id="check" name="check" value="" /></td></tr>
			<tr><td colspan="2"><input type="submit" value="提交"></td></tr>
			</table>
		</form>
		</div>
	</div>
<div class="clear"></div>
</div>
</div>	

		
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>