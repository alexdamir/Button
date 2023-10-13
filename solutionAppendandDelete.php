<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%s",$s);
fscanf($handle,"%s",$t);
fscanf($handle,"%d",$k);
$Same = compare ( $s, $t );
$MinDel= strlen ($s)-$Same;
$MinAdd= strlen ($t)-$Same;
$Min = $MinDel + $MinAdd;
if ($Min == $k ) {
$result = "Yes";
} elseif ($Min > $k ) {
$result = "No";
} elseif ( $k >= (strlen ($s) + strlen ($t)) ) {
$result = "Yes";
} elseif ( (($k -$Min)%2) == 0 ) {
$result = "Yes";
} else {
$result = "No";
}
echo $result,  "\n";

function compare($s1, $s2) {
for ($j=0, $res=0; $j < strlen  ($s1) AND  $j < strlen  ($s2)  AND $s1[$j]==$s2[$j]; $j++) {
$res++;
}
return  $res;
}
?>