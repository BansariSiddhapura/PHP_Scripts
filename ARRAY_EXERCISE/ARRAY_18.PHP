18. Remove a city of your choice from the array and display the updated list.

<?php
$cities=array('PANJIM','JAIPUR','BENGALURU','CHENNAI');
echo" <br/>before deleting city<br/>";
print_r($cities);
echo"<br/>";
unset($cities[2]);
echo"after deleting city<br/>";
print_r($cities);
?>