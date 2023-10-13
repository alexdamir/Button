<?php

$handle = fopen ("php://stdin", "r");
function kangaroo($x1, $v1, $x2, $v2) {
  if ( ( (($x2 > $x1) AND ($v1 > $v2) ) OR ( ($x2 < $x1) AND ($v1 < $v2) )) AND 
  				(( abs($x2-$x1)% abs($v1-$v2)) == 0 )
				) {
  	$res = "YES";
  } else {
  	$res = "NO";
  }
  return $res;
}

fscanf($handle, "%i %i %i %i", $x1, $v1, $x2, $v2);
$result = kangaroo($x1, $v1, $x2, $v2);
echo $result . "\n";

?>
