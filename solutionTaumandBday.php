<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle,"%ld %ld",$b,$w);
    fscanf($handle,"%ld %ld %ld",$x,$y,$z);

if ( ($x+$z)<$y) {
$sum = $x*$b + ($x+$z)*$w;
} else if ( ($y+$z)<$x) {
$sum = $y*$w + ($y+$z)*$b;
} else  {
$sum=$b*$x + $w*$y;
} 
echo "$sum\n"; 
}

?>
