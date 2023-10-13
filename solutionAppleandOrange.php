<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$s,$t);
fscanf($handle,"%d %d",$a,$b);
fscanf($handle,"%d %d",$m,$n);
$apple_temp = fgets($handle);
$apple = explode(" ",$apple_temp);
array_walk($apple,'intval');
$orange_temp = fgets($handle);
$orange = explode(" ",$orange_temp);
array_walk($orange,'intval');

$apples_count = 0;
$oranges_count = 0;

for ($i=0; $i < count($apple) ; $i++) { 
	$pos = $a + $apple[$i];
	if ( ( $pos >= $s ) && ( $pos <= $t )   ) {
		$apples_count++;
	}
}

for ($j=0; $j < count($orange) ; $j++) { 
	$pos = $b + $orange[$j];
	if ( ( $pos >= $s ) && ( $pos <= $t )   ) {
		$oranges_count++;
	}
}

echo "$apples_count\n$oranges_count\n";

?>
