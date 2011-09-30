
<?php

$t1 = null;
$t2 = array();

$f = fopen("two.txt","r");

while($line = fgets($f)) {
   if ($t1 == null) {
      $t1 = array();
      $t1[] = $line;
      continue;
   }
   
   $t2 = explode(" ", $line);
   for($i = 0; $i < sizeof($t2); $i++) {
      if ($i == 0) {
          $t2[$i] += $t1[$i];
          continue;
      }
      if ($i == (sizeof($t2) - 1)) {
          $t2[$i] += $t1[$i - 1];
          continue;
      }

      $t2[$i] += max($t1[$i], $t1[$i - 1]);
   }
   $t1 = $t2;
}

$max = 0;
for($i = 0; $i < sizeof($t2); $i++) {
   if ($t2[$i] > $max ) $max = $t2[$i];
}
var_dump($t2);
echo "Solution: ".$max."\n\n";
