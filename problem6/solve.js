var sum1 = 0;
for (var i = 1; i< 101; i++) {
  sum1 += (i*i);
}

var sum2 = 0;
for (var i = 1; i< 101; i++) {
  sum2 += i;
}
sum2 = sum2*sum2;

console.log(sum2);
console.log(sum1);
console.log(sum2 - sum1);
