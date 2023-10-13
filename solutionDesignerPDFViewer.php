<?php

$handle = fopen ("php://stdin","r");
$h_temp = fgets($handle);
$h = explode(" ",trim($h_temp));
array_walk($h,'intval');
fscanf($handle,"%s",$word);

$max = 0;
for ($j = 0; $j < strlen($word); $j++) {
$hi = $h[ ord( $word [$j] ) - ord('a') ] ;
if ( $max < $hi ) {
$max = $hi ;
}
}
$res = $max * strlen($word);
echo $res."\n";
?>
