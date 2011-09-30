<?php
$l = 2000000;
$a = range(0,$l-1);
$sum = 0;

for ($i = 2; $i < $l; $i++) {
  if ($a[$i] == -1) continue;
  $sum += $i;
  $t = $i;
  for ($j = 1; $j < $l; $j++) {
    $t2 = $j * $t;if ($t2 > ($l-1)) break;
    $a[$t2] = -1;
  }
}

echo $sum;

