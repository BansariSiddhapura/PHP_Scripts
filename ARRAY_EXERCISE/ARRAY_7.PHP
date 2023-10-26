7. Remove the last number from the array created in question 5.

<?php
$nums=array(1,2,3,4,5,6,7,8,9,10);
echo "<br/>";
print_r("total numbers in above array =" .count($nums));
array_pop($nums);
echo"<br/>";
echo"numbers in the array after deleting the lastone : <br/>";
print_r($nums);
?>