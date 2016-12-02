<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>写博客</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
		.header {margin: 10px auto 0;width: 1000px;height: 30px;line-height: 30px;}
		.header .logo a {color: #333;font-size: 18px;font-weight: bold;}
		.box {width: 1000px;margin: 10px auto;}
	</style>
</head>
<body>
	<div class="header">
		<div class="logo">
			<a href="home.php">龚明欢</a>
		</div>
	</div>
	<div class="box">
		<h3>写博客</h3>
		<form action="writeBlog.handle.php" method="post">
			<p><label for="">标题<input type="text" name="title"></label></p>
			<p><label for="">简介<textarea name="description" id="" cols="50" rows="10"></textarea></label></p>
			<p><sapn>内容</sapn><textarea name="content" id="" cols="90" rows="20"></textarea></p>
			<p><input type="submit" value="提交"></p>
		</form>
	</div>


</body>
</html>