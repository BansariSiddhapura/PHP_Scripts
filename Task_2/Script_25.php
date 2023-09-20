<?php
/*Script_25 Script to swap 2 nos without using 3rd variable using arithmetic operators.*/
$num1 = 10;
$num2 = 20;
echo "Before swapping: num1=$num1 , num2=$num2 <br/>";
$num1 = $num1 + $num2;
$num2 = $num1 - $num2;
$num1 = $num1 - $num2;

echo "After swapping: num1=$num1, num2=$num2";
?>