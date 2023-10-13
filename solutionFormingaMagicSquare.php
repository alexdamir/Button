<?php

//echo "zhoppa<br>";
//echo "<pre>"; print_r ( $Base );echo "</pre>"; 

$handle = fopen ("php://stdin", "r");
$s = array();
for($s_i = 0; $s_i < 3; $s_i++) {
   $s_temp = fgets($handle);
   $s[] = explode(" ",$s_temp);
   $s[$s_i] = array_map('intval', $s[$s_i]);
}

$Min = 9999;
$etalons = generate_squares ();
foreach ($etalons as $key => $square ) {
$sum = sum_diff_square($s, $square );
if ($Min > $sum) {
$Min = $sum;
}
//print_square($square);
//echo "---------<br>";
}

echo "$Min\n";



function generate_squares () {
$Base = array(
array(2,7,6),
array(9,5,1),
array(4,3,8) );
$res = array();
$a = $Base;
$res[] = $a;
$res[] = mirror_square($a);
for($I= 0;$I < 3;$I++) {
$a = rotate_square($a);
$res[] = $a;
$res[] = mirror_square($a);
}
return $res;
}

function sum_diff_square ($s1, $s2) {
$res = 0;
for($I= 0;$I < 3;$I++) {
for($J= 0;$J < 3;$J++) {
$res += abs ($s1[$I][$J] -  $s2[$I][$J]); 
}
}
return $res;
}

function rotate_square ($s) {
$res = array();
for($I= 0;$I < 3;$I++) {
for($J= 0;$J < 3;$J++) {
$res[$I][$J] = $s[2-$J][$I]; 
}
}
return $res;
}

function mirror_square ($s) {
$res = array();
for($I= 0;$I < 3;$I++) {
for($J= 0;$J < 3;$J++) {
$res[$I][$J] = $s[$J][$I]; 
}
}
return $res;
}

function print_square ($s, $eol='<br>') {
for($I= 0;$I < 3;$I++) {
for($J= 0;$J < 3;$J++) {
echo $s[$I][$J] . "  ";
}
echo $eol;
}
}


?>
