<?php
// Array representing a possible record set returned from a database
$records = array(array('id' => 1,'first_name' => 'Yashvi','last_name' => 'Viradiya',),
    array('id' => 2,'first_name' => 'Bansari','last_name' => 'Siddhapura',),
    array('id' => 3,'first_name' => 'Disha','last_name' => 'Harsoda',)
    
);
 
$first_names = array_column($records, 'last_name');
echo "retrive specific column <br/>";
print_r($first_names);

/*output:
retrive specific column
Array ( [0] => Viradiya [1] => Siddhapura [2] => Harsoda )
*/
?>