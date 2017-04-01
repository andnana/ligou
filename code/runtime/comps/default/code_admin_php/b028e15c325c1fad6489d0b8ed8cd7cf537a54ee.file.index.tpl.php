<?php /* Smarty version Smarty-3.1.8, created on 2016-12-23 16:13:05
         compiled from "./admin/views/default\service\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161155816dc4cc3ac65-58414404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b028e15c325c1fad6489d0b8ed8cd7cf537a54ee' => 
    array (
      0 => './admin/views/default\\service\\index.tpl',
      1 => 1478328528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161155816dc4cc3ac65-58414404',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5816dc4ccb5fa6_07004284',
  'variables' => 
  array (
    'app' => 0,
    'servicepage' => 0,
    's' => 0,
    'fpage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5816dc4ccb5fa6_07004284')) {function content_5816dc4ccb5fa6_07004284($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\phpStudy\\WWW\\code\\brophp\\libs\\plugins\\modifier.truncate.php';
?> 
    <?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
              <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
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
				<h1><small>业务信息</small></h1>
			</div>
			<table  class="gridtable">
		<tr><th>id</th><th>标题</th><th>介绍</th><th>操作</th>
		
			
		
		
		</tr>
		<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['servicepage']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
</td><td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['s']->value['title'],15,"...",false);?>
</td><td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['s']->value['introduct'],15,"...",false);?>
</td>
				
				<td><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/service/servicedetail/id/<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
">详细</a>|&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/service/servicedelete/id/<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
">删除</a></td>
			</tr>
		<?php } ?>
		
		</table>
		<?php echo $_smarty_tpl->tpl_vars['fpage']->value;?>

			
		
		  </div>
        </div>
      </div>

      <hr>
	  
	  <?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>