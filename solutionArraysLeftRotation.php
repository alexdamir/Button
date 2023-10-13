<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$n,$k);
$a_temp = trim (fgets($handle));
$a = explode(" ",$a_temp);
array_walk($a,'intval');
$rot = $k % $n;
for ($i=0; $i < $n; $i++) {
$j = $i+$rot;
if ($j>=$n ) {
$j -= $n;
}
echo $a [$j]," "; 
} 
echo "\n"; 

?>
