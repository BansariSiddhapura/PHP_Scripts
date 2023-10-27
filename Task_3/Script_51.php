<?php
$a=array("red","green","pink");
echo "elements of an array<br/>";
print_r($a);
array_push($a,"black","white");
echo "<br/>After adding values<br/>";
print_r($a);

/*output:
elements of an array
Array ( [0] => red [1] => green [2] => pink )
After adding values
Array ( [0] => red [1] => green [2] => pink [3] => black [4] => white )
*/
?>