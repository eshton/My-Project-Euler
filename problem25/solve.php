<?php

$a = 1;
$b = 1;
$counter = 2;

while(true) {
    $counter++;
    $next_fib = gmp_add($a,$b);
    $a = $b;
    $b = $next_fib;


    $s = gmp_strval($next_fib);
    if (strlen($s) > 999) {
        echo $counter; exit;
    }

}
