<?php

$f = fopen('data','r');

$data = array();
$line = "";
while($line = fgets($f)) {
    $numbers = explode(" ", trim($line));
    for($i = 0; $i < count($numbers); $i++) {
        $numbers[$i] = (int)$numbers[$i];
    }
    $data[] = $numbers;
}

$solution = 0;
$height = count($data);
$width = count($data[0]);
for($i = 0; $i < $height; $i++) {
    for($j = 0; $j < $width; $j++) {
        //down
        if ($i < ($height - 3)) {
            $product = $data[$i][$j]*$data[$i+1][$j]*$data[$i+2][$j]*$data[$i+3][$j];
            if ($product > $solution) {
                $solution = $product;
            }
        }

        //right
        if ($j < ($width - 3)) {
            $product = $data[$i][$j]*$data[$i][$j+1]*$data[$i][$j+2]*$data[$i][$j+3];
            if ($product > $solution) {
                $solution = $product;
            }
        }

        //diagonal left
        if ($i < ($height - 3) && $j > 2) {
            $product = $data[$i][$j]*$data[$i+1][$j-1]*$data[$i+2][$j-2]*$data[$i+3][$j-3];
            if ($product > $solution) {
                $solution = $product;
            }
        }

        //diagonal right
        if ($i < ($height - 3) && $j < ($width - 3)) {
            $product = $data[$i][$j]*$data[$i+1][$j+1]*$data[$i+2][$j+2]*$data[$i+3][$j+3];
            if ($product > $solution) {
                $solution = $product;
            }
        }
    }
}

echo $solution;
