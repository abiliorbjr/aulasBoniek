<?php 
	session_start();
	header("content_type: image/jpeg");
	$n_SESSION['captcha'];

	$imagem = imagecreate(100,50);
	imagecolorallocate($imagem, 200, 200, 200);

	$fontcolor = imagecolorallocate($imagem, 20, 20, 20)
	imagettftext($imagem, 40, 0, 21, 35, $fontcolor,'/Ginga.otf', $n);

	imagejpeg($image,null,100);
 ?>