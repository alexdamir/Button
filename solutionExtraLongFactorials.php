<?php

$handle = fopen ("php://stdin","r");
$n = trim ( fgets ($handle));
printf("%s\n", bigfactorial($n));


function bigfactorial($n) {
if (bccomp($n,"1")<=0) {
	$res = "1";
} else {
	$res = bcmul($n, bigfactorial(bcsub($n,"1")));
}
return $res;
}

?>
