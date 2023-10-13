<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$lo = new SplMaxHeap();
$hi = new SplMinHeap();
for($a_i = 0; $a_i < $n; $a_i++){
  fscanf($handle,"%d",$x);

  if ( $lo->isEmpty()  OR $x <= $lo->top() ) {
    $lo->insert($x);
  } else {
    $hi->insert($x);
  }
  if ( $lo->count() > ($hi->count()+1) ) {
    $hi->insert( $lo->extract() );
  } else if ( $hi->count() > ($lo->count()+1) ) {
    $lo->insert( $hi->extract() );
  }
  if ( $lo->count() == $hi->count() ) {
    $med = ($lo->top() + $hi->top())/2;
  } else if ( $lo->count() > $hi->count() ) {
    $med = $lo->top();
  } else {
    $med = $hi->top();
  }
  printf ("%.1f\n", $med );
}


?>
