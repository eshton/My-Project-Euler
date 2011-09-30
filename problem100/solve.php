<?php

$sum = pow(10,12);
$blue = $sum;
$omg = true;

while(true) {
   $prob = (($blue/$sum)*(($blue-1)/($sum-1)));
   $diff = 1000000;
   if ($omg) {

   if ($prob < 0.51) {
      $diff = 100000;
   } 
   if( $prob < 0.501) {
      $diff = 10000;
   }
   if ( $prob < 0.5001 ) {
      $diff = 1000;
   } 
   if ( $prob < 0.50001 ) {
      $diff = 100;
   } 
   if ( $prob < 0.500001 ) {
      $diff = 10;
   }
   }

   if (!$omg || $prob < 0.5000001 ) {
      
      $omg = false;
      $diff = 1;

      echo $prob." ";

      if ($prob == 0.5) {
         echo "The result: ".$blue;
         exit;
      }
   }
if ($prob < 0.499999999) exit;
   $blue -= $diff;
   
   echo $blue."\n";
}
