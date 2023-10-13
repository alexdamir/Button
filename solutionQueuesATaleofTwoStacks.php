<?php
$handle = fopen("php://stdin", "r");
$queue = array ();
fscanf($handle, "%i",$q);
for($a0 = 0; $a0 < $q; $a0++){
$arr = explode(" ", trim (fgets($handle)));
$t = $arr [0];
if ( $t==1) {
$queue [] = $arr [1];
} else if ( $t==2) {
array_shift($queue);
} else if ( $t==3 ) {
echo $queue[0],"\n"; 
}
}

?>