<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$n, $k);
$arr_temp = trim (fgets($handle));
$arr = explode(" ",$arr_temp);
array_walk($arr,'intval');

$count = 0;
for ($j=0; $j <  $n; $j++) {
for ($p=$j+1; $p < $n; $p++) {
lf (  ($arr[$j] + $arr[$p] ) % $k) {
$count++;
} 
} 
} 
echo "$count\n"; 



?>