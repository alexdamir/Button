using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
class Solution {

    static void Main(String[] args) {
        string S = Console.ReadLine();
        decimal Dec;
        try {
 Dec= System.Convert.ToDecimal(S);
System.Console.WriteLine("{0}", Dec);
	} 
	catch {
		System.Console.WriteLine(
			"Bad String");
	}
    }
}