9. Sort an array of words in alphabetical order.

<?php
$al=array('B','A','V','K','D','C','Z','X','W');
echo"<br/> before sort<br/>";
print_r($al);
echo"<br/>";
sort($al);
echo"after sorting<br/>";
print_r($al);
?>