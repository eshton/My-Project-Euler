import java.util.ArrayList;

class Solve {
  public static void main (String[] args) {
     int r = 0;
     int ndiv = 0;
     int n1div = 0;
     for (int i = 2; i < 10000000; i++) {
        System.out.println(i);
        n1div = Solve.getNumberOfDivisors(i);
        if (ndiv == n1div) r++;
        ndiv = n1div;
     }

     System.out.println(r);
  }
  public static int getNumberOfDivisors(int i) {
    ArrayList divisors = new ArrayList();
    
    for (int j = 2; j < i; j++) {
      if ( (i%j) == 0 ) {
         i = i/j;
         if (!divisors.contains(j)) divisors.add(j);
         j = 1;
      }
    }
    return divisors.size();
  }
}
