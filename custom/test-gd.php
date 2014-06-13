<?php
session_start();
$textstr = $_SESSION['text'];
$im = @imagecreatetruecolor(120, 20)
  or die('Cannot Initialize new GD image stream');
$text_color = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 1, 5, 5, $textstr, $text_color);
Header('Content-Type: image/png');
imagepng($im);
imagedestroy($im);
?>