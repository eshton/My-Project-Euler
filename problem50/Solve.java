import java.lang.Math;

class Solve {
  public static void main(String[] args) {
     int result = 0;
     int sum = 0;
     for (int i = 2; i < 1000000; i++) {
        if (Solve.isPrime(i)) {System.out.println(i);
          sum += i;
          if (Solve.isPrime(sum)) {
             if (sum > 1000000) {
                System.out.println("The result is " + result);
                return;
             }
             result = sum;
          }
        }
     }
  }
  public static boolean isPrime(int i) {
     for (int j = 2; j < (int)Math.ceil(Math.sqrt((double)i)); j++) {
        if ((i%j) == 0) return false;
     }
     return true;
  }
}
