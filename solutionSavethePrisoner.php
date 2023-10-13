<?php

$handle = fopen ("php://stdin", "r");
function saveThePrisoner($n, $m, $s){

$q = $m % $n;
if ($q == 0){
$q= $n;
}
$q = $q + $s - 1;
if ($q > $n ) {
$q -= $n;
}

return $q;
}

fscanf($handle, "%d",$t);
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle, "%d %d %d", $n, $m, $s);
    $result = saveThePrisoner($n, $m, $s);
    echo $result . "\n";
}

?>