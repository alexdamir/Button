<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);

for ($i=1; $i <=10 ; $i++) { 
	printf("%d x %d = %d\n", $n, $i, $n*$i)
}

?>