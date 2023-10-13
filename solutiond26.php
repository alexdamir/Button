<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d %d",$d1,$m1,$y1);
fscanf($handle,"%d %d %d",$d2,$m2,$y2);

if ( sprintf('%04d-%02d-%02d', $y1,$m1,$d1)  <= sprintf('%04d-%02d-%02d', $y2,$m2,$d2)) {
$fine = 0;
} else if ( $m1==$m2 AND $y1==$y2) {
$fine = ($d1-$d2)*15;
} else if ($y1==$y2) {
$fine = ($m1-$m2)*500;
} else  {
$fine = 10000;
}
echo "$fine\n";
?>
