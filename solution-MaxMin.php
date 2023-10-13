l<?php

$_fp = fopen("php://stdin", "r");

$N = (int)(fgets($_fp));
$K = (int)(fgets ($_fp));

$ArrN = array ();
for ($I = 0;  $I < $N; $I++ ){
$ArrN[] = (int)(fgets ($_fp));
}
sort ( $ArrN , SORT_NUMERIC);

$Min = -1;
for($I= 0;$I < $N-$K+1;$I++)
{
$M = ( $ArrN[$I+$K-1]-$ArrN[$I] );
if ($Min==-1 || $Min > $M )
{
$Min = $M;
}
}

echo "$Min\n";

?>
