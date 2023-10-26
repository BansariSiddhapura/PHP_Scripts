20. Reverse the order of the cities in the array from question 19.

<?php
$cities=array('PANJIM','JAIPUR','BENGALURU','CHENNAI');
echo"<br/>before reverse sorting<br/>";
print_r($cities);
echo"<br/>";
rsort($cities);
echo"after reverse sorting<br/>";
print_r($cities);
?>