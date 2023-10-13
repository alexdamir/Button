<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$p);
fscanf($handle,"%d",$q);

$count = 0;
for($i = $p; $i <= $q; $i++) {
if (  is_kaprekar($i) ) {
echo "$i "; 
$count++;
} 
}

if ( $count) {
echo "\n"; 
} else {
echo "INVALID RANGE\n"; 
} 


function is_kaprekar($n)  {
$s=(string)($n*$n);
if ( strlen ($s)%2) {
$s="0". $s;
} 
$Le = strlen ($s)/2;
$n1 = (int)substr ($s, 0, $Le);
$n2 = (int)substr ($s, $Le);
return  (($n1+$n2)==$n and $n2);
}

?>
