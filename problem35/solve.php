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

$primes = primesBelow(100);

function checkPrime($num) {
  global $primes;
  return in_array($num,$primes);
}

function checkCircularPrime($num, $left) {
    global $primes;
    if (count($left) == 0) {

    $prime = implode("",$num);

    if(!checkPrime($prime)) {
        for($i=0;$i<count($primes);$i++){
            if ($primes[$i] == $prime) {
               $primes[$i] = 0;

               return false;
            }
        }
    } 
    return true;   
    }
    $res = true;
    for($j = 0; $j < count($left); $j++) {
//  var_dump($num);
//var_dump($left);
         $newNum = $num;
         $newNum[] = $left[$j];
         $newLeft = $left;
         array_splice($newLeft,$j,1);

//var_dump($newNum);var_dump($newLeft);
         $res = checkCircularPrime($newNum,$newLeft);
    }
    return $res;
}

$sum = 0;
for($i = 0; $i < count($primes); $i++) {
if ($primes[$i] == 0) continue;
echo "checking ".$primes[$i]."\n";

    $prime = str_split($primes[$i]);
    if (checkCircularPrime(array(), $prime)) $sum++;
}

echo $sum;
