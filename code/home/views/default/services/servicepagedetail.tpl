<{include file="public/header.tpl"}>
	<div class="wrap headerbackground">
	<div class="logo">
		<a href="#"><img src="<{$res}>/images/logocompanyname.png" alt=""/></a>
	</div>
	<div class="menu">
			<ul>
			<li><a href="<{$app}>/index/index">首页</a></li>
			<li class="active"><a href="<{$app}>/services/index">业务介绍</a></li>
			<li><a href="<{$app}>/news/index">新闻动态</a></li>
			<li><a href="<{$app}>/contact/index">联系我们</a></li>
		</ul>
	</div>
	
<div class="clear"></div>
</div>
<div class="wrap">
		<div class="header">
		<div class="header_bottom" style="background: url('<{$root}>/public/uploads/<{$pagepic[0].pic}>') no-repeat;">
			<h2><{$pagepic[0].title|truncate:15:"...":false}></h2>
			<span><{$pagepic[0].title2|truncate:15:"...":false}></span>
			<p><{$pagepic[0].content|truncate:100:"...":false}><!--<a href="<{$app}>/services/index"><img src="<{$res}>/images/read_bullet.gif" alt=""/>   了解更多</a></p>-->
		</div>
	</div>
	</div>
<div class="wrap">
<div class="Services_content">
	<div class="grid1">
		
	<h3>现在联系</h3>
		<form  method="post" action="<{$app}>/contact/nowcontactsave">
			
				<textarea id="message" name="message"></textarea>
				<a style="color:silver;font-size:12px;"href="javascript:void(0)" onclick="changeCode('<{$app}>')">
			<input type="text" id="email" name="email" value="您的电子邮件地址写在这里"><br>
			<img id="img" name="img" src="<{$app}>/index/code" />点击更换</a>
			<input type="text" id="check" name="check" value="验证码输入在这里" />
			<input type="submit" value="提交">
			</form>
	</div>
<div class="grid2">
	<div class="grid2_serv">
		<img src="<{$res}>/images/img4.gif">
		<div class="grid2_top_data">
	<!--	<h3><{$service[0].title|truncate:15:"...":false}></h3>
	    </div>
		<div class="clear"></div>
		<h4><span><{$service[0].title2|truncate:15:"...":false}></span></h4>
	</div>
		<p><{$service[0].content|truncate:100:"...":false}></p> -->
		<h3><{$servicepagedetail.title|truncate:15:"...":false}></h3>
	    </div>
		<div class="clear"></div>
		
	</div>
		<p><{$servicepagedetail.introduct|truncate:100:"...":false}></p>
		
		
		  <div class="services">
												<{$servicepagedetail.uedittext}>

		</div>
</div>
<div class="clear"></div>
</div>
</div>

		
<{include file="public/footer.tpl"}>
