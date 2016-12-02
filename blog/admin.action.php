<?php
require_once 'connect.php';
	$act = $_GET['act'];
	if ($act=='exit'){
		$_SEESION=array();
		session_destroy();
		echo "<script>window.location.href='home.php';</script>";
	}
?>