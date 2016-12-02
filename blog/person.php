<?php
	require_once 'connect.php';
	if(!isset($_SESSION['adminName'])) {
		echo "<script>alert('请先登录');window.location.href='login.php';</script>";
	}
	$uname = $_SESSION["adminName"];
	$sql = "select * from username where username = '{$uname}'";
	$query = mysql_query($sql);
	$row = mysql_fetch_assoc($query);


	$name = $_SESSION['adminName'];
	$blog_sql = "select * from blog where username = '{$name}' order by dateline desc";
	$blog_query = mysql_query($blog_sql);
	if ($blog_query && mysql_num_rows($blog_query)) {
		while ($row1 = mysql_fetch_assoc($blog_query)) {
			$data[] = $row1;
		}
	} else {
		$data = array();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
		.header {margin: 10px auto 0;width: 1000px;height: 30px;line-height: 30px;}
		.header .logo a {color: #333;font-size: 18px;font-weight: bold;}
		.box {width: 1000px;margin: 0 auto;height: 128px;}
		.person {float: left;width: 500px;}
		.action {margin-top: 30px;float: left;}
		.blog{width: 1000px;margin: 20px auto;}
		.blog-cell {margin-bottom: 10px;}
		.blog-cell h3 a{color: #105cb6;}
	</style>
</head>
<body>
	<div class="header">
		<div class="logo">
			<a href="home.php">龚明欢</a>
		</div>
	</div>
	<div class="box">
		<div class="person">
			<h3><?php echo $row['username'];?></h3>
			<P class="occupation">职业：<?php 
				if($row['occupation']=='') {
					echo '暂未填写';
				} else {
					echo $row['occupation'];
				}
			?></P>
			<P class="signed">个性签名：
				<?php
					if ($row['qianming']=='') {
						echo "这个童鞋很懒，什么也没留下~~！";
					} else {
						echo $row['qianming'];
					}
				?>
			</P>

		</div>
		<div class="action">
			<a href="writeBlog.php">发博文</a>
			<a href="modify.person.php">
			<?php
				if ($row['occupation']=='') {
					echo '完善资料';
				} else {
					echo '修改资料';
				}
			?>
			</a>
		</div>
	</div>
	<div class="blog">
	<h2 class="title" style="padding-bottom: 8px;">他的博客</h2>
		<?php
			if (!empty($data)){
				foreach ($data as $value) {

		?>
		<div class="blog-cell">
			<h3><a href="blog.list.php?id=<?php echo $value['id']; ?>"><?php echo $value['title']; ?></a></h3>
			<p class="description"><?php echo $value['description']; ?></p>
			<p class="time"><?php echo date("Y-m-d h:i:s",$value['dateline']); ?>
			</p>
		</div>
		<?php
				}
			} else {
				echo '他暂未发表过博客';
			}
		?>
	</div>
	
</body>
</html>