<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$arr_temp = trim (fgets($handle));
$arr = explode(" ",$arr_temp);
array_walk($arr,'intval');

rsort($arr);
$min = $arr[ count ($arr)-1 ];
$count = 2;
while ($count>0){
$count = 0;
$j=0;

while ( $arr [$j] ) {
$arr [$j] -= $min;
$count++;
if ( $arr [$j]) {
$nmin=$arr [$j];
} 
$j++;
}
$min = $nmin;
if ( $count) {
echo "$count\n"; 
} 
}

?>