<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$n,$k);
$height_temp = fgets($handle);
$height = explode(" ",trim($height_temp));
array_walk($height,'intval');

$mb = 0;

for ($j = 0; $j < $n; $j++) {
if ( $mb < $height[$j] - $k ) {
$mb = $height[$j] - $k;
}
}

echo $mb."\n";
?>
