<?php

$handle = fopen ("php://stdin", "r");

function isBalanced($s) {
$stack = array ();
for ($j=0; $j < strlen ($s); $j++) {
$c = $s[$j];
if (  $c=='(' OR $c=='{' OR $c=='[' ) {
$stack[] = $c;
} else  {
$x = array_pop($stack);
if ( ($c==')' AND $x!=='(' )
OR ($c=='}'  AND $x!=='{' )
OR ($c==']'  AND $x!=='[' ) ) {
return "NO";
break;
}
} 
}
if ( count ($stack)) {
$result = "NO";
} else {
$result = "YES";
}
return $result;
}

fscanf($handle, "%i",$t);
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle, "%s",$s);
    $result = isBalanced($s);
    echo $result . "\n";
}

?>
