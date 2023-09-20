<?php
/*Script_7: Write a PHP script to swap the values of two variables $x and $y using a temporary
variable. Display the swapped values using the echo statement.*/

$x='10';
$y='20';
echo "Before swapping <br>";
echo "x=$x \t";
echo "y=$y";
$z=$x;
$x=$y;
$y=$z;
echo "<br>";
echo "After Swapping <br>";
echo "x=$x \t";
echo "y=$y";
?>