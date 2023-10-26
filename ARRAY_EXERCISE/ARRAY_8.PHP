8. Remove a specific number of your choice from the array and display the updated array.

<?php
$nums=array(1,2,3,4,5,6,7,8,9,10);
echo "<br/>";
print_r("total numbers in array =" .count($nums));
echo "<br/>";
print_r($nums);
unset($nums[2]);
echo"<br/>";
echo"numbers in the array after deleting the 2 index<br/>";
print_r($nums);
?>