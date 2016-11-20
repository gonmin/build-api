<?php
		$product[]= '手机';
		$product[]= '手表';
		$product[]= '手电筒';
		$product[]= '手表 男';
		$product[]= '手环';
		$product[]= '手链';
		$product[]= '手表 女';
		$product[]= '手套';
		$product[]= '手机支架';
		$product[]= '手机壳';
		$product[]= '电视';
		$product[]= '电油烟机';
		$product[]= '电烤箱';
		$product[]= '电磁炉';
		$product[]= '电压力锅';
		$product[]= '电水壶';
		$word = $_GET['q'];
		// $word = '手';
			$resposeText = '';
		
		if(strlen($word)>0) {
			for ($i=0; $i < count($product); $i++) { 
				if (substr($product[$i], 0,strlen($word))==$word){
					if($resposeText=='') {
						$resposeText = $product[$i];
					} else {
						$resposeText .= '|'.$product[$i];
					}
				}
			}
		}
		echo $resposeText;
?>