<?php

$t = 5;
echo $t,"\n";

$n=3;
$k=3;
$s = "-2 0 1"; //yes
echo "$n $k\n$s\n";

$n=4;
$k=2;
$s = "-1 0 1 3"; //no
echo "$n $k\n$s\n";

$n=5;
$k=4;
$s = "-1 0 1 3 2"; //yes
echo "$n $k\n$s\n";

$n=6;
$k=4;
$s = "-2 0 -1 0 1 2"; //no
echo "$n $k\n$s\n";

$n=7;
$k=6;
$s = "-2 0 -1 0 1 2 2"; //yes
echo "$n $k\n$s\n";


?>
