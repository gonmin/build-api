<?php
	header("Content-type: text/html; charset=utf-8");
	session_start();
	$link = mysql_connect('localhost','root','gongming') or die('数据库连接失败');
	$open = mysql_select_db('blog') or die('打开数据库失败');
	mysql_query('set names utf8');
?>