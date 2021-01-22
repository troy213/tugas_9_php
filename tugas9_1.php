<?php
  $x = 0;
  $y = 1;
  $temp;
  for ($i=0; $i <= 21; $i++) {
    $temp = $y;
    $y = $x + $y;
    echo "$x ";
    $x = $temp;
  }
?>
