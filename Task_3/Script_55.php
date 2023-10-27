<?php
$array = ['1' => 'watermalon', '2' => 'mengo', '3' => 'apple','4'=>'pineapple'];

$firstKey = array_key_first($array);

print_r($firstKey);

$lastkey=array_key_last($array);

echo"</br>";
print_r($lastkey);

/*output:
1
4
*/
?>