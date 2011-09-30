
<?php
/*
function add($one, $two) {
	if ($one == null) return $two;
	if ($two == null) return $one;
	if (sizeof($one) != sizeof($two)) {
		$difference = abs(sizeof($one) - sizeof($two));
		$extra = "";
		for($i = 0; $i < $difference; $i++) { $extra += "0"; }
		if (sizeof($one) > sizeof($two)) {
			$two = $extra + $two;
		} else {
			$one = $extra + $one;
		}
	}

	$result = "";
	$extra = 0;
	for ($i = sizeof($one); $i > 0; $i--) {
		$oneInt = (int)strstr($one, $i-1, $i);
		$twoInt = (int)strstr($two, $i-1, $i);
		$addedValue = $oneInt + $twoInt + $extra;
		$resultInt =  $addedValue % 10;
		$resultStr = "" + $resultInt;
		$result = $resultStr + $result;
		$extra = ($addedValue - ($addedValue % 10))/10;
	}
	if ($extra != 0) {
		$toAdd = "" + $extra;
		$result = $extra + $result;
	}
	return $result;
}


function multiplyX($b, $s) {
   $carry = 0;
   for($i = sizeof($b)-1; $i>=0; $i--) {
      $t = ((int)$b[$i]) * $s + $carry;
      $carry = ($t - $t % 10)/10;
      $b[$i] = $t%10;

      if ($i == 0 && $carry > 0) {
         return "" + $carry + $b;
      } else {
         return $b;
      }
   }
}

function multiplyXX($b, $s) {
   $tens = ($s - ($s%10))/10;
   $rest = $s%10;

   $t1 = multiplyX($b, $tens) . "0";
   $t2 = "0" . multiplyX($b, $rest);

   return add($t1,$t2);
}*/

$s = 100;

for($i = 99; $i > 1; $i--) {
   $s = gmp_mul($s, $i);
}

$sum = 0;
$s = gmp_strval($s);echo $s;
for($i = 0; $i < strlen($s); $i++) {
   $sum += (int)$s[$i];
}

echo "Solution: ".$sum."\n\n";

