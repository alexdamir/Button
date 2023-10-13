<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$a = array();
for($a_i = 0; $a_i < $n; $a_i++){
fscanf($handle,"%d",$x);
$a = q_ins($a, $x);
// print_r($a);
$c = count( $a );
if ( $c % 2 ) {
$med = $a[ intdiv ($c ,2) ] ;
} else {
$med = ($a[ ($c/2)-1 ] + $a[ ($c /2) ] )/2;
}
printf ("%.1f\n", $med );
}


function q_ins($a, $x) {
// //search
// $j = 0;
// while ( ($j < count($a) ) and ($a[$j] <= $x) ) {
// $j++;
// }
//binary search
if (!count($a)) {
	$a[] = $x;
	return  $a;	
}
$lo = 0; $hi = count($a)-1;
while ($lo <= $hi) {
  $j = $lo + intdiv( ($hi-$lo+1), 2);
	//echo "lo:$lo hi:$hi j:$j\n";
  if (  $x == $a[$j] ) {
 		break;         
  } else if ( $x < $a[$j] ) {
  	$hi = $j-1;
  	if ( ($j==0) OR ($x >= $a[$j-1] )) {
  		break;
  	}
  } else {
    $lo = $j+1;
  	if ($j==(count($a)-1)) {
  		$j++;
  		break;
  	}
  	if ($x <= $a[$j+1] ) {
  		break;
  	}
  }
}
//inserting and copying the rest
if ( $j < count($a) ) {
$y=$a[$j];
$a[$j]=$x;
$j++;
$a[] = 0;
while ( $j < count($a)  ) {
$x=$y;
$y=$a[$j];
$a[$j]=$x;
$j++;
}
}  else {
$a[] = $x;
}
return  $a;
}
?>
