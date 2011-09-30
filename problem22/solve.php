<?php

$alphabet = strtoupper("a b c d e f g h i j k l m n o p q r s t u v w x y z");
$alphabet = explode(" ", $alphabet);

$cache = array();
$i = 1;
foreach($alphabet as $letter) {
    $cache[$letter] = $i;
    $i++;
}

function namelol($name) {
    global $cache;
    $sum = 0;
    for($i = 0; $i < strlen($name); $i++) {
        $sum += $cache[$name[$i]];
    }
    return $sum;
}

$f = fopen('names.txt','r');
$names = fread($f, filesize('names.txt'));

$names = explode(",", $names);
for($i = 0; $i < count($names);$i++ ) {
    $names[$i] = trim($names[$i], '"');
}

sort($names);

/*for($i = 0; $i < count($names); $i++) {
    if ($names[$i] == "COLIN"){ echo $i;echo "\n\n";}
}*/

$sum = 0;
$i = 1;
foreach($names as $name) {
    $sum+= $i * namelol($name);
    $i++;
}

echo $sum;

