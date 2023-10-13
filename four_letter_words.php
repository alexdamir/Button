four_letter_words

Write a function which takes a sentence and returns the number of four
letter words it contains. Don't worry about handling punctuation.
Language:

function four_letter_words($sentence) {
	$res = 0;
	$count = 0;
	for ($j=0; $j < strlen ($sentence); $j++) {
		if ( ctype_alpha ($sentence[$j]) ) {
			$count++;  
		} else {
			if ($count==4) {
				$res++;
			}
			$count = 0;
		}
	}
	if ($count==4) {
		$res++;
	}
	return $res;
}

Test Input	Expected Result	Result	Log
"This sentence is fine"	2	-	
"So is this one"	1	-	
"Hello"	0	-	
Add a test case

