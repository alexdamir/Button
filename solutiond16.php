<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%s",$S);

try {
    $n = (int)$S;
} catch (Exception $e) {
    $n = "Bad String";
}
echo "$n\n";
?>