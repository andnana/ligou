<{include file="public/header.tpl"}>

	<div class="wrap headerbackground">
	<div class="logo">
		<a href="#"><img src="<{$res}>/images/logocompanyname.png" alt=""/></a>
	</div>
	<div class="menu">
			<ul>
			<li><a href="<{$app}>/index/index">首页</a></li>
			<li><a href="<{$app}>/services/index">业务介绍</a></li>
			<li><a href="<{$app}>/news/index">新闻动态</a></li>
			<li class="active"><a href="<{$app}>/contact/index">联系我们</a></li>
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
			
			<input type="text" id="email" name="email" value="您的电子邮件地址写在这里"><br>
				<a style="color:silver;font-size:12px;"href="javascript:void(0)" onclick="changeCode('<{$app}>')">
			<img id="img" name="img" src="<{$app}>/index/code" />点击更换</a>
			<input type="text" id="check" name="check" value="验证码输入在这里" />
			<input type="submit" value="提交">
			</form>
	</div>
	<div class="grid2">
		<!--<div class="grid2_serv">
			<img src="<{$res}>/images/img4.gif" alt="" />
			<div class="grid2_top_data">
			<h3><{$contact[0].title|truncate:15:"...":false}></h3>
			</div>
			<div class="clear"></div>
			<h4><span><{$contact[0].title2|truncate:15:"...":false}></span></h4>
		</div>
	<p><{$contact[0].content|truncate:100:"...":false}></p>-->
	
	 <iframe width="490" height="300" frameborder="2" marginheight="10" marginwidth="10" scrolling="yes" src="<{$app}>/map/index">  </iframe>
		<div class="contact_form">
		<h4>联系我们 :</h4>
		<form method="post" action="<{$app}>/contact/usermessagesave">
			<table>
			<tr><th>公司名称 :</th><td><input type="text" id="companyname" name="companyname" value=""></td></tr>
			<tr><th>姓名 :</th><td><input type="text" id="name" name="name" value=""></td></tr>
			<tr><th>地址 :</th><td><input type="text" id="address" name="address" value=""></td></tr>
			<tr><th>手机 :</th><td><input type="text" id="phone" name="phone" value=""></td></tr>
			<tr><th>电子邮件 :</th><td><input type="text" id="email" name="email" value=""></td></tr>
			<tr><th>留言 :</th><td><textarea id="message" name="message"></textarea></td></tr>
			<tr><td></td><td>
			
					<a style="color:silver;font-size:12px;"href="javascript:void(0)"
					onclick="changeCode2('<{$app}>')">
					<img id="img2" name="img2" src="<{$app}>/index/code" />
					
					点击更换</a>
					</td>
					</tr>
			
			<tr><th>验证码 :</th><td><input type="text" id="check" name="check" value="" /></td></tr>
			<tr><td colspan="2"><input type="submit" value="提交"></td></tr>
			</table>
		</form>
		</div>
	</div>
<div class="clear"></div>
</div>
</div>	

		
<{include file="public/footer.tpl"}>
