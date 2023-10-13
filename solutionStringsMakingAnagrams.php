<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%s",$a);
fscanf($handle,"%s",$b);

$stat = array();

for ($i=0; $i < strlen($a); $i++) { 
	if (isset( $stat[ $a[$i] ] )) {
		if (isset( $stat[ $a[$i] ][0] )) {
			$stat[ $a[$i] ][0]++;
		} else {
			$stat[ $a[$i] ][0] = 1;
		}
	} else {
		$stat[ $a[$i] ] = array(1,0);
	}
}

for ($i=0; $i < strlen($b); $i++) { 
	if (isset( $stat[ $b[$i] ] )) {
		if (isset( $stat[ $b[$i] ][1] )) {
			$stat[ $b[$i] ][1]++;
		} else {
			$stat[ $b[$i] ][1] = 1;
		}
	} else {
		$stat[ $b[$i] ] = array(0,1);
	}
}

$count = 0;
foreach ($stat as $key => $value) {
	$count += abs( (int)$value[0] - (int)$value[1] ) ;
}

echo "$count\n";

?>
