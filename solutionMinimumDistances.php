<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$A_temp = trim(fgets($handle));
$A = explode(" ",$A_temp);
array_walk($A,'intval');
$Min = 0;

$i=0;
while ($i < $n) {
$j=$i+1;
while ( ($j < $n)  ) {
if ( ($A[$i]==$A[$j])  and ((! $Min) or ($Min > abs($j-$i)))) {
$Min = abs($j-$i);
break;
} 
$j++;
}
$i++;
}

if ( $Min ) {
echo "$Min\n"; 
} else  {
echo "-1\n"; 
} 

?>
