<?php
	require_once 'connect.php';
	$id = $_GET['id'];
	$blog_sql = "select * from blog where id = {$id}";
	$blog_query = mysql_query($blog_sql);
	$row = mysql_fetch_assoc($blog_query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
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