<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);


$sum = 0;
$received = 5;
for($j = 0; $j < $n; $j++){
$liked = intdiv($received,2);
$sum += $liked;
$received = $liked * 3;
}

echo $sum."\n";

?>