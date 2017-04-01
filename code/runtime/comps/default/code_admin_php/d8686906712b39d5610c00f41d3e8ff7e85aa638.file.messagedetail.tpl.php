<?php /* Smarty version Smarty-3.1.8, created on 2016-11-04 15:24:21
         compiled from "./admin/views/default\baseinfo\messagedetail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8197581859293384d6-28588910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8686906712b39d5610c00f41d3e8ff7e85aa638' => 
    array (
      0 => './admin/views/default\\baseinfo\\messagedetail.tpl',
      1 => 1478244031,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8197581859293384d6-28588910',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_581859293ecd30_01415928',
  'variables' => 
  array (
    'app' => 0,
    'messagedetail' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581859293ecd30_01415928')) {function content_581859293ecd30_01415928($_smarty_tpl) {?>    <?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
            </ul>>
          </div>
        </div>
        <div class="span9">
		  <div class="row-fluid">
			<div class="page-header">
				<h1><small>留言详细信息</small></h1>
			</div>
			
	<table  class="gridtable">
		
		
		
		

			<tr>
				<th>id</th><td><?php echo $_smarty_tpl->tpl_vars['messagedetail']->value['id'];?>
</td>
			</tr>
		<tr>
				<th>公司名称</th><td><?php echo $_smarty_tpl->tpl_vars['messagedetail']->value['companyname'];?>
</td>
			</tr>
			<tr>
				<th>姓名</th><td><?php echo $_smarty_tpl->tpl_vars['messagedetail']->value['name'];?>
</td>
			</tr><tr>
				<th>地址</th><td><?php echo $_smarty_tpl->tpl_vars['messagedetail']->value['address'];?>
</td>
			</tr><tr>
				<th>手机</th><td><?php echo $_smarty_tpl->tpl_vars['messagedetail']->value['phone'];?>
</td>
			</tr><tr>
				<th>电子邮件</th><td><?php echo $_smarty_tpl->tpl_vars['messagedetail']->value['email'];?>
</td>
			</tr>
		
			<tr>
				<th>留言时间</th><td><?php echo $_smarty_tpl->tpl_vars['messagedetail']->value['mtime'];?>
</td>
			</tr>
		</table>
		<h3 style="text-align:center">留言信息</h3>
		<p style="margin:15px;text-indent:15px;"><?php echo $_smarty_tpl->tpl_vars['messagedetail']->value['message'];?>
</p>
		  </div>
        </div>
      </div>

      <hr>
	  
	  <?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>