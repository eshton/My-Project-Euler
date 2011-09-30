var sum = Math.pow(10,12);
var blue = sum;
var red = 0;

while (true) {
  var prob = ((blue/sum)*((blue-1)/(sum-1)));
  var diff = 0;
  if (prob < 0.6) {
    diff = 1;
  } else {
    diff = 1000000;
  }
  
  blue -= diff;
  red += diff;
  console.log(blue);
  console.log(prob);
}

console.log(blue);
