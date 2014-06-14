<?php
session_start();
$maxiters = $_SESSION['maxiters'];
$palette = $_SESSION['palette'];
$maxdepth = $_SESSION['maxdepth'];
$data = $_SESSION['data'];
$uniform = (bool) $_SESSION['uniform'];
$img = @imagecreatetruecolor(256, 256) or die('Cannot initialize image');
if ($uniform === TRUE) {
  $color = imagecolorallocate($img,
                              $palette[$data][0],
                              $palette[$data][1],
                              $palette[$data][2]);
  for ($i=0; $i < $maxiters; $i++) {
    imagesetpixel($img, $i % 256, (int)floor($i/256), $color);
  }
}
else {
  $histogram = $_SESSION['histogram'];
  for ($i=0; $i < $maxiters; $i++) {
    $color = imagecolorallocate($img,
                                $palette[$histogram[$data[$i]]][0],
                                $palette[$histogram[$data[$i]]][1],
                                $palette[$histogram[$data[$i]]][2]);
    imagesetpixel($img, $i % 256, (int)floor($i/256), $color);
  }
}
Header('Content-Type: image/png');
imagepng($img);
imagedestroy($img);
?>