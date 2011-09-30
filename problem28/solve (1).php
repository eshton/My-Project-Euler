<?php

$sum = 1;
$current = 1;

for($i = 1; $i < 501; $i++) {
  for($j = 0; $j < 4; $j++) {
    $current = $current + 2*$i;
    $sum += $current;
  }
}

echo $sum;
