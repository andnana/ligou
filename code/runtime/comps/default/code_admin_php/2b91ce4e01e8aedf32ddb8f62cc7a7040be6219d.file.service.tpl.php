<?php /* Smarty version Smarty-3.1.8, created on 2016-12-23 16:16:58
         compiled from "./admin/views/default\baseinfo\service.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59595817dc3d3bb415-96073183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b91ce4e01e8aedf32ddb8f62cc7a7040be6219d' => 
    array (
      0 => './admin/views/default\\baseinfo\\service.tpl',
      1 => 1478328452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59595817dc3d3bb415-96073183',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5817dc3d430574_49753188',
  'variables' => 
  array (
    'app' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5817dc3d430574_49753188')) {function content_5817dc3d430574_49753188($_smarty_tpl) {?>  <?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
			  <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/baseinfo/service">业务介绍</a></li>
			   <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
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
				<h1> <small>业务介绍添加/更改</small></h1>
			</div>
			<form class="form-horizontal" method="post" action="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/baseinfo/servicesave" enctype="multipart/form-data">
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
						<label class="control-label" for="">图片</label>
						<div class="controls">
							<input type="file" class="input-xlarge" id="pic" name="pic"/ >
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="content">内容</label>
						<div class="controls">
							<textarea class="input-xlarge" name="content" id="content" value="" /></textarea>
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