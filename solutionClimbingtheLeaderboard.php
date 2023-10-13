<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$scores_temp = fgets($handle);
$scores = explode(" ",trim ($scores_temp));
array_walk($scores,'intval');
fscanf($handle,"%d",$m);
$alice_temp = fgets($handle);
$alice = explode(" ",trim($alice_temp));
array_walk($alice,'intval');


$I_m = $m-1;
$alice_scores =array ();

$rank = 1;
$pred = $scores[0] ;

for ($I_n = 0; $I_n < $n ;  $I_n++) {
if ($pred > $scores[$I_n]) {
$rank++;
$pred = $scores[$I_n] ;
}
while ( $alice[$I_m] >= $scores[$I_n] and $I_m>=0 ) {
$alice_scores[] = $rank;
//echo "* ". $alice[$I_m]." ". $rank."\n";
$I_m--;
}

//echo $scores[$I_n]. " ". $rank."\n";
}

while ( $I_m>=0 ) {
$alice_scores[] = $rank+1;
//echo "* ". $alice[$I_m]." ". ($rank+1)."\n";
$I_m--;
}


for ( $I = count ($alice_scores)-1; $I >= 0; $I--) {
echo $alice_scores[$I]."\n";
}





?>