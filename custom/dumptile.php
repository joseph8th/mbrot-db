<?php
$uniform = (bool) $_SESSION['uniform'];
$maxdepth = $_SESSION['maxdepth'];
$data = $_SESSION['data'];
$maxiters = 65536;
if ($uniform === TRUE) {
  $ix = 255 - round(($data*255)/$maxdepth);
}
else {
  for ($i=0; $i < $maxiters; $i++) {
    $ix[] = 255 - round(($data[$i]*255)/$maxdepth);
  }
}
echo "<br>Uniform: ";
var_dump($uniform);
echo "<br>Min: ".min($ix)."<br>Max: ".max($ix);
?>