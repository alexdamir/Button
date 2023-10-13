<?php

$handle = fopen ("php://stdin", "r");
function surfaceArea($A) {
  $res=0;
  $n = count($A);
  for ($i=0; $i < $n ; $i++) {
    $m = count($A[$i]);
    for ($j=0; $j < $m ; $j++) {
      //top bottom 
       $res +=2;
      //left
       if ( $j == 0 ) {
         $res += $A[$i][$j] ;
       }  else if  ($A[$i][$j-1] < $A[$i][$j]) {
         $res += $A[$i][$j] - $A[$i][$j-1];
       }
      //right
        if ( $j == ($m-1) ) {
 $res+=$A[$i][$j];
       }  else if ($A[$i][$j+1] < $A[$i][$j]) {
         $res += $A[$i][$j] - $A[$i][$j+1];
       }
      //front
       if ( $i == ($n-1)) {
         $res += $A[$i][$j] ;
       } else if ($A[$i+1][$j] < $A[$i][$j] ) {
         $res += $A[$i][$j] - $A[$i+1][$j];
       }
      //back
       if ( $i == 0) {
         $res += $A[$i][$j] ;
       } else if ($A[$i-1][$j] < $A[$i][$j] ) {
         $res += $A[$i][$j] - $A[$i-1][$j];
       }
    }
  }
  return  $res;
}

fscanf($handle, "%i %i", $H, $W);
$A = array();
for($A_i = 0; $A_i < $H; $A_i++) {
   $A_temp = fgets($handle);
   $A[] = explode(" ",$A_temp);
   $A[$A_i] = array_map('intval', $A[$A_i]);
}
$result = surfaceArea($A);
echo $result . "\n";

?>