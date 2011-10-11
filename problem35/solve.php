<?php

function primesBelow($maximum) {
    $p = array();
    for ($i = 0; $i < $maximum; $i++) {
        $p[$i] = 1;
    }

    $primes = array();

    for ($i = 2; $i < $maximum; $i++) {
        if ($p[$i] == 0) continue;
        $np = $i;
        $primes[] = $np;

        while($np < $maximum) {
            $np += $i;
            $p[$np] = 0;
        }
    }
    
    return $primes;
}

$primes = primesBelow(1000000);

function checkPrime($num) {
  global $primes;
  return in_array($num,$primes);
}

function checkCircularPrime($num, $left) {
    if (count($left) == 0) return checkPrime(implode("",$num));
    $res = true;
    for($j =0; $j < count($left); $j++) {
         $newNum = $num;
         $newNum[] = $left[$j];
         $newLeft = $left;
         unset($newLeft[$j]);
         $res = checkCircularPrime($newNum,$newLeft);
    }
    return $res;
}

$sum = 0;
for($i = 0; $i < count($primes); $i++) {
    $prime = str_split($primes[$i]);
    if (checkCircularPrime(array(), $prime)) $sum++;
}

echo $sum;
