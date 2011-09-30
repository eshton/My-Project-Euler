<?php

$months = array(
 '1' => 31,
 '2' => 28,
 '3' => 31,
 '4' => 30,
 '5' => 31,
 '6' => 30,
 '7' => 31,
 '8' => 31,
 '9' => 30,
 '10'=> 31,
 '11'=> 30,
 '12'=> 31
);

function year_is_leap($year) {
  if ((($year % 100) == 0) && (($year % 4) == 0)) return true;
  if ($year % 4 == 0) return true;
  return false; 
}

$currentDay = 1;
$sum = 0;

for ($year = 1900; $year < 2001; $year++) {
  $isLeap = year_is_leap($year);
  foreach($months as $month => $days) {
    if ($month == 2 && $isLeap) $days = 29;
    $currentDay += $days;
   $currentDay = $currentDay % 7;

    if ($year == 1900) continue;
    if ($currentDay == 0) $sum++;
  }
}

echo $sum;
