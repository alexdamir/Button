<?php

$handle = fopen ("php://stdin", "r");
function solve($n, $p){
	return min( intdiv($p, 2), intdiv($n, 2)-intdiv($p, 2) );
}

fscanf($handle,"%d",$n);
fscanf($handle,"%d",$p);
$result = solve($n, $p);
echo $result . "\n";

?>
