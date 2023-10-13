<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%s",$s);
fscanf($handle,"%ld",$n);

$lens = strlen ($s);
$can = intdiv ($n, $lens);
$remains = $n % $lens;
$rem_count=0;
$count = 0;


for ($j=0; $j < $lens; $j++) {
if ( $s[$j]=='a') {
$count++;
} 
if ( $j == ($remains-1)) {
$rem_count = $count;
} 
} 
$result = $count * $can + $rem_count ;
echo "$result\n"; 

?>