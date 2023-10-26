<?php
$a=array(1,2,3,4,5,6,7);
echo "elements of an array";
print_r($a);
echo "<br/>after slicing ";
print_r(array_slice($a,1,4));

/*output:
elements of an arrayArray ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7)
after slicing Array ( [0] => 2 [1] => 3 [2] => 4 [3] => 5 )

*/
?>