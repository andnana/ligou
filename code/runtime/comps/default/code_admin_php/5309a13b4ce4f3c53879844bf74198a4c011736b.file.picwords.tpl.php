<?php /* Smarty version Smarty-3.1.8, created on 2016-11-02 14:59:29
         compiled from "./admin/views/default\baseinfo\picwords.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21343581835fe9aec04-39287117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5309a13b4ce4f3c53879844bf74198a4c011736b' => 
    array (
      0 => './admin/views/default\\baseinfo\\picwords.tpl',
      1 => 1478069695,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21343581835fe9aec04-39287117',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_581835fea32852_02498760',
  'variables' => 
  array (
    'app' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581835fea32852_02498760')) {function content_581835fea32852_02498760($_smarty_tpl) {?>﻿  <?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header"><i class="icon-wrench"></i> 基本信息管理</li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/baseinfo/message">留言</a></li>
			   <li> <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/baseinfo/nowcontact">现在留言</a></li>
              <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/baseinfo/picwords">为图片添加文字</a></li>
			  <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/baseinfo/welcome">欢迎语</a></li>
			  <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/baseinfo/contact">联系我们</a></li>
			  <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/baseinfo/service">业务介绍</a></li>
              <li class="nav-header"><i class="icon-signal"></i> 业务信息管理</li>
               <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/service/index">业务信息</a></li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/service/add">添加业务信息</a></li>
              <li><a href="user-stats.html">Users</a></li>
              <li><a href="visitor-stats.html">Visitors</a></li>
              <li class="nav-header"><i class="icon-user"></i> 新闻动态信息管理</li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/news/index"> 新闻动态</a></li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/news/add">添加新闻动态</a></li>
            </ul>
          </div>
        </div>
        <div class="span9">
		  <div class="row-fluid">
			<div class="page-header">
				<h1> <small>图片文字添加/更改</small></h1>
			</div>
			<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/baseinfo/picwordssave">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="title">标题</label>
						<div class="controls">
							<input type="text" class="input-xlarge" name="title" id="title" value="" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="title2">二级标题</label>
						<div class="controls">
							<input type="text" class="input-xlarge" name="title2" id="title2" value="" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="content">内容</label>
						<div class="controls">
							<textarea class="input-xlarge" name="content" id="content" value="" /></textarea>
						</div>
					</div>
					<div class="form-actions">
						<input type="submit" class="btn btn-success btn-large" value="Save Changes" /> <a class="btn" href="users.html">Cancel</a>
					</div>					
				</fieldset>
			</form>
		  </div>
        </div>
      </div>

      <hr>
	  
	  <?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>