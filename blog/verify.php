<?php
	session_start();
	$image = imagecreatetruecolor(100, 30);
	$bgcolor = imagecolorallocate($image, 255, 255, 255);
	imagefill($image, 0, 0, $bgcolor);
	// for ($i=0; $i < 4; $i++) { 
	// 	$fontsize = 6;
	// 	$fontcolor = imagecolorallocate($image, rand(0,120), rand(0,120), rand(0,120));
	// 	$fontcontent = rand(0,9);
	// 	$x = ($i*100/4) + rand(5,10);
	// 	$y = rand(5,10);
	// 	imagestring($image, $fontsize, $x, $y, $fontcontent, $fontcolor); 

	// }
	$captch_code = '';
	for ($i=0; $i < 4; $i++) { 
		$fontsize = 15;
		$fontcolor = imagecolorallocate($image, rand(0,120), rand(0,120), rand(0,120));
		$fcr = join("",array_merge(range("a", "z"),range(0, 9)));
		$fontcontent = substr($fcr, rand(0,strlen($fcr)-1),1);
		$captch_code .= $fontcontent;
		$x = ($i*100/4) + rand(5,10);
		$y = rand(5,10);
		imagestring($image, $fontsize, $x, $y, $fontcontent, $fontcolor);
	}
	$_SESSION['authcode'] = $captch_code;
	for ($i=0; $i < 150; $i++) { 
		$pointcolor = imagecolorallocate($image, rand(50,200), rand(50,200), rand(50,200));
		imagesetpixel($image, rand(1,99), rand(0,30),$pointcolor);
	}
	for ($i=0; $i < 2; $i++) { 
		$lcolor = imagecolorallocate($image, rand(80,220), rand(80,220), rand(80,220));
		imageline($image, rand(1,99), rand(1,29), rand(1,99), rand(1,29), $lcolor);
	}
	header('content-type: image/png');
	imagepng($image);
	imagedestroy($image);
?>
