<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$p_temp = fgets($handle);
$p = explode(" ",trim($p_temp));
$p = array_map('intval', $p);

$p_p = array();

for ($i=0; $i < $n ; $i++) { 
	$p_p[ $p[$i] ] = $i+1;	
}

for ($i=1; $i <= $n ; $i++) { 
	$y = $p_p[ $p_p[ $i ] ];
	echo $y. "\n";
}


?>
