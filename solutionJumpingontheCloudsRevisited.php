<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$n,$k);
$c_temp = fgets($handle);
$c = explode(" ", trim($c_temp));
array_walk($c,'intval');
$E = 100;
for ($i = $k; $i <= $n; $i += $k ) {
  if ( $c[$i % $n] ) {
      $E -= 3;
  }  else {
      $E -- ;
  } 
}
echo "$E\n";

?>
