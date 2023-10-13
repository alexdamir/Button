<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$a = array();
for($a_i = 0; $a_i < $n; $a_i++) {
   $a_temp = fgets($handle);
   $a[] = explode(" ",$a_temp);
  array_walk($a[$a_i],'intval');
}
$PrimaryDiagomalSum = 0;
$SecondaryDiagomalSum = 0;
for($a_i = 0; $a_i < $n; $a_i++) {
	$PrimaryDiagomalSum += $a[$a_i][$a_i];
	$SecondaryDiagomalSum += $a[$a_i][$n-$a_i-1];
}

$Result = abs($PrimaryDiagomalSum - $SecondaryDiagomalSum );

echo "$Result\n";

?>
