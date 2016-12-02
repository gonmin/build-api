<?php
require_once 'connect.php';
$title = $_POST['title'];
$description = $_POST['description'];
$content = $_POST['content'];
echo $content;
$dateline = time();
$username = $_SESSION['adminName'];
$_SESSION['blogTime'] = $dateline;
$sql = "insert into blog(username,title,description,content,dateline) values('$username','$title','$description','$content',$dateline)";
$query = mysql_query($sql);
if ($query) {
		echo "<script>alert('文章发布成功');window.location.href='blogbox.php';</script>";
} else {
		echo "<script>alert('文章发布失败');window.location.href='writeBlog.php';</script>";

}
