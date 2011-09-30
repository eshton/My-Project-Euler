public class Solve {
  public static void main (String[] args) {
     int result = 0;
     int er = 0;
     for (int i = 13; i < 1000000; i++) {
         double act = i;
         int r = 1;
         //System.out.println("");
         while (act != 1) {
             //System.out.print(act + " => ");
            if ( (act%2) == 0 ) act /=2;
            else act = 3*act+1;
            r++;
         }
         if (r > er) {
           er = r;
           result = i;
         }
         System.out.println(i + " " + r);
     }
     System.out.println("The result number is " + result + " with " + er + " occurrences.");
  }
}

