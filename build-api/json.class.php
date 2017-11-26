<?php

class Response {
	// 按json方式输出数据
	/**
	* 按json方式输出通讯数据
	* @params  integer $code 状态码
	* @params  string $message 提示信息
	* @params  array $data 数据
	* return string.
	*/

	public static function json ($code, $message = '', $data = array()) {
		if (!is_numeric($code)) {
			return '';
		}

		$result = [
			'code' => $code,
			'message' => $message,
			'message' => $message,
			'data' => $data
		];

		echo json_encode($result);
		exit;
	}

	public static function xml () {
		$xml = "<?xml version='1.0' encoding='utf-8'?";
	}
}