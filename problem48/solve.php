<?php

$sum = 0;

for ($i = 1; $i < 1001; $i++) {
    $sum = gmp_add($sum, gmp_pow($i,$i));
}

echo gmp_strval($sum);