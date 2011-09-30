function checkPalindrom(m) {
  var l = m.length;
  var c = Math.floor(l/2);
  for (var i = 0; i < c; i++) {
    if (m[i] != m[l-i-1]) return false;
  }
  return true;
}

var result = 0;

for (var i = 100; i < 1000; i++) {
  for (var j = 100; j < 1000; j++) {
    var m = i*j;
    var m_str = m + "";
    
    if (checkPalindrom(m_str) && (m > result)) {
       result = m;
    }

  }
}

console.log(result);
