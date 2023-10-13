<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
for($a0 = 0; $a0 < $t; $a0++){
fscanf($handle,"%d",$n);

$H = 1;
for($j = 0; $j < $n; $j++){
if ($j % 2 == 0) {
$H *= 2;
} else {
$H++;
}
}
echo $H."\n";
}

?>
