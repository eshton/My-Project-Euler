<?php

$limit = 300000;
$sol = array();
$result = 0;

for ($i = 2; $i < $limit; $i++){
  $str = (string)$i;
  $sum = 0;
  for($j = 0; $j < strlen($str); $j++){
  	$sum += pow($str[$j],5);   
  }
  if ($i == $sum){
   $sol[] = $i;
   $result += $i;
  }
} 

var_dump($result);

