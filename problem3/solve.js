var i = 600851475143;
var max = i;
var lol = 1;

for (var j = 2; j < max; j++) {
   if ( (i%j) == 0 ) {
      i = i / j;
      if (j> lol) lol = j;
      j = 2;
   }
   if (i == 1) break;
}

console.log(lol);

