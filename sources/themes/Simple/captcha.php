<?php
session_start();
$code=rand(1000,9999);
$_SESSION["code"]=$code;
$im = imagecreatetruecolor(27, 18);
$bg = imagecolorallocate($im, 255, 255, 255); //background color blue
$fg = imagecolorallocate($im, 80, 80, 80);//text color white
imagefill($im, 0, 0, $bg);
imagestring($im, 2, 2, 2,  $code, $fg);
header("Cache-Control: no-cache, must-revalidate");
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
?>