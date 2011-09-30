<?php

$data = array();
$solution = 0;

for($i = 0; $i < 21; $i++) {
    for($j = 0; $j < 21; $j++) {
        if ($i == 0 || $j == 0) {
            $data[$i][$j] = 1;
        } else {
            $data[$i][$j] = 0;
        }
    }
}

for($i = 1; $i < 21; $i++) {
    for($j = 1; $j < 21; $j++) {
        $data[$i][$j] = $data[$i][$j-1] + $data[$i-1][$j];
    }
}

echo $data[20][20];