var fb = 1;
var fb_next = 2;
var sum = 2;

while (fb_next < 4000000) {
  var cache = fb_next;
  fb_next += fb; 
  fb = cache;
  if ((fb_next%2) == 0) sum+=fb_next;
}

console.log(sum);
