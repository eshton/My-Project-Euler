<?php

function checkPrime($i) {
  for ($j = 2; $j < $i; $j++) {
    if ( ($i%$j) == 0 ) return false;
  }
  return true;
}

$sum = 0;
$p = 1;

while(true) {
  if ($p > 999999) break;
  if (checkPrime($p)) {echo $p."\n";
    $sum += $p;
  }
  $p++;
}

echo "sum is: ".$sum;



