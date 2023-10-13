<?php
class Calculator{
 
function power($n,$p)  
{ 
if ( $n>=0 AND $p>=0 ) {
try { 
$res = pow($n,$p);
}
catch(Exception $e) {$res=0;}
return $res;
} else {
throw new Exception('n and p should be non-negative');
}
}

}
//----------------------------------------------------
$myCalculator=new Calculator();
$T=intval(fgets(STDIN));
while($T-->0){
    list($n, $p)  = explode(" ", trim(fgets(STDIN)));
    try{
        $ans=$myCalculator->power($n,$p);
        echo $ans."\n";
    }
    catch(Exception $e){
        echo $e->getMessage()."\n";
    }
}
?>