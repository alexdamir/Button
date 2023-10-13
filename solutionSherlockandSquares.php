<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);

for($a0 = 0; $a0 < $t; $a0++){
fscanf($handle,"%d %d",$a, $b);
$count = floor ( sqrt ($b)) - ceil ( sqrt ($a))+1;
echo $count,"\n";

}

?>
