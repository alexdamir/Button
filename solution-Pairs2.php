<?php
/* Head ends here */
//Wrong result
function pairs( $a,$k) {
$Count = 0;
sort ($a);
$i = 0;
$j = count($a) - 1;
while ($i < count($a)) {
    while($a[$j]-$a[$i]>$k && $j > 0) $j--;
    if ( $a[$j]-$a[$i]==$k ) { $Count++;};
    $i++;
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
