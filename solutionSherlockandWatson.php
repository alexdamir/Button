<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d %d",$n,$k,$q);
$a_temp = fgets($handle);
$a = explode(" ",trim($a_temp));
$a = array_map('intval', $a);
$k = $k % $n;
for($a0 = 0; $a0 < $q; $a0++){
fscanf($handle,"%d",$m);
$j = $m + $n - $k;
if ($j >= $n ) {
$j -= $n;
}
echo $a [$j]. "\n";
}

?>
