<?php /* Smarty version Smarty-3.1.8, created on 2016-11-04 15:23:58
         compiled from "./admin/views/default\user\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26113581af204342dd7-96819135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46a9e75a7aead59b8e1a9bf8149558cf16ae301c' => 
    array (
      0 => './admin/views/default\\user\\index.tpl',
      1 => 1478244150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26113581af204342dd7-96819135',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_581af204445140_62385096',
  'variables' => 
  array (
    'app' => 0,
    'user' => 0,
    'u' => 0,
    'fpage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581af204445140_62385096')) {function content_581af204445140_62385096($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\AppServ\\www\\code\\brophp\\libs\\plugins\\modifier.truncate.php';
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
				<h1><small>用户列表</small></h1>
			</div>
			<table  class="gridtable">
		<tr><th>id</th><th>用户名</th><th>基本信息</th><th>业务信息</th><th>新闻动态</th><th>留言</th><th>超级用户</th><th>操作</th>
		
			
		
		
		</tr>
		<?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value){
$_smarty_tpl->tpl_vars['u']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
</td><td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['u']->value['username'],15,"...",false);?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['u']->value['base'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['u']->value['service'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['u']->value['news'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['u']->value['message'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['u']->value['super'];?>
</td>
				<td><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/changeauthority/id/<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
">修改</a>|&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/userdelete/id/<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
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