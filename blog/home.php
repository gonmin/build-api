<?php
	require_once('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我的主页</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
		.header {width: 1000px;margin: 10px auto;height: 30px;line-height: 30px;}
		.header .logo {float: left;width: 300px;height: 30px;}
		.header .logo a {color: #333;font-size: 18px;font-weight: bold;}
		.header .header-right {float: left;height: 30px;}
		.header .header-right a{color: #666;margin-right: 5px;}
		.header .header-right a:hover {color: #00a3d2;text-decoration: underline;}
		.header .header-right .register{margin-right: 10px;}
		.user {margin-right: 8px;}
	</style>
	<script type="text/javascript">
		function login(){
			var regi_login = document.getElementById('regi_login');		
			regi_login.style.display = 'none';
		}
		function no_login(){
				var welcome = document.getElementById('welcome');
				welcome.style.display = 'none';
			
		}
	</script>
</head>
<body>
<div class="header">
	<div class="logo">
		<a href="home.php">龚明欢</a>
	</div>
	<ul class="header-right">
		<li id="regi_login"><a href="register.php" class="register">快速注册</a><a href="login.php">登录</a><span>后才能发博文</span></li>
		<li id="welcome"><span>欢迎你</span>
	<?php 
		if(isset($_SESSION["adminName"])) {
			echo "<script>login();</script>";
			// echo '<a href="person.php">$_SESSION["adminName"]"</a>';
			echo "<a href='person.php' class='user'>{$_SESSION['adminName']}</a>";
			echo "<a href='admin.action.php?act=exit' class='exit'>退出</a>";
			echo "<a href='writeBlog.php'>写博文</a>";

		} else {
			echo "<script>no_login();</script>";

		}
	?>
</li>
	</ul>
</div>

</body>
</html>