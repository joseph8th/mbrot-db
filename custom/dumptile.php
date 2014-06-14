<?php
$maxiters = $_SESSION['maxiters'];
$palette = $_SESSION['palette'];
$maxdepth = $_SESSION['maxdepth'];
$data = $_SESSION['data'];
$uniform = (bool) $_SESSION['uniform'];

echo "<br><br><b>Uniform</b>: ";
var_dump($uniform);

echo "<br><b>Palette</b>:<br>Min: ";
print_r(min($palette));
echo "<br>Max: ";
print_r(max($palette));
//var_dump($palette);

if ($uniform === TRUE) {
  $colors = $palette[$data];
}
else {
  $histogram = $_SESSION['histogram'];

  echo "<br><b>Histogram</b>:<br>";
  print_r($histogram);

  for ($i=0; $i < $maxiters; $i++) {
    $colors[] = $palette[$data[$i]];
    //$ix[] = 255 - round(($data[$i]*255)/$maxdepth);
  }
}

echo "<br><b>Colors</b>:<br>Min: ";
print_r(min($colors));
echo "<br>Max: ";
print_r(max($colors));
//var_dump($colors);
//echo "<br>Min: ".min($ix)."<br>Max: ".max($ix);
?>