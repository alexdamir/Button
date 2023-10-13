<?php

$handle = fopen ("php://stdin","r");

fscanf($handle,"%d",$n);

$PhoneBook = array();

for ($i=0; $i < $n ; $i++) { 
	fscanf($handle,"%s  %s",$Name, $Number);
	$PhoneBook[$Name] = $Number; 
}

while ( ($s = fgets($handle)) != false ) {
	$Name = trim($s);
	$Number=$PhoneBook[$Name];
	if ( $Number ) {
		echo "$Name=$Number\n";
	} else {
		echo "Not found\n";
	}
}

?>
