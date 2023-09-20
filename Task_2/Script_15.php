<?php
/*Script_15: Write a PHP script to find the largest of three numbers*/
$a=10;
$b=15;
$c=25;
echo "a=$a <br/>";
echo "b=$b <br/>";
echo "c=$c <br/>";

if($a>$b)
{
	if($a>$c)
	{
		echo "First Number $a is largest";
	}
	
}
elseif($b>$c)
{
	echo "Second number $b is largest";
}
else
{
	echo "Third number $c is largest";
}
?>