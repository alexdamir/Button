<?php

$handle = fopen ("php://stdin", "r");
fscanf($handle, "%d",$n);
$a_temp = trim(fgets($handle));
$a = explode(" ",$a_temp);
$a = array_map('intval', $a);

//print_r($a);

$numSwaps = 0;
for ($i = 0; $i < $n; $i++) {
    // Track number of elements swapped during a single array traversal
    $numberOfSwaps = 0;
    
    for ($j = 0; $j < $n - 1; $j++) {
        // Swap adjacent elements if they are in decreasing order
        if ($a[$j] > $a[$j + 1]) {
            $tmp = $a[$j]; 
            $a[$j] = $a[$j + 1];
            $a[$j + 1] = $tmp;
            $numberOfSwaps++;
            $numSwaps++;
        }
    }
    
    // If no elements were swapped during a traversal, array is sorted
    if ($numberOfSwaps == 0) {
        break;
    }
}
//print_r($a);
echo "Array is sorted in ",$numSwaps," swaps.\n";
echo "First Element: ",$a[0],"\n";
echo "Last Element: ",$a[ count($a)-1 ],"\n";


?>
