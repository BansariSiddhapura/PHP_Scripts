<?php
$a=array(1,2,3,4,5,6,7,8,9);
echo "elements of an array : <br/>";
print_r($a);
echo "<br/>after remove element from the beginning :<br/> ";
array_shift($a);
print_r($a);
echo "<br/>add element at the beginning :<br/>";
array_unshift($a, 20);
print_r($a);

/*output:
elements of an array :
Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7 [7] => 8 [8] => 9 )
after remove element from the beginning :
Array ( [0] => 2 [1] => 3 [2] => 4 [3] => 5 [4] => 6 [5] => 7 [6] => 8 [7] => 9 )
add element at the beginning :
Array ( [0] => 20 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7 [7] => 8 [8] => 9 )
*/
?>