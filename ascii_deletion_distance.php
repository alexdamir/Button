ascii_deletion_distance

The deletion distance between two strings is the minimum sum of ASCII
values of characters that you need to delete in the two strings in
order to have the same string. The deletion distance between "cat" and
"at" is 99, because you can just delete the first character of cat and
the ASCII value of 'c' is 99. The deletion distance between "cat" and
"bat" is 98 + 99, because you need to delete the first character of
both words. Of course, the deletion distance between two strings can't
be greater than the sum of their total ASCII values, because you can
always just delete both of the strings entirely. Implement an
efficient function to find the deletion distance between two strings.
You can refer to the Wikipedia article on the algorithm for edit
distance if you want to. The algorithm there is not quite the same as
the algorithm required here, but it's similar.

print ascii_deletion_distance("at", "cat")."\n";
print ascii_deletion_distance("boat", "got")."\n";
print ascii_deletion_distance("thought", "sloughs")."\n";
print ascii_deletion_distance("krysakoshka","koshka" )."\n";

function ascii_deletion_distance($str1, $str2) {
$n1=0;
$n2=0;
$result=0;
while ( $n1 < strlen ($str1) OR $n2 < strlen ($str2)  )
{
	if (  $str1[ $n1] == $str2[$n2] ) {
      $n1++;
      $n2++;
  } elseif ( ($n1+1 < strlen ($str1)) AND ($str1[ $n1+1] == $str2[$n2] ) ) {
  		$result += ord ( $str1[ $n1] ) ;
  		$n1++;
  } elseif ( ($n2+1 < strlen ($str2)) AND ($str1[ $n1] == $str2[$n2+1] ) ) {
  	$result += ord ( $str2[ $n2] ) ;
  	$n2++;
  } elseif ( (strlen($str1)- $n1) == (strlen($str2)- $n2) ) {
     	$result += ord ( $str1[ $n1] ) + ord ( $str2[ $n2] );
      $n1++;
      $n2++;
  } elseif ( (strlen($str1)- $n1) > (strlen($str2)- $n2) ) {
     	$result += ord ( $str1[ $n1] ) ;
      $n1++;
  } else {
     	$result += ord ( $str2[ $n2] ) ;
      $n2++;
  }

}
return $result;    

}

Test Input	Expected Result	Result	Log
"at", "cat"	99	-	
"boat", "got"	298	-	
"thought", "sloughs"	674	-	
"krysakoshka","koshka" 554?



