6. Use a loop to display each number in the array from question 5.

<?php
$nums=array(1,2,3,4,5,6,7,8,9,10);
echo "<br/>";
print_r("total numbers in above array =" .count($nums));
echo "<br/> those numbers are :-";
foreach( $nums as $number)
{
    echo "</br>";
    print_r($number);
    
}
?>