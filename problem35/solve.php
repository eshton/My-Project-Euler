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

function checkCircularPrime($prime) {
    global $primes;
    $prime = (string)$prime;

    for($i = 0; $i < )
}

$sum = 0;
for($i = 0; $i < count($primes); $i++) {
    if (checkCircularPrime($prime)) $sum++;
}

echo $sum;