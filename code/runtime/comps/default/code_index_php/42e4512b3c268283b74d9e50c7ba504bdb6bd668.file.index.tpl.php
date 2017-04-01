<?php /* Smarty version Smarty-3.1.8, created on 2016-12-23 12:15:31
         compiled from "./home/views/default\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211325816f4cf99d940-26773980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42e4512b3c268283b74d9e50c7ba504bdb6bd668' => 
    array (
      0 => './home/views/default\\index\\index.tpl',
      1 => 1482466243,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211325816f4cf99d940-26773980',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5816f4cfb53892_95899886',
  'variables' => 
  array (
    'res' => 0,
    'app' => 0,
    'root' => 0,
    'pagepic' => 0,
    'welcome' => 0,
    'news' => 0,
    'n' => 0,
    'service' => 0,
    'public' => 0,
    'servicepage' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5816f4cfb53892_95899886')) {function content_5816f4cfb53892_95899886($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\phpStudy\\WWW\\code\\brophp\\libs\\plugins\\modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div class="wrap headerbackground">
	<div class="logo">
		<a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/logocompanyname.png" alt=""/></a>
	</div>
	<div class="menu">
		<ul>
			<li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/index/index">首页</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
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
/images/read_bullet.gif" alt=""/>   了解更多</a></p> -->
		</div>
	</div>
</div>
<div class="wrap">
<div class="main">
	<div class="content_top">
		<h2><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['welcome']->value[0]['title'],15,"...",false);?>
</h2>
		<span><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['welcome']->value[0]['title2'],15,"...",false);?>
</span> 
		<p style="width:70%;"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['welcome']->value[0]['content'],100,"...",false);?>

		<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/services/index"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/read_bullet1.gif" alt=""/>了解更多</a></p> 
	</div>
	<div class="boxes">
	
	<?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value){
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
				
			<div class="box">
			 <div class="box_top">
				 <img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/public/uploads/<?php echo $_smarty_tpl->tpl_vars['n']->value['picnamesmall'];?>
" alt=""/>
				 <h2><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['n']->value['title'],20,"...",false);?>
<br><span><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['n']->value['title2'],15,"...",false);?>
</span></h2>
				 <div class="clear"></div>
			</div>
		<p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['n']->value['content'],100,"...",false);?>
<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/news/newsdetail/id/<?php echo $_smarty_tpl->tpl_vars['n']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/read_bullet1.gif">&nbsp;了解更多</a></p>
		</div>		
				<?php } ?>
	
		
	<!--<div class="box">
		<div class="box_top">
		 <img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/img2.png" alt=""/>
		 <h2>Lorem ipsum dolor<br><span>Duis aute dolor in reprehenderit</span></h2>
		<div class="clear"></div>
		</div>
		<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.<a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/read_bullet1.gif" alt=""/>&nbsp;read more</a></p>
	</div>
	<div class="box">
	<div class="box_top">
		 <img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/img3.png" alt=""/>
		 <h2>Lorem ipsum dolor<br><span>Duis aute dolor in reprehenderit</span></h2>
		<div class="clear"></div>
	</div>
	<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.<a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/read_bullet1.gif" alt=""/>&nbsp;read more</a></p>
	</div>-->
	<div class="clear"></div>
	</div>
<div class="content_bottom">
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
	<!-- <div class="grid2_top">
			<img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/img4.gif">
			<div class="grid2_top_data">
			<h3><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['service']->value[0]['title'],15,"...",false);?>
</h3>
			<h4><span><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['service']->value[0]['title2'],15,"...",false);?>
</span></h4>
		   </div>
			<div class="clear"></div>
		</div>
			<p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['service']->value[0]['content'],100,"...",false);?>
</p> -->
	<div class="grid_bottom">
		<div class="grid2_img">
			<img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['service']->value[0]['pic'];?>
" alt=""/>
		</div>
		<div class="grid2_list">
			<ul>
				<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['servicepage']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/services/servicepagedetail/id/<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['introduct'];?>
<a></li>
				<?php } ?>
			</ul>
		</div>
	<div class="clear"></div>
	</div>
	</div>
<div class="clear"></div>
</div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>