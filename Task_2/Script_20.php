<?php
/*Script_20 Script to find the factorial of a given number and display the result.*/
$num=5;
$fact=1;
for($i=$num;$i>=1;$i--)
{
	$fact=$fact * $i;
}
echo "Factorial of $num is:$fact";
?>