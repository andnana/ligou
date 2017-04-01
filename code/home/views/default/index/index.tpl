<{include file="public/header.tpl"}>
	<div class="wrap headerbackground">
	<div class="logo">
		<a href="#"><img src="<{$res}>/images/logocompanyname.png" alt=""/></a>
	</div>
	<div class="menu">
		<ul>
			<li class="active"><a href="<{$app}>/index/index">首页</a></li>
			<li><a href="<{$app}>/services/index">业务介绍</a></li>
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
			<p><{$pagepic[0].content|truncate:100:"...":false}><!--<a href="<{$app}>/services/index"><img src="<{$res}>/images/read_bullet.gif" alt=""/>   了解更多</a></p> -->
		</div>
	</div>
</div>
<div class="wrap">
<div class="main">
	<div class="content_top">
		<h2><{$welcome[0].title|truncate:15:"...":false}></h2>
		<span><{$welcome[0].title2|truncate:15:"...":false}></span> 
		<p style="width:70%;"><{$welcome[0].content|truncate:100:"...":false}>
		<a href="<{$app}>/services/index"><img src="<{$res}>/images/read_bullet1.gif" alt=""/>了解更多</a></p> 
	</div>
	<div class="boxes">
	
	<{foreach $news as $n}>
				
			<div class="box">
			 <div class="box_top">
				 <img src="<{$root}>/public/uploads/<{$n.picnamesmall}>" alt=""/>
				 <h2><{$n.title|truncate:20:"...":false}><br><span><{$n.title2|truncate:15:"...":false}></span></h2>
				 <div class="clear"></div>
			</div>
		<p><{$n.content|truncate:100:"...":false}><a href="<{$app}>/news/newsdetail/id/<{$n.id}>"><img src="<{$res}>/images/read_bullet1.gif">&nbsp;了解更多</a></p>
		</div>		
				<{/foreach}>
	
		
	<!--<div class="box">
		<div class="box_top">
		 <img src="<{$res}>/images/img2.png" alt=""/>
		 <h2>Lorem ipsum dolor<br><span>Duis aute dolor in reprehenderit</span></h2>
		<div class="clear"></div>
		</div>
		<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.<a href="#"><img src="<{$res}>/images/read_bullet1.gif" alt=""/>&nbsp;read more</a></p>
	</div>
	<div class="box">
	<div class="box_top">
		 <img src="<{$res}>/images/img3.png" alt=""/>
		 <h2>Lorem ipsum dolor<br><span>Duis aute dolor in reprehenderit</span></h2>
		<div class="clear"></div>
	</div>
	<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.<a href="#"><img src="<{$res}>/images/read_bullet1.gif" alt=""/>&nbsp;read more</a></p>
	</div>-->
	<div class="clear"></div>
	</div>
<div class="content_bottom">
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
	<!-- <div class="grid2_top">
			<img src="<{$res}>/images/img4.gif">
			<div class="grid2_top_data">
			<h3><{$service[0].title|truncate:15:"...":false}></h3>
			<h4><span><{$service[0].title2|truncate:15:"...":false}></span></h4>
		   </div>
			<div class="clear"></div>
		</div>
			<p><{$service[0].content|truncate:100:"...":false}></p> -->
	<div class="grid_bottom">
		<div class="grid2_img">
			<img src="<{$public}>/uploads/<{$service[0].pic}>" alt=""/>
		</div>
		<div class="grid2_list">
			<ul>
				<{foreach $servicepage as $s}>
					<li><a href="<{$app}>/services/servicepagedetail/id/<{$s.id}>"><{$s.introduct}><a></li>
				<{/foreach}>
			</ul>
		</div>
	<div class="clear"></div>
	</div>
	</div>
<div class="clear"></div>
</div>
</div>
</div>
<{include file="public/footer.tpl"}>
