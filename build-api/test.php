<?php
require_once('./file.php');

$arr = [
	'id' => 1,
	'name' => 'gong'
];

// Response::json(0, '操作成功', $arr);
$file = new File();

if ($file->cacheData('index_mk_cache', null)) {
	echo 'success';
} else {
	echo 'fail';
}