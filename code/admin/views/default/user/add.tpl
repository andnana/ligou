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
			   <li> <a href="<{$app}>/baseinfo/nowcontact">现在留言</a></li>
			   <{/if}>
			   <{if $smarty.session.user.super eq "on"}>
			    <li class="nav-header"><i class="icon-user"></i> 用户</li>
			  <li><a href="<{$app}>/user/index"> 用户</a></li>
              <li class="active"><a href="<{$app}>/user/add">添加用户</a></li>
			  <{/if}>
             <li><a href="<{$app}>/login/logout">退出</a></li> 
            </ul>
          </div>
        </div>
        <div class="span9">
		  <div class="row-fluid">
			<div class="page-header">
				<h1><small>添加用户</small></h1>
			</div>
			<form class="form-horizontal" method="post"  action="<{$app}>/user/usersave" enctype="multipart/form-data">
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
	  
	  <{include file="public/footer.tpl"}>