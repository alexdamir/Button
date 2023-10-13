<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$q);
for($a0 = 0; $a0 < $q; $a0++){
    fscanf($handle,"%d %d %d",$x,$y,$z);

    $CatA = abs( $x-$z);
    $CatB = abs( $y-$z);

    if (  $CatA < $CatB ) {
    	echo "Cat A\n";
    } elseif ($CatA > $CatB) {
    	echo "Cat B\n";
    } else {
    	echo "Mouse C\n";
    }
    
}

?>
