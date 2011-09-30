<?php

$data = fread(fopen('data','r'), filesize('data'));

$s = 0;
$t = array();

for($i = 0; $i < strlen($data); $i++) {
    $number = $data[$i];
    if ($number == 0) {
        $t = array();
        continue;
    }
    
    if (count($t) < 5) {
        $t[] = $number;
        continue;
    }
    else array_shift($t);
    $t[] = $number;

    $a = 1;
    for($j=0; $j < count($t);$j++) {
        $a *= $t[$j];
    }
    if ($a > $s) $s = $a;
}

echo $s;