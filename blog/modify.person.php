<?php
	require_once('connect.php');
	$name = $_SESSION["adminName"];
	$sql = "select * from username where username = '{$name}'";
	$query = mysql_query($sql);
	$row = mysql_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改个人资料</title>
	<style type="text/css">
			.box {margin: 10px auto;width: 800px;}
			form label {display: inline-block;width: 120px;text-align: right;}
			textarea {margin-left: 14px;}
	</style>
</head>
<body>
	<div class="box">
		<form id="form2" action="modify.person.h.php" method="post">
		  	<p><label for="username">用户名：</label><input type="text" name="username" id="username" value="<?php echo $row['username'];?>"></p>
		  	<p><label for="occupation">职业：</label><input type="text" name="occupation" id="occupation" value="<?php echo $row['occupation'];?>"></p>
		  	<p>个性签名：<textarea name="qianming" cols="60" rows="5"><?php echo $row['qianming'];?></textarea></p>
		  	<p style=""><input type="submit" value="保存"></p>
		 </form>
	 </div>
</body>
</html>