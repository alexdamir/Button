<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$n, $d);
$a_temp = trim (fgets($handle));
$a = explode(" ",$a_temp);
array_walk($a,'intval');

$count = 0;
$i=0;
while ($i <$n) {
$j=$i+1;
while ( ($j <$n) and (($a[$j]-$a[$i])<$d) ) {
$j++;
}
if ( ($j <$n) and (($a[$j]-$a[$i])==$d) ) {
//---
$k=$j+1;
while ( ($k <$n) and (($a[$k]-$a[$j])<$d) ) {
$k++;
}
if  ( ($k <$n) and (($a[$k]-$a[$j])==$d) )
 {
$count++;
}
$j++;
//---
}
$i++;
}

echo "$count\n";

?>
