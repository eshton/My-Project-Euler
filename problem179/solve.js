function getNumberOfDivisors(i) {
  var divisors = [];
  for (var j = 2; j < i; j++) {
    if ( (i%j) == 0) {
      i = i/j;
      if (!hasValue(divisors,j)) divisors.push(j); 
      j = 1;
    }
  }
  return divisors.length + 2;
}

function hasValue(a, v) {
  for (var i in a) {
    if (i == v) return true;
  }
  return false;
}

var r = 0;
var ndiv = 0;
var n1div = 0;

for (var i = 2; i < 100000; i++) {
   console.log(i);
   var n1div = getNumberOfDivisors(i);
   if (ndiv == n1div) r++;
   
   ndiv = n1div;
}

console.log(r);
