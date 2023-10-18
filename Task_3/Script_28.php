<?php
$myarray=array(10,5,15,2,20,30);
$sort=sort($myarray);
$count=count($myarray);
for ($i=0; $i <$count ; $i++) { 
	echo $myarray[$i]."<br/>";
}

/*Output:

2
5
10
15
20
30

*/
?>