?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
array_walk($a,'intval');
sort ($a);
$Max = 0;
$Count = 0;
$predict = 7654;
for ($I = 0; $I < $n ;  $I++) {
if ( abs ($predict - $a [$I]) <= 1 ) {
$Count++;
} else {
if ($Max < $Count ) {
$Max = $Count ;
}
$Count = 1;
$predict = $a [$I] ;
}
}
if ($Max < $Count ) {
$Max = $Count ;
}
echo $Max . "\n";

?>
