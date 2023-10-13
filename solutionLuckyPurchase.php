<?php

$handle = fopen ("php://stdin", "r");
fscanf($handle, "%i",$n);
$best_name = -1;
$best_price = 0;
for($a0 = 0; $a0 < $n; $a0++){
  fscanf($handle, "%s %i", $name, $price);
  if ( meet($price) ) {
    if (! $best_price OR ($best_price  > $price ) ) {
      $best_name = $name;
      $best_price = $price;
    } 
  } 
}
echo $best_name,"\n"; 

function meet($n) {
$s = trim((string) $n);
$a=array(0,0,0,0,0,0,0,0,0,0 );
for ($j=0; $j < strlen ($s); $j++) {
  $a[ $s[$j] ]++;
}
return ( ($a[4] == $a[7] ) AND !( $a[0]+$a[1]+$a[2]+$a[3]+$a[5]+$a[6]+$a[8]+$a[9]) );
}
?>