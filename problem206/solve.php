<?php

function isBazFormat($num) {
    //if ($num < 1020304050607080899) return false;
    $s = (string)$num;
    if ($s[0] == "1" &&
        $s[2] == "2" &&
        $s[4] == "3" &&
        $s[6] == "4" &&
        $s[8] == "5" &&
        $s[10] == "6" &&
        $s[12] == "7" &&
        $s[14] == "8" &&
        $s[16] == "9" &&
        $s[18] == "0") return true;
    return false;
}


//1_2_3_4_5_6_7_8_9_0
//2000000000000000000

$a = 2000000000000000000;

$b = (int)floor(sqrt($a));

while(!isBazFormat($b*$b)) {
    $b--;
    //echo $b."\n";
}
echo $b;