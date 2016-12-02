<?php
	require_once('connect.php');
	$password = $_POST['password'];
	$username = $_POST['username'];
	$sql = "select * from username where username='$username' and password='$password'";
	$query = mysql_query($sql);
	$row = mysql_fetch_assoc($query);
	if ($row){
		$_SESSION['adminName'] = $row['username'];
		$_SESSION['adminId'] = $row['id'];
		echo "<script>alert('登录成功');window.location.href='home.php';</script>";
	} else{
		echo "<script>alert('用户名或密码有误');window.location.href='login.php';</script>";

	}

?>