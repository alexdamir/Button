<?php

$handle = fopen ("php://stdin", "r");

function anagram($s){
	$length = intdiv(strlen($s), 2);
	$s1 = substr($s, 0, $length);
	if ( strlen($s) % 2 ) {
		$count = -1;
		$s2 = substr($s, $length+1);
		$extra = substr($s, $length, 1);
	} else {
		$s2 = substr($s, $length);
		$extra = "";
	}
	//echo "/$s1/ /$s2/\n";
	$stat = array();
	for ($i=0; $i < $length ; $i++) { 
		$stat = add_stat($stat,$s1[$i],0);
		$stat = add_stat($stat,$s2[$i],1);
	}
	$count = $length;
	foreach ($stat as $key => $value) {
		$count -= min( (int)$value[0], (int)$value[1] ) ;
	}
	if ($extra) {
		// $c1 = abs( ((int)$stat[$extra][0]+1) - (int)$stat[$extra][1] );
		// $c2 = abs( (int)$stat[$extra][0] - ((int)$stat[$extra][1]+1) );
		// $count += min($c1,$c2);
		$count = -1;
	}
	return $count;
}

function add_stat($stat, $ch, $num)
{
	if ( !isset( $stat[ $ch ] )) {
		$stat[ $ch ] = array(0,0);
	}
	if (isset( $stat[ $ch ][$num] )) {
		$stat[ $ch ][$num]++;
	} else {
		$stat[ $ch ][$num] = 1;
	}
	return $stat;
}

fscanf($handle, "%i",$q);
for($a0 = 0; $a0 < $q; $a0++){
    fscanf($handle, "%s",$s);
    $result = anagram($s);
    echo $result . "\n";
}

?>
