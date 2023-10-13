<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);

for($a0 = 0; $a0 < $t; $a0++){
fscanf($handle,"%d",$n);
if (is_prime($n)) {
    echo "Prime\n";
} else {
    echo "Not prime\n";
}
}

function is_prime($n)
{
    if ($n > 1) {
        $prime = true;
    }
    for ($i=2; $i*$i <=  $n; $i++) { 
        if ( ($n % $i) == 0 ) {
            $prime = false;
            break;
        }
    }
    return $prime;
}

?>
