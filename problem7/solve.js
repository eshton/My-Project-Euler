function checkPrime(i) {
  for (var j = 2; j < i; j++) {
    if ( (i%j) == 0 ) return false;
  }
  return true;
}

var i = 3;
var j = 1;

while(true) {
  if (checkPrime(i)) { console.log(i); j++; }
  if (j == 10001) break;
  i++;
}

console.log(i);


