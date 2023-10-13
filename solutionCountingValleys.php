<?php

$handle = fopen ("php://stdin", "r");
fscanf($handle,"%d",$n);
fscanf($handle,"%s",$s);

$Count = 0;

$level = 0;

$begin_valley = 0;

for ($i=0; $i < strlen($s) ; $i++) { 

	if ( $s[$i] == "U" ) {
		$level++;
		if ($begin_valley AND $level == 0 ) {
			$Count++;
			$begin_valley = 0;
		}
	} else {
		if ( $level == 0 ) {
			$begin_valley = 1;
		}
		$level--;
	}
	
}


echo $Count . "\n";

?>
