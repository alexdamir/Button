<?php

$handle = fopen ("php://stdin", "r");
fscanf($handle, "%d",$n);

$result = 0;
$count=0;
while ( $n > 0 ) {
	//printf("%d %b ",$n, $n);
	if( $n % 2 ) {
		//echo "+ \n";
		$count++;	
	} else {
		//echo "\n=".$count . "\n";
		if ($result < $count) {
			$result = $count;
			//echo "($result)\n";
		}
  	$count=0;
	}
	$n = intdiv($n, 2);
}
if ($result < $count) {
	$result = $count;
	//echo "($result)\n";
}


echo $result . "\n";

?>
