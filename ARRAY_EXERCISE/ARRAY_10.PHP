10. Sort the array from question 9 in reverse alphabetical order.

<?php
$al=array('B','A','V','K','D','C','Z','X','W');
echo"<br/>before reverse sort<br/>";
print_r($al);
echo"<br/>";
rsort($al);
echo"after reverse sorting<br/>";
print_r($al);
?>