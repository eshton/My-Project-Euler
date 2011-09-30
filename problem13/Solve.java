import java.io.*;
import java.lang.Math;

class Solve {

	public static void main(String[] args) {
		try{
		File f = new File("input");
		FileInputStream fis = new FileInputStream(f);
		BufferedInputStream bis = new BufferedInputStream(fis);
		DataInputStream dis = new DataInputStream(bis);

		String result = null;
		String line = null;
		
		while( (line = dis.readLine()) != null ) {
			result = addStrings(result, line);
		}

		System.out.println(result);

		} catch(Exception e){e.printStackTrace();}
	}  

	public static String addStrings(String one, String two) {
		if (one == null) return two;
		if (two == null) return one;
		if (one.length() != two.length()) {
			int difference = Math.abs(one.length() - two.length());
			String extra = "";
			for(int i = 0; i < difference; i++) { extra += "0"; }
			if (one.length() > two.length()) {
				two = extra + two;
			} else {
				one = extra + one;
			}
		}
System.out.println(one);
System.out.println(two);
		String result = "";
		int extra = 0;
		for (int i = one.length(); i > 0; i--) {
			int oneInt = Integer.parseInt( one.substring(i-1, i) );
			int twoInt = Integer.parseInt( two.substring(i-1, i) );
			int addedValue = oneInt + twoInt + extra;
			int resultInt =  addedValue % 10;
			String resultStr = "" + resultInt;
			result = resultStr + result;
			extra = (addedValue - (addedValue % 10))/10;
		}
		if (extra != 0) {
			String toAdd = "" + extra;
			result = extra + result;
		}
		return result;
	}

}
