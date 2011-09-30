<?php

$f = fopen('file.txt','w+');
if (!$f) return;

for ($i = 1; $i < 501; $i++) {

  $numbers = array();  

  for ($j = 0; $j < $i; $j++) {
    $numbers[] = rand(1,99);
  }

  fputs($f, implode(" ", $numbers)."\n");

}

fclose($f);
