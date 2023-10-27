<?php
$a1=array(1,2,3);
$a2=array(4,5,6,7);
echo "array after merging both array:<br/>";
$merge=array_merge($a1,$a2);
print_r($merge);

/*output:
array after merging both array:
Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7 )
*/
?>