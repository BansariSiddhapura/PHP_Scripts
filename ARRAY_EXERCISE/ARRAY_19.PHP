19. Sort the cities in alphabetical order.

<?php
$cities=array('PANJIM','JAIPUR','BENGALURU','CHENNAI');
echo"<br/> before sorting<br/>";
print_r($cities);
echo"<br/>";
sort($cities);
echo"after sorting<br/>";
print_r($cities);
?>