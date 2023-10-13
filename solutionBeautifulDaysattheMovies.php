<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d %d",$i,$j,$k);


$bd = 0;
for($d = $i; $d <= $j; $d++){
if ( ( abs($d-rev ($d))%$k )==0 ) {
$bd++;
}
}

echo $bd."\n";


function rev($num) {
$r_num = 0;
while ($num > 0) {
$r_num = $r_num*10 + $num%10;
$num = intdiv ($num,10);
}
return $r_num;
}

?>