14. Remove the email element from the associative array and display the updated array.

<?php
$details=array("name"=>'Bansari',"age"=>20,"email"=>'bansariii@gmailcom');
echo" <br/>Before deleting the email= ";
print_r($details);
echo"<br/>After deleting the email= ";
array_pop($details);
print_r($details);

?>