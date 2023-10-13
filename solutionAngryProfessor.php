<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);

for($a0 = 0; $a0 < $t; $a0++){
fscanf($handle,"%d %d",$n,$k);
$a_temp = fgets($handle);
$a = explode(" ",trim ($a_temp));
array_walk($a,'intval');

$p = 0;
for($j = 0; $j < $n; $j++){
if ($a[$j] <= 0) {$p++;}
}

if ($p >= $k) {
echo "NO\n";
} else {
echo "YES\n";
}

}

?>
