<?php
  function cek($x){
    if ($x == 1)
    return 0;

    for ($i = 2; $i <= sqrt($x); $i++){
        if ($x % $i == 0)
            return 0;
    }
    return 1;
  }

  for ($j=2; $j < 200 ; $j++) {
    $y = cek($j);
    if ($y == 1) {
      echo "$j,";
    }
  }
?>
