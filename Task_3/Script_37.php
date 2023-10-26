<?php
$a=array(5,1);
echo "elements of an array : ";
print_r($a);
array_push($a, 10,8,12,20);
echo "<br/> elements after pushing multiple elements : ";
print_r($a);
array_pop($a);
echo "<br/> elements after single pop : ";
print_r($a);

/*output:
elements of an array : Array ( [0] => 5 [1] => 1 )
elements after pushing multiple elements : Array ( [0] => 5 [1] => 1 [2] => 10 [3] => 8 [4] => 12 [5] => 20 )
elements after single pop : Array ( [0] => 5 [1] => 1 [2] => 10 [3] => 8 [4] => 12 )
*/
?>