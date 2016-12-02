<?php
	require_once('connect.php');
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$verify = $_POST['verify'];
	$verify1 = $_SESSION['authcode'];
	if (strtolower($verify) != $verify1){
		echo "<script>alert('验证码不正确');window.location.href='register.php';</script>";
	}
	$sql = "insert into username(username,password,email) values('$username','$password','$email')";
	$submit = mysql_query($sql);
	if ($submit) {
		$_SESSION['adminName'] = $username;
		echo "<script>alert('注册成功');window.location.href='home.php';</script>";
	}else {
		echo "<script>alert('注册失败');window.location.href='register.php';</script>";

	}
?>