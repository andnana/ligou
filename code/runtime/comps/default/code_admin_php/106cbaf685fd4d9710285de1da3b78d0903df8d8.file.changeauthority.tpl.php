<?php /* Smarty version Smarty-3.1.8, created on 2016-11-04 15:24:00
         compiled from "./admin/views/default\user\changeauthority.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7760581c2d45734a86-21079932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '106cbaf685fd4d9710285de1da3b78d0903df8d8' => 
    array (
      0 => './admin/views/default\\user\\changeauthority.tpl',
      1 => 1478244187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7760581c2d45734a86-21079932',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_581c2d4583a6e9_02605238',
  'variables' => 
  array (
    'app' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581c2d4583a6e9_02605238')) {function content_581c2d4583a6e9_02605238($_smarty_tpl) {?>    <?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
			  <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
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
				<h1><small>更改用户</small></h1>
			</div>
			<form class="form-horizontal" method="post"  action="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/userupdate" enctype="multipart/form-data">
				<fieldset>
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"/>
					<div class="control-group">
						<label class="control-label" for="username">用户名</label>
						<div class="controls">
							<input type="text" class="input-xlarge" id="username" name="username" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
"  disabled="value"/>
						</div>
					</div>
					
				
	
					<hr>
					<h5>用户权限修改</h5>
				<ul class="userul">
					<li>
						<label class="control-label" for="base">基本信息</label>
						<div class="controls">
							<input type="checkbox" name="base" 
							<?php if ($_smarty_tpl->tpl_vars['user']->value['base']=="on"){?>
							checked="checked"
							<?php }?>
							/>
						</div>
					</li>
					<li>
						<label class="control-label" for="service">业务信息</label>
						<div class="controls">
							<input type="checkbox" name="service"
							
							<?php if ($_smarty_tpl->tpl_vars['user']->value['service']=="on"){?>
							checked="checked"
							<?php }?>
							/>
						</div>
					</li>
					<li>
						<label class="control-label" for="news">新闻动态</label>
						<div class="controls">
							<input type="checkbox" name="news"
							
							<?php if ($_smarty_tpl->tpl_vars['user']->value['news']=="on"){?>
							checked="checked"
							<?php }?>
							/>
						</div>
					</li>
					<li>
						<label class="control-label" for="message">留言</label>
						<div class="controls">
							<input type="checkbox" name="message"
							<?php if ($_smarty_tpl->tpl_vars['user']->value['message']=="on"){?>
							checked="checked"
							<?php }?>
							
							/>
						</div>
					</li>
					
					<li>
						<label class="control-label" for="super">超级用户</label>
						<div class="controls">
							<input type="checkbox" name="super"
							
							<?php if ($_smarty_tpl->tpl_vars['user']->value['super']=="on"){?>
							checked="checked"
							<?php }?>
							/>
						</div>
					</li>				
				</ul>
					<div class="form-actions">
						<input type="submit" class="btn btn-success btn-large" value="修改" /> 
					</div>	
				
				</fieldset>
			</form>
		  </div>
        </div>
      </div>

      <hr>
	  
	  <?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>