<?php /* Smarty version Smarty-3.1.8, created on 2016-12-23 16:13:26
         compiled from "./home/views/default\news\newsdetail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1233258182dcd1a1242-41204477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abf7f712663695be132aedf478b7be29a2e1f2fb' => 
    array (
      0 => './home/views/default\\news\\newsdetail.tpl',
      1 => 1482466299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1233258182dcd1a1242-41204477',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_58182dcd2a18f3_53091723',
  'variables' => 
  array (
    'res' => 0,
    'app' => 0,
    'root' => 0,
    'pagepic' => 0,
    'newsdetail' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58182dcd2a18f3_53091723')) {function content_58182dcd2a18f3_53091723($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\phpStudy\\WWW\\code\\brophp\\libs\\plugins\\modifier.truncate.php';
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
			<li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/news/index">新闻动态</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
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
				<a style="color:silver;font-size:12px;"href="javascript:void(0)" onclick="changeCode('<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
')">
			<input type="text" id="email" name="email" value="您的电子邮件地址写在这里"><br>
			<img id="img" name="img" src="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/index/code " />点击更换</a>
			<input type="text" id="check" name="check" value="验证码输入在这里" />
			<input type="submit" value="提交">
			</form>
	</div>
<div class="grid2">
	<div class="grid2_serv">
		<img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/img4.gif">
		<div class="grid2_top_data">
		<h3><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['newsdetail']->value['title'],30,"...",false);?>
</h3>
	    </div>
		<div class="clear"></div>
	</div>
		<p><?php echo $_smarty_tpl->tpl_vars['newsdetail']->value['uedittext'];?>
</p>
		
	
</div>
<div class="clear"></div>
</div>
</div>

		
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>