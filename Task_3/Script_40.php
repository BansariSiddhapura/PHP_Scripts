<?php
$a1=array("1"=>"mengo","2"=>"pineapple","3"=>"apple","4"=>"orange","5"=>"strawbeery");
$a2=array("1"=>"banana","2"=>"watermalon");
array_splice($a1,1,3,$a2);
print_r($a1);

/*output:
Array ( [0] => mengo [1] => banana [2] => watermalon [3] => strawbeery )
*/
?>