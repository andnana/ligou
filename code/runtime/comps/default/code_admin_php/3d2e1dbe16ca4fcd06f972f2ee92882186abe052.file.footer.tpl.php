<?php /* Smarty version Smarty-3.1.8, created on 2016-11-05 15:05:42
         compiled from "./admin/views/default\baseinfo\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25532581d822e6c72f2-10466040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d2e1dbe16ca4fcd06f972f2ee92882186abe052' => 
    array (
      0 => './admin/views/default\\baseinfo\\footer.tpl',
      1 => 1478328970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25532581d822e6c72f2-10466040',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_581d822e7ddcb8_45305931',
  'variables' => 
  array (
    'app' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581d822e7ddcb8_45305931')) {function content_581d822e7ddcb8_45305931($_smarty_tpl) {?>  <?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="span3">
          <div class="well sidebar-nav">
     		   <ul class="nav nav-list">
		  
		   <?php if ($_SESSION['user']['base']=="on"){?>
              <li class="nav-header"><i class="icon-cog"></i> 基本信息</li>

              <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/baseinfo/pagepic">网页大图</a></li>
			  <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/baseinfo/welcome">欢迎语</a></li>
			  <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/baseinfo/contact">联系我们</a></li>
			  <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/baseinfo/service">业务介绍</a></li>
			   <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/baseinfo/footer">页脚信息</a></li>
			  <?php }?>
			  <?php if ($_SESSION['user']['service']=="on"){?>
              <li class="nav-header"><i class="icon-star"></i> 业务信息</li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/service/index">业务信息</a></li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/service/add">添加业务信息</a></li>
			  <?php }?>
            <?php if ($_SESSION['user']['news']=="on"){?>
              <li class="nav-header"><i class="icon-th"></i> 新闻动态信息</li>
			  <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/news/index"> 新闻动态</a></li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/news/add">添加新闻动态</a></li>
			  <?php }?>
			  <?php if ($_SESSION['user']['message']=="on"){?>
			      <li class="nav-header"><i class="icon-envelope"></i>留言</li>
			               <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/baseinfo/message">留言</a></li>
			   <li> <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/baseinfo/nowcontact">现在留言</a></li>
			   <?php }?>
			   <?php if ($_SESSION['user']['super']=="on"){?>
			    <li class="nav-header"><i class="icon-user"></i> 用户</li>
			  <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/index"> 用户</a></li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/add">添加用户</a></li>
			  <?php }?>
             <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/login/logout">退出</a></li> 
            </ul>
          </div>
        </div>
         <div class="span9">
		  <div class="row-fluid">
			<div class="page-header">
				<h1> <small>页脚信息添加/更改</small></h1>
			</div>
			<form class="form-horizontal" method="post" action="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/baseinfo/footersave">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="address">地址</label>
						<div class="controls">
							<input type="text" class="input-xlarge" name="address" id="address" value="" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="email">电子邮件</label>
						<div class="controls">
							<input type="text" class="input-xlarge" name="email" id="email" value="" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="phone">手机</label>
						<div class="controls">
							<input type="text" class="input-xlarge" name="phone" id="phone" value="" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="icp">icp号码</label>
						<div class="controls">
							<input type="text" class="input-xlarge" name="icp" id="icp" value="" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="suport">技术支持</label>
						<div class="controls">
							<input type="text" class="input-xlarge" name="suport" id="suport" value="" />
						</div>
					</div>
					<div class="form-actions">
						<input type="submit" class="btn btn-success btn-large" value="保存" /> 
					</div>					
				</fieldset>
			</form>
		  </div>
        </div>
      </div>

      <hr>
	  
	  <?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>