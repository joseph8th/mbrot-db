<?php
session_start();
$uniform = (bool) $_SESSION['uniform'];
$maxdepth = $_SESSION['maxdepth'];
$data = $_SESSION['data'];
$maxiters = 65536;
$img = @imagecreatetruecolor(256, 256) or die('Cannot initialize image');
if ($uniform === TRUE) {
  $ix = ($data/$maxdepth >= 0.00001) ? 255 : 0;
  //$ix = 255 - round(($data*255)/$maxdepth);
  $color = imagecolorallocate($img, $ix, $ix, $ix);
  for ($i=0; $i < $maxiters; $i++) {
    imagesetpixel($img, $i % 256, floor($i/256), $color);
  }
}
else {
  for ($i=0; $i < $maxiters; $i++) {
    $ix = ($data[$i]/$maxdepth >= 0.00001) ? 255 : 0;
    //$ix = 255 - round(($data[$i]*255)/$maxdepth);
    $color = imagecolorallocate($img, $ix, $ix, $ix);
    imagesetpixel($img, $i % 256, floor($i/256), $color);
  }
}
Header('Content-Type: image/png');
imagepng($img);
imagedestroy($img);
?>