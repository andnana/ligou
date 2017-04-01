<?php /* Smarty version Smarty-3.1.8, created on 2016-11-04 15:24:14
         compiled from "./admin/views/default\baseinfo\message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2112458184140a43f48-75449468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c2dc3fd7ae84769c52ea6edd58538cbf8674f40' => 
    array (
      0 => './admin/views/default\\baseinfo\\message.tpl',
      1 => 1478244016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2112458184140a43f48-75449468',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_58184140ab6838_14541946',
  'variables' => 
  array (
    'app' => 0,
    'usermessage' => 0,
    'message' => 0,
    'fpage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58184140ab6838_14541946')) {function content_58184140ab6838_14541946($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\AppServ\\www\\code\\brophp\\libs\\plugins\\modifier.truncate.php';
?>  <?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
			      <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
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
				<h1><small>用户信息管理</small></h1>
			</div>
			
  



	<table  class="gridtable">
		<tr><th>序号</th><th>公司名称</th><th>姓名</th>
		
			<th>留言</th><th>留言时间</th><th>操作</th>
		
		
		</tr>
		<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usermessage']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['message']->value['id'];?>
</td><td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['message']->value['companyname'],15,"...",false);?>
</td><td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['message']->value['name'],15,"...",false);?>
</td>
				
				<td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['message']->value['message'],15,"...",false);?>
</td><td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['message']->value['mtime'],15,"...",false);?>
</td><td><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/baseinfo/messagedetail/id/<?php echo $_smarty_tpl->tpl_vars['message']->value['id'];?>
">详细</a>|&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/baseinfo/messagedelete/id/<?php echo $_smarty_tpl->tpl_vars['message']->value['id'];?>
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