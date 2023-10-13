<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$c_temp = trim (fgets($handle));
$c = explode(" ",$c_temp);
array_walk($c,'intval');

$j = 0;
$count = 0;
while ($j <$n-1) {
if (  (($j+2)>=$n) OR ($c [$j+2]) ) {
   $j++;
}  else {
  $j += 2;
}
 $count++;
}
echo "$count\n"; 

?>
