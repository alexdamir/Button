<?php

$handle = fopen ("php://stdin","r");
//$handle = fopen ("$DOCUMENT_ROOT/input01.txt","r");
fscanf($handle,"%d",$t);
for($a0 = 0; $a0 < $t; $a0++) {
fscanf($handle,"%s",$w);
$count = 0;

for ($i=strlen($w)-1; $i >=1 ; $i--) {
$big = $w[$i];
$small = $w[$i-1];
if ( $big > $small) {
//echo $big,"\n";
$newbig=$big;
$newsmall = $small;
$rest="";
for ($j=strlen($w)-1; $j > $i ; $j--) {
if ($w[$j]>$small and $newsmall!==$big) {
	$newbig=$w[$j];
	$rest .= $small;
	$newsmall = $big;
} else {
	$rest .= $w[$j];
}
}

$s=substr($w,0,$i-1).$newbig.$rest.$newsmall;
$count=1;
break;
} 
} 

if ($count ) {
echo "$s\n"; 
} else {
echo "no answer\n"; 
}
}

?>
