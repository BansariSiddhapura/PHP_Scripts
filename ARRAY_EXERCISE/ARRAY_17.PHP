17. Add a new city to your travel list from question 16.

<?php
$cities=array('PANJIM','JAIPUR','BENGALURU','CHENNAI');
echo"<br/>before adding city<br/>";
print_r($cities);
echo"<br/>";
array_push($cities,'RAJKOT');
echo"after adding city<br/>";
print_r($cities);
?>