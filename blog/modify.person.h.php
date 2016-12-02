<?php
	require_once('connect.php');
	$name = $_SESSION["adminName"];
	$username = $_POST['username'];
	$occupation = $_POST['occupation'];
	$qianming = $_POST['qianming'];
	$insertSql = "update username set username = '$username',occupation='$occupation',qianming='$qianming' where username='{$name}'";
	$submit = mysql_query($insertSql);
	if ($submit) {
		echo "<script>alert('修改成功');window.location.href='person.php';</script>";

	}
?>