<?php

$handle = fopen ("php://stdin", "r");
function matrixLand($A) {
$sum = 0;
$from=0; 
$to = count($A[0])-1;
for ($j=0; $j < count($A) ; $j++) {
list ($s1, $from1, $to1) = maxSubArraySum($A[$j], 0, $to);
list ($s2, $from2, $to2) = maxSubArraySum($A[$j], $from,count($A[$j])  );
if ( $s1 > $s2) {
  $s = $s1;
  $from = $from1;
  $to = $to1;
} else {
  $s = $s2;
  $from = $from2;
  $to = $to2;
}
$sum += $s;
} 
return $sum;
}

function maxCrossingSum($arr, $l, $m, $h)
{
    $sum = 0;
    $left_sum = PHP_INT_MIN;
    for ($i = $m; $i >= $l; $i--)
    {
        $sum += $arr[$i];
        if ($sum > $left_sum)
          $left_sum = $sum;
    }
    $sum = 0;
    $right_sum = PHP_INT_MIN;
    for ($i = $m+1; $i <= $h; $i++)
    {
        $sum += $arr[$i];
        if ($sum > $right_sum)
          $right_sum = $sum;
    }
    return $left_sum + $right_sum;
}
 
function maxSubArraySum($arr, $l, $h)
{
   if ($l == $h) {
     return array ($arr[$l], $l, $l) ;
 }
   $m = intdiv (($l + $h), 2);

list ($max1, $x1, $x2) = maxSubArraySum($arr, $l, $m);
list ($max2, $x1, $x2) = maxSubArraySum($arr, $m+1, $h);
$max3 = maxCrossingSum($arr, $l, $m, $h);
$max = max ($max1, $max2, $max3);
if ( $max == $max1) {
$from=$l;
$to = $m;
} else if ($max == $max2 ) {
$from=$m+1;
$to=$h;
} else if ( $max == $max3) {
$from=$l;
$to=$h;
}
return array ($max, $from, $to);
}






fscanf($handle, "%i %i", $n, $m);
$A = array();
for($A_i = 0; $A_i < $n; $A_i++) {
   $A_temp = fgets($handle);
   $A[] = explode(" ",$A_temp);
   $A[$A_i] = array_map('intval', $A[$A_i]);
}
$result = matrixLand($A);
echo $result . "\n";

?>
