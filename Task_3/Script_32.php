<?php
$a1=array(1,2,3,4,5);
$a2=array('hyy','hello');
$merge=array_merge($a1,$a2);
print_r($merge);

/*output:
Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => hyy [6] => hello )
*/
?>