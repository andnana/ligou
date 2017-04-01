<?php /* Smarty version Smarty-3.1.8, created on 2016-11-04 15:24:03
         compiled from "./admin/views/default\user\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27625581bef2ab18027-59298383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa893211ca93fc614e7fe77cf509e0f322d3b4e0' => 
    array (
      0 => './admin/views/default\\user\\add.tpl',
      1 => 1478244144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27625581bef2ab18027-59298383',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_581bef2ab68eb9_60265935',
  'variables' => 
  array (
    'app' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581bef2ab68eb9_60265935')) {function content_581bef2ab68eb9_60265935($_smarty_tpl) {?>    <?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
              <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
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
				<h1><small>添加用户</small></h1>
			</div>
			<form class="form-horizontal" method="post"  action="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/usersave" enctype="multipart/form-data">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="username">用户名</label>
						<div class="controls">
							<input type="text" class="input-xlarge" id="username" name="username" value="" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="password">密码</label>
						<div class="controls">
							<input type="password" class="input-xlarge" id="password" name="password" value="" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="password2">重复密码</label>
						<div class="controls">
							<input type="password" class="input-xlarge" id="password2" name="password2" value="" />
						</div>
					</div>
				
					
					<div class="control-group">
						<label class="control-label" for="picname">图片</label>
						<div class="controls">
							<input type="file" class="input-xlarge" id="picname" name="picname"/ >
						</div>
					</div>
					<hr>
					<h5>拥有的权限</h5>
				<ul class="userul">
					<li>
						<label class="control-label" for="base">基本信息</label>
						<div class="controls">
							<input type="checkbox" name="base"/>
						</div>
					</li>
					<li>
						<label class="control-label" for="service">业务信息</label>
						<div class="controls">
							<input type="checkbox" name="service"/>
						</div>
					</li>
					<li>
						<label class="control-label" for="news">新闻动态信息</label>
						<div class="controls">
							<input type="checkbox" name="news"/>
						</div>
					</li>
					<li>
						<label class="control-label" for="message">留言</label>
						<div class="controls">
							<input type="checkbox" name="message"/>
						</div>
					</li>
					
					<li>
						<label class="control-label" for="super">超级用户</label>
						<div class="controls">
							<input type="checkbox" name="super"/>
						</div>
					</li>				
				</ul>
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