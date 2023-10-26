<?php
$items=array('pizza'=>'lapinoz','panipuri'=>'topla','burger'=>'burger compney','french fires'=>'size zero');
if(array_key_exists('burger', $items))
{
	echo "key is exists";
}
else
{
	echo "key does not exists";
}

/*output:
key is exists
*/
?>