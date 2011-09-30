<?php

$numbers = array(0,3,3,5,4,4,3,5,5,4);
$tennumbers = array(0,0,6,6,5,5,5,7,6,6);
$precalculated = array(
  10 => 3, //ten
  11 => 6, //eleven
  12 => 6, //twelve
  13 => 8, //thirteen
  14 => 8, //fourteen
  15 => 7, //fifteen
  16 => 7, //sixteen
  17 => 9, //seventeen
  18 => 8, //eighteen
  19 => 8  //nineteen
);

function calcLetters($number) {
   global $numbers, $tennumbers, $precalculated;
   $sum = 0;
   
   //hundreds tag
   $hundreds = ($number - ($number % 100))/100;
   if ($hundreds != 0) $sum += $numbers[$hundreds] + 7;
   
   if ($number == ($hundreds*100)) return $sum;
   else if($hundreds != 0) $sum += 3;

   $number = $number - $hundreds*100;

   if ( (9 < $number) && (20 > $number)) {
      return $sum + $precalculated[$number];
   } 
   
   //tens
   $tens = ($number - ($number % 10))/10;
   $sum += $tennumbers[$tens];

   $number = $number - $tens*10;
   
   $sum += $numbers[$number];

   return $sum;
}

$start = 1;
$end = 1000;
$sum = 0;

for ($i = $start; $i < $end; $i++) {echo $i.": ".calcLetters($i)."\n";
  $sum += calcLetters($i);
}

echo "\nSolution: ". ($sum + 11); //to handle one thousand

echo "\n\nTesting:\n";
echo "546: ".calcLetters(546)."\n";
echo "342: ".calcLetters(342)."\n";
echo "115: ".calcLetters(115)."\n";
echo "600: ".calcLetters(600)."\n";
echo "34:  ".calcLetters(34)."\n";
