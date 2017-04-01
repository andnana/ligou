<html>
<head>
	<title>用户登录</title>
	<link rel="stylesheet" href="<{$res}>/css/login.css">
	
	<!-- For-Mobile-Apps-and-Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //For-Mobile-Apps-and-Meta-Tags -->

</head>
<body>
<h1>网站后台管理平台</h1>
   <div class="main">
   <h2>用户登录</h2>
       <form  action="<{$url}>/login" method="post">
	 
			<input type="text" class="name" name="username" placeholder="用户名" required="">
			<input type="password" class="password" name="password" placeholder="密码" required="">
			<input type="submit" value="登录">
		</form>	
   </div>
   <div class="footer">
		<p> 大连新霆企业顾问有限公司<a href="<{$root}>/index.php/index/index">>>点击这里</a>进入网站</p>
   </div>
</body>
</html>