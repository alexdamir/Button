<?php

$handle = fopen ("php://stdin", "r");
function solve($grades){
	for ($i=0; $i < count($grades); $i++) { 
		$rem = $grades[$i] % 5;
		if ( ($grades[$i] >= 38) && $rem ) {
			$nextgrade = ( intdiv( $grades[$i], 5 ) + 1 ) * 5;
			if ( ($nextgrade - $grades[$i]) < 3 ) {
				$grades[$i] = $nextgrade;
			}
		}
	}
	return $grades;
}

fscanf($handle, "%d",$n);
$grades = array();
for($grades_i = 0; $grades_i < $n; $grades_i++){
   fscanf($handle,"%d",$grades[]);
}
$result = solve($grades);
echo implode("\n", $result)."\n";



?>
