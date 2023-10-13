<?php
    class Difference{
    private $elements=array();
    public $maximumDifference;
//--------------------------------------------------------------------------------------------------------

    function __construct($arr) {
        $this->elements = $arr;
    }
    

    function ComputeDifference() {
        $Max = 0;
        for ($i=0; $i < count($this->elements) ; $i++) { 
            for ($j=$i+1; $j < count($this->elements) ; $j++) { 
                $diff = abs( $this->elements[$i] - $this->elements[$j]);
                if ( $Max < $diff ) {
                    $Max = $diff;
                }
            }
        }
        $this->maximumDifference = $Max;
    }

//--------------------------------------------------------------------------------------------------------
} //End of Difference class  
     

$N=intval(fgets(STDIN));
$a =array_map('intval', explode(' ', fgets(STDIN)));
$d=new Difference($a);
$d->ComputeDifference();
print ($d->maximumDifference);
?>