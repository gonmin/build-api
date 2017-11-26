<?php
// http://app.com/list.php?page=1&pageSize=12;
require_once('./json.class.php');
require_once('./db.php');
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$pageSize = isset($_GET['pagesize']) ? $_GET['pagesize'] : 6;
// if (!is_numeric($page) || !is_numeric($pagesize) || ($page <= 0) || ($pageSize <=0)) {
// 	return Response::json(1, '参数不合法');
// }

$offset = ($page - 1) * $paegSize;

$sql = 'select * from blog limit '.$offset.' , '.$pageSize;

try {
	$connect = Db::getInstance()->connect();
} catch (Exception $e) {
	return Response::json(1, '数据库连接失败');

}
$lists = [];

$result = mysql_query($sql, $connect);
while ($rows = mysql_fetch_assoc($result)) {
	$lists[] = $rows;
}

if ($lists) {
	return Response::json(0, '获取数据成功', $lists);
} else {
	return Response::json(1, '获取数据失败', $lists);

}

