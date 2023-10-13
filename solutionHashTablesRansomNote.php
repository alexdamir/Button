<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$m,$n);
$magazine_temp = trim(fgets($handle));
$magazine = explode(" ",$magazine_temp);
$ransom_temp = trim(fgets($handle));
$ransom = explode(" ",$ransom_temp);

$ahash = array();
foreach ($magazine as $key => $value) {
	if (!$value) {
		//nothing
	} elseif ( isset($ahash[$value])) {
		$ahash[$value]++;
	} else {
		$ahash[$value] = 1;
	}
}

$res = "Yes";
foreach ($ransom as $key => $value) {
	if (isset($ahash[$value]) AND $ahash[$value] ) {
		$ahash[$value]--;	
	} else {
		$res = "No";
		break;
	}
}

echo "$res\n";


?>
