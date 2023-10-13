<?php

$handle = fopen ("php://stdin", "r");

function getRecord($s){
	
	$HighCount = 0 ; 
	$LowCount = 0;
	$High = -1 ; 
	$Low = -1;
	
	for ($i=0; $i < count($s) ; $i++) { 
		if ($High == -1) {
			$High = $s[$i] ;
		}
		if ($Low == -1) {
			$Low = $s[$i] ;
		}
		if ( $High < $s[$i] ) {
			$High = $s[$i] ;
			$HighCount++;
		}
		if ( $Low > $s[$i] ) {
			$Low = $s[$i] ;
			$LowCount++;
		}
	}
	
	return array( $HighCount, $LowCount );
}

fscanf($handle,"%d",$n);
$s_temp = fgets($handle);
$s = explode(" ",$s_temp);
$s = array_map('intval', $s);
$result = getRecord($s);
echo implode(" ", $result)."\n";

?>
