<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
for($a0 = 0; $a0 < $t; $a0++){
$nS = trim(fgets($handle));
$n = (int) $nS;
$count = 0;
for ($j=0; $j < strlen ($nS); $j++) {
$digit = (int)$nS[$j];
if ( $digit and !( $n % $digit)) {
$count++;
}
}
echo $count,"\n";
}

?>
