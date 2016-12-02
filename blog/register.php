<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />

	<style type="text/css">
	.header {margin: 10px auto 0;width: 1000px;height: 30px;line-height: 30px;}
	.header .logo a {color: #333;font-size: 18px;font-weight: bold;}
	.box {margin: 10px auto;width: 800px;}
		form {}
		label{ }
		.tab {width: 200px;height: 30px;border: 1px solid #eee;}
		.tab a {
			height: 30px;display: block;float: left;
			width: 100px;line-height: 30px;text-align: center;text-decoration: none;
			background: #eee;
		}
		.tab .on {background-color: #fff}
		/*.tab a:hover {background-color: #fff}*/
	</style>
</head>
<body>
<div class="header">
	<div class="logo">
		<a href="home.php">龚明欢</a>
	</div>
</div>
	<div class="box" id="box">
	
		<form id="form1" method="post" action="register.handle.php">
			<p id="wrong"></p>
			<p><label for="">请输入你的邮箱：<input type="text" name="email"></label></p>
			<p><label for="">输入用户名：<input type="text" name="username"></label></p>
			<p><label for="">请输入你的密码：<input type="password" id="password" name="password"></label></p>
			<p><label for="">请再次输入密码：<input type="password" id="repass" name=""></label></p>
			<p><span>输入验证码</span><img src="verify.php" alt="验证码" id="verify"><input type="text" name="verify"><a href="javascript:;" id="other_img">看不清，换一张</a></p>
			<p><input type="submit" value="注册" id="submit"></p>
	  </form>
	  
	</div>
	<script type="text/javascript">
	/*tab*/
	
		var password = document.getElementById('password');

		var repass = document.getElementById('repass');
		var wrong = document.getElementById('wrong');
		var form1 = document.getElementById('form1');
		var submit = document.getElementById('submit');
		var verify = document.getElementById('verify');
		var other_img = document.getElementById('other_img');
		other_img.onclick = function(){
			verify.src = 'verify.php';
		}
		submit.onclick = function(){
			
		}
		function jude(){
			if (password.value!=repass.value) {
				wrong.innerHTML = '两次输入的密码不一致';
				return true;
			}
		}
		form1.onsubmit = function(event){
			var kk = jude();
			if(kk){
				event.preventDefault();
			}
		}
		

	</script>
</body>
</html>