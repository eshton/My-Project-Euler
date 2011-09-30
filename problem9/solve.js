

for (var a = 1; a < 999; a++) { 
  for (var b = 1; b < (1000-a); b++) {
     var c = 1000-a-b;console.log("checkin " + a + ", " + b + ", " + c);
     if ((a*a + b*b) == (c*c)) {
         console.log("Result: " + a + ", " + b + ", " + c);return;
     }
  }
}
