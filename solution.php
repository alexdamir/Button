<?

$A = "203 204 205 206 207 208 203 204 205 206";
$B = "203 204 204 205 206 207 205 208 203 206 205 206 204";

$Numeros = array();

$number = strtok($A, " ");
while ($number !== false)
{
	$Numeros[$number]["A"]++; 
	$number = strtok(" ");
} 

number = strtok($B, " ");
while ($number !== false)
{
	$Numeros[$number]["B"]++; 
	$number = strtok(" ");
} 

echo "<pre>";print_r(	$Numeros	);echo "</pre>";

?>
