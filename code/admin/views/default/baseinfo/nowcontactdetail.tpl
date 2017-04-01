    <{include file="public/header.tpl"}>
<div class="span3">
          <div class="well sidebar-nav">
     		   <ul class="nav nav-list">
		  
		   <{if $smarty.session.user.base eq "on"}>
              <li class="nav-header"><i class="icon-cog"></i> 基本信息</li>

              <li><a href="<{$app}>/baseinfo/pagepic">网页大图</a></li>
			  <li><a href="<{$app}>/baseinfo/welcome">欢迎语</a></li>
			  <li><a href="<{$app}>/baseinfo/contact">联系我们</a></li>
			  <li><a href="<{$app}>/baseinfo/service">业务介绍</a></li>
			   <li><a href="<{$app}>/baseinfo/footer">页脚信息</a></li>
			  <{/if}>
			  <{if $smarty.session.user.service eq "on"}>
              <li class="nav-header"><i class="icon-star"></i> 业务信息</li>
              <li><a href="<{$app}>/service/index">业务信息</a></li>
              <li><a href="<{$app}>/service/add">添加业务信息</a></li>
			  <{/if}>
            <{if $smarty.session.user.news eq "on"}>
              <li class="nav-header"><i class="icon-th"></i> 新闻动态信息</li>
			  <li><a href="<{$app}>/news/index"> 新闻动态</a></li>
              <li><a href="<{$app}>/news/add">添加新闻动态</a></li>
			  <{/if}>
			  <{if $smarty.session.user.message eq "on"}>
			      <li class="nav-header"><i class="icon-envelope"></i>留言</li>
			               <li><a href="<{$app}>/baseinfo/message">留言</a></li>
			   <li class="active"> <a href="<{$app}>/baseinfo/nowcontact">现在留言</a></li>
			   <{/if}>
			   <{if $smarty.session.user.super eq "on"}>
			    <li class="nav-header"><i class="icon-user"></i> 用户</li>
			  <li><a href="<{$app}>/user/index"> 用户</a></li>
              <li><a href="<{$app}>/user/add">添加用户</a></li>
			  <{/if}>
             <li><a href="<{$app}>/login/logout">退出</a></li> 
            </ul>
          </div>
        </div>
        <div class="span9">
		  <div class="row-fluid">
			<div class="page-header">
				<h1><small>留言详细信息</small></h1>
			</div>
			
	<table  class="gridtable">
		
		
		
		

			<tr>
				<th>id</th><td><{$nowcontactdetail.id}></td>
			</tr>
		<tr>
				<th>电子邮件</th><td><{$nowcontactdetail.email}></td>
			</tr>
		
			<tr>
				<th>留言时间</th><td><{$nowcontactdetail.mtime}></td>
			</tr>
		</table>
		<h3 style="text-align:center">留言信息</h3>
		<p style="margin:15px;text-indent:15px;"><{$nowcontactdetail.message}></p>
		  </div>
        </div>
      </div>

      <hr>
	  
	  <{include file="public/footer.tpl"}>