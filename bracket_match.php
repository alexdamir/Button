bracket_match

7m28s
2 / 4 - Bracket match

A string of brackets is correctly matched if you can pair every
opening bracket up with a later closing bracket, and vice versa. For
example, "(()())" is correctly matched, and "(()" and ")(" are
not.Implement a function which takes a string of brackets and returns
the minimum number of brackets you'd have to add to the string to make
it correctly matched.For example, "(()" could be correctly matched by
adding a single closing bracket at the end, so you'd return 1. ")("
can be correctly matched by adding an opening bracket at the start and
a closing bracket at the end, so you'd return 2.If your string is
already correctly matched, you can just return 0. Language:

function bracket_match($bracket_string) {
	$stack = array ();
	$ress = 0;
	for ($j=0; $j < strlen ($bracket_string); $j++) {
		$c = $bracket_string[$j];
		if (  $c=='(' ) {
			$stack[] = $c;
		} elseif (  $c==')' ) {
			$x = array_pop($stack);
			if ( $x!=='(' ) {
				$ress++;
			}
		}
	}
	return ($ress+count ($stack));
}

Test Input	Expected Result	Result	Log
"(()())"	0	-	
"((())"	1	-	
"())"	1	-	
Add a test case
