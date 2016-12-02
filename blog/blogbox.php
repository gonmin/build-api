<?php
date_default_timezone_set('PRC');

	require_once 'connect.php';
	// require_once 'writeBlog.handle.php';
	$time = $_SESSION['blogTime'];
	$sql = "select * from blog where dateline = $time";
	$query = mysql_query($sql);
	$row = mysql_fetch_assoc($query);
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

		.content-box {
			width: 1000px;
			margin: 20px auto;
		}
		.content-box h2 {
			margin-bottom: 20px;
		}
		.content {
			border-top: 1px solid #ddd;
			padding-top: 10px;
		}
	</style>
</head>
<body>
<div class="header">
	<div class="logo">
		<a href="home.php">龚明欢</a>
	</div>
</div>
	<div class="content-box">
		<h2><?php echo $row['title']; ?></h2>

		<?php
			if ($_SESSION['adminName'] == $row['username']){
				$href = "person.php";
			} else {
				$href = "person.other.php";
			}
		?>
		<p class="time"><a href="<?php
			
			echo $_SESSION['adminName'] == $row['username']? "person.php":"person.other.php";
		?>"><?php echo $row['username']; ?></a><?php echo date("Y-m-d h:i:s",$row['dateline']);?></p>
		<div class="content"><?php echo $row['content'];?>
		</div>
	</div>
</body>
</html>