<?php /* Smarty version Smarty-3.1.8, created on 2016-12-23 15:23:19
         compiled from "./admin/views/default\news\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2395358198ee3425d04-27688680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0d77f4311edddb6e98f1c3da1f12116cab5d6cf' => 
    array (
      0 => './admin/views/default\\news\\add.tpl',
      1 => 1478328496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2395358198ee3425d04-27688680',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_58198ee34cb536_58556775',
  'variables' => 
  array (
    'app' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58198ee34cb536_58556775')) {function content_58198ee34cb536_58556775($_smarty_tpl) {?>    <?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
              <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
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
				<h1><small>添加新闻动态</small></h1>
			</div>
			<form class="form-horizontal" method="post"  action="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/news/newssave" enctype="multipart/form-data">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="name">标题</label>
						<div class="controls">
							<input type="text" class="input-xlarge" id="title" name="title" value="" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="name">二级标题</label>
						<div class="controls">
							<input type="text" class="input-xlarge" id="title2" name="title2" value="" />
						</div>
					</div>
				
					
					<div class="control-group">
						<label class="control-label" for="">图片</label>
						<div class="controls">
							<input type="file" class="input-xlarge" id="picname" name="picname"/ >
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="uedittext">编辑页面</label>
						<div class="controls">
								<textarea name ="uedittext" id="uedittext">
		   

							</textarea>
							<script type="text/javascript" charset="utf-8">
							var editor = new baidu.editor.ui.Editor();
							editor.render('uedittext');

							</script>
							
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