function solveIt() {
  var lol = [];
  var sum = 0;
  for (var i = 0; i< 1000; i+=5) {
     sum += i;
  }
  for (var j = 0; j< 1000; j+= 3) {
     if ( (j%5) != 0 ) {
        sum+=j;
     }
  }

  console.log('omg');
  console.log('The sum is: ' + sum);
}

solveIt();
