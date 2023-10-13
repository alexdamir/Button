<?php

$handle = fopen ("php://stdin", "r");
function migratoryBirds($n, $ar) {
	$Counts = array(0,0,0,0,0,0);
	for ($i=0; $i < count($ar) ; $i++) { 
		$Counts[$ar[$i]]++;
	}

	$Result = 0;
	$id = 0;
	foreach ($Counts as $key => $value) {
		if ($Result < $value) {
			$Result = $value;
			$id = $key;
		}
	}
	return $id;
}

fscanf($handle, "%i",$n);
$ar_temp = fgets($handle);
$ar = explode(" ",$ar_temp);
$ar = array_map('intval', $ar);
$result = migratoryBirds($n, $ar);
echo $result . "\n";

?>
