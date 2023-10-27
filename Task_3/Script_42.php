<?php

$array1 = array(2,4,5,6,8,10,12,20,30);
$array2 = array(1, 2, 3, 4, 5, 6,7);

$result=array_diff($array1,$array2);

print_r($result);

/*output:
Array ( [4] => 8 [5] => 10 [6] => 12 [7] => 20 [8] => 30 )
*/


?>