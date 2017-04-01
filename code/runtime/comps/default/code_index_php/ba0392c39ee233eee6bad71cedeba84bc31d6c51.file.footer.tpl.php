<?php /* Smarty version Smarty-3.1.8, created on 2017-02-26 12:55:59
         compiled from "./home/views/default\public\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34265816d5972a7819-94319237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba0392c39ee233eee6bad71cedeba84bc31d6c51' => 
    array (
      0 => './home/views/default\\public\\footer.tpl',
      1 => 1482432732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34265816d5972a7819-94319237',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5816d5972ab674_69219741',
  'variables' => 
  array (
    'res' => 0,
    'welcome' => 0,
    'app' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5816d5972ab674_69219741')) {function content_5816d5972ab674_69219741($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\phpStudy\\WWW\\code\\brophp\\libs\\plugins\\modifier.truncate.php';
?></div>
<!--<div id="footer">国家信息产业部备案号：XXX34255234&nbsp;&nbsp;｜&nbsp;&nbsp;技术支持：<a style="display:inline;" href="http://www.dllx.com">大连廉信科技</a></div>
    -->
     <footer id="footer">
    	<div id="footer_wrap">
        	<div class="one-third first">
            	<img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/logo02.png" alt="">
                <p> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['welcome']->value[0]['content'],100,"...",false);?>
</p>
				<p style="float:right;"><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/contact/index">联系我们</a></a></p>
                
            </div>
            <div class="one-third">
            	<ul class="siteinfo">
                	<li class="address">地址：	<a href="#"><?php echo $_smarty_tpl->tpl_vars['footer']->value[0]['address'];?>
</a></li>
                    <li class="email">电子邮件： <a href="#"><?php echo $_smarty_tpl->tpl_vars['footer']->value[0]['email'];?>
</a></li>
                    <li class="phone">电话： <a href="#"><?php echo $_smarty_tpl->tpl_vars['footer']->value[0]['phone'];?>
</a></li>
                </ul>
             
            </div>
            <div class="one-third">
			<ul class="siteinfo">
                	<li style="text-indent:0px;">国家信息产业部备案号：	<a href="#"><?php echo $_smarty_tpl->tpl_vars['footer']->value[0]['icp'];?>
</a></li>
                    <li style="text-indent:0px;">技术支持： <a href="http://www.dllx.com"><?php echo $_smarty_tpl->tpl_vars['footer']->value[0]['suport'];?>
</a></li>
                </ul>
       <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
            </div>
         
        </div><!--end:footer_wrap-->
    </footer><!--end:footer-->
</body>

</html>
<?php }} ?>