var max = 1;
for(var k = 2; k < 21; k++) {
  max*=k;
}

var r = 20;
while(r < max) {
  var succ = true;
  for (var i = 2; i < 21; i++) {
    if ( (r%i) != 0 ) {
       succ = false;
       break;
    }
  }
  if (succ) break;
  r++;
}

console.log(r);
