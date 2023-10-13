<?php

$handle = fopen ("php://stdin", "r");
function tripleRecursion($n, $m, $k) {
$a = array ();
for ($i=0; $i < $n ; $i++) {
  for ($j=0; $j < $n ; $j++) {
    if ( $i==0 and $j==0 ) {
      $a[$i][$j] = $m;
    } else if ( $i==$j) {
      $a[$i][$j] = $a[$i-1][$j-1] + $k;
    } else if ( $i > $j) {
      $a[$i][$j] = $a[$i-1][$j] -1;
    } else if ( $i < $j) {
      $a[$i][$j] = $a[$i][$j-1] -1;
    }
    echo $a[$i][$j]," "; 
  } 
  echo "\n"; 
} 

}

fscanf($handle, "%i %i %i", $n, $m, $k);
tripleRecursion($n, $m, $k);

?>
