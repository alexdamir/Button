<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$n,$k);
fscanf($handle,"%d %d",$rQueen,$cQueen);
for($a0 = 0; $a0 < $k; $a0++){
    fscanf($handle,"%d %d",$rObstacle,$cObstacle);
    // your code goes here
}

?>