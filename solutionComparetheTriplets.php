<?php

$handle = fopen ("php://stdin", "r");
function solve($a, $b){
    $Alice = 0;
    $Bob =0;
    for ($i = 0; $i < 3; $i++) {
        if ($a[$i] > $b[$i]) {
            $Alice++;
        } elseif ($a[$i] < $b[$i]) {
            $Bob++;
        }
    }
    return array($Alice, $Bob);
    
}

fscanf($handle, "%d %d %d", $a[0], $a[1], $a[2]);
fscanf($handle, "%d %d %d", $b[0], $b[1], $b[2]);
$result = solve($a, $b);
echo implode(" ", $result)."\n";



?>
