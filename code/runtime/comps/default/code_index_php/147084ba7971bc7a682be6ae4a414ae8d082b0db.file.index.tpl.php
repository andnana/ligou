<?php /* Smarty version Smarty-3.1.8, created on 2016-12-23 12:14:27
         compiled from "./home/views/default\services\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:315565816d59715e257-98353325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '147084ba7971bc7a682be6ae4a414ae8d082b0db' => 
    array (
      0 => './home/views/default\\services\\index.tpl',
      1 => 1482466221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315565816d59715e257-98353325',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5816d59727ba43_11702396',
  'variables' => 
  array (
    'res' => 0,
    'app' => 0,
    'root' => 0,
    'pagepic' => 0,
    'servicepage' => 0,
    'i' => 0,
    's' => 0,
    'public' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5816d59727ba43_11702396')) {function content_5816d59727ba43_11702396($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\phpStudy\\WWW\\code\\brophp\\libs\\plugins\\modifier.truncate.php';
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
			<li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/services/index">业务介绍</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
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
	
			<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['servicepage']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['s']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['s']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
 $_smarty_tpl->tpl_vars['s']->iteration++;
 $_smarty_tpl->tpl_vars['s']->last = $_smarty_tpl->tpl_vars['s']->iteration === $_smarty_tpl->tpl_vars['s']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['last'] = $_smarty_tpl->tpl_vars['s']->last;
?>
		<?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1, null, 0);?> 
		
		 <?php if ($_smarty_tpl->tpl_vars['i']->value%2==0){?>
		 
					<div class="service2">
		<h4><?php echo $_smarty_tpl->tpl_vars['s']->value['title'];?>
</h4>
			<div class="serv_img">
				<img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['s']->value['picname'];?>
" alt="" />
				</div>
			<div class="serv_data">
				<p>	<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/services/servicepagedetail/id/<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['introduct'];?>
<a> </p>
			</div>
		</div>
	
		 
		  <?php }else{ ?>
		  <div class="services">
				
			<div class="service1">
			<h4><?php echo $_smarty_tpl->tpl_vars['s']->value['title'];?>
</h4>
			<div class="serv_img">
			<img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['s']->value['picname'];?>
" alt="" />
			</div>
			<div class="serv_data">
				<p><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/services/servicepagedetail/id/<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['introduct'];?>
<a></p>
			</div>
			
			</div>
				<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['last']){?>
					</div>	
				<?php }?>
				
				 <?php }?>
				 <?php if ($_smarty_tpl->tpl_vars['i']->value%2==0){?>
					<div class="clear"></div>
					</div>
					<?php }?>
				<?php } ?>
	
</div>
<div class="clear"></div>
</div>
</div>

		
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>