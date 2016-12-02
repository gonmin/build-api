<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />

	<style type="text/css">
		.header {margin: 10px auto 0;width: 1000px;height: 30px;line-height: 30px;}
		.header .logo a {color: #333;font-size: 18px;font-weight: bold;}
			.box {margin: 10px auto;width: 800px;}
			form label {display: inline-block;width: 120px;text-align: right;}
	</style>
</head>
<body>
<div class="header">
	<div class="logo">
		<a href="home.php">龚明欢</a>
	</div>
</div>
<div class="box">
	<form id="form2" action="login.handle.php" method="post">
	  	<p><label for="username">输入用户名：</label><input type="text" name="username" id="username"></p>
	  	<p><label for="l_password">输入密码：</label><input type="password" name="password" id="l_password"></p>
	  	<p style=""><input type="submit" value="登录"></p>
	 </form>
 </div>
</body>
</html>