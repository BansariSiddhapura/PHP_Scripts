2. Add a new color to the array from question 1.

<?php
$color= array('black', 'white','red','pitch');
echo "<br/>";
echo "before adding color <br/>";
print_r($color);
array_push($color,'yellow');
echo "<br/>";
echo "after adding color <br/>";
print_r($color);
?>