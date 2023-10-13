<?php
/* Head ends here */
//Test case #10 - 14 !!!
function pairs( $a,$k) {
$Count = 0;
for($i = 0; $i < count($a); $i++) {
for($j = $i+1; $j < count($a); $j++) {
if ( $i != $j ){
if (abs($a[$i]-$a[$j])==$k ) { $Count++;}
}
}
}
return $Count;
}
/* Tail starts here */
$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%d %d", $_a_cnt, $_k);
$_a = trim(fgets($__fp));

$_a = explode(' ',$_a);
$res = pairs($_a,$_k);
echo "$res\n";

?>
