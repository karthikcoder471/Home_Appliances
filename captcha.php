<?php
$str = md5(microtime());
$str = substr($str, 0 ,6);

session_start();
$_SESSION['cap_code'] = $str;

$img = imagecreate(150,20);
imagecolorallocate($img, 255,255,255);
$txtcol = imagecolorallocate($img,100,0,0);
imagestring($img,20,40,0,$str,$txtcol);
header('Content:image/jpeg');
imagejpeg($img);
?>