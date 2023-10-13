<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$a_temp = trim (fgets($handle));
$a = explode(" ",$a_temp);
array_walk($a,'intval');

sort ($a);
//echo count ($a),"\n";
$this_count = 0;
$max = 0;
$curr=$a[0];
for ($j=0; $j < $n; $j++) {
//echo "$a[$j]\n";
if ( $curr==$a[$j] ) {
$this_count++;
} else {
//echo "$curr:$this_count\n";
$curr=$a[$j];
if ( $max < $this_count ) {
$max = $this_count;
}
$this_count = 1;
}
} 
if ( $max < $this_count ) {
$max = $this_count;
}
//echo "$curr:$this_count\n";
$count = $n - $max;
echo "$count\n";
?>
