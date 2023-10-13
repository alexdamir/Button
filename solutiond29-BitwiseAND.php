<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
for($a0 = 0; $a0 < $t; $a0++){
	fscanf($handle,"%d %d",$n,$k);
	$Max = 0;

	$i=$n;
	while ($i >= 3 ) {
		$j = $i - 1;
		while ( ( $j >=2 )  AND  ( $Max < ($j & $i) ) ) {
			if ( ($j & $i) < $k) {
				if ( $Max < ($j & $i) ) {
					$Max = ($j & $i);
				} 
			}
			//echo $j&$i,"  $j & $i\n";
			$j--;
		}
		$i--;
	}


	echo "$Max\n";
}

?>
