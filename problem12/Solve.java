public class Solve {
    //public static int[] primes = new int[Integer.MAX_VALUE];
    public static void main(String[] args) {
         int i = 1;
         int act = 1;
         int numdiv = 0;
         while ( true ) {
              numdiv = Solve.numDiv(act);
              if (numdiv > 500) break;
              System.out.println("analised: " + act + "(" + numdiv  + ")");
              act += ++i;
         }
         System.out.println("the result: " +act + "(" + numdiv + ")");
    }

    public static int numDiv(int i) {//if (i < 31000000)return 0;
         int result = 0;
         for (int j = 1; j <= i; j++) {
              if ( (i % j) == 0 ) {
		result++; //System.out.println("divisor: " +j);
 	      }
         }
         //System.out.println("number of divisors: " + result);
         return result;
    }

    public static int numDiv2(float i) {
      return 0;
    }

    public static float nextPrime(float prime) {
      return 0;
    }
}
