<?php

$handle = fopen ("php://stdin", "r");
fscanf($handle,"%d",$T);

for ($i=0; $i < $T; $i++) { 
	fscanf($handle,"%s",$S);
	$even = "";
	$odd = "";
	for ($j=0; $j < strlen($S); $j++) { 
		if ( $j % 2) {
			$odd .= $S[$j];
		} else {
			$even .= $S[$j];
		}
	}
	echo "$even $odd\n";
}


?>
