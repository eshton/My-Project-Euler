<?php

$f = fopen('matrix.txt','r');

$data = array();
$line = "";
while($line = fgets($f)) {
    $numbers = explode(",",trim($line));

    for($i = 0; $i < count($numbers); $i++) {
        $numbers[$i] = (int)$numbers[$i];
    }

    $data[] = $numbers;
}

$height = count($data);
$width = count($data[0]);

for($i = 0; $i < $height; $i++) {
    for($j = 0; $j < $width; $j++) {
        if ($i == 0 && $j == 0) continue;

        //top
        if ($i == 0) {
            $data[$i][$j] += $data[$i][$j-1];
            continue;
        }
        //left
        if ($j == 0) {
            $data[$i][$j] += $data[$i-1][$j];
            continue;
        }
        //otherwise
        $data[$i][$j] += min($data[$i-1][$j],$data[$i][$j-1]);
    }
}

echo $data[$height-1][$width-1];