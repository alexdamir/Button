<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$n,$m);
$topic = array();
for($topic_i = 0; $topic_i < $n; $topic_i++) {
fscanf($handle,"%s",$topic[]);
}

$max = 0;
$count = 0;
for ($i=0; $i < $n; $i++) {
for ($j=$i+1; $j < $n; $j++) {
$c = count_topics ( $topic[$i], $topic[$j]);
if ( $max < $c) {
$max = $c;
$count = 1;
} else if ($max == $c ) {
$count++;
}
} 
}
echo $max,"\n"; 
echo $count,"\n"; 

function count_topics($s1, $s2) {
$count = 0;
for ($j=0; $j < strlen ($s1); $j++) {
if ( ($s1[$j]=='1') or ($s2[$j]=='1') ) {
$count++;
} 
} 
return $count ;
}
?>
