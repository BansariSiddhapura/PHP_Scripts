11. Create two arrays, one with fruits and another with vegetables, Merge them into a single array.

<?php
$fruit=array('apple','pineapple','mango');
echo "<br/>";
print_r($fruit);
echo"<br/>";
$veggi=array('garlic','tomatos','lemon');
print_r($veggi);
echo"<br/>";
echo"mergging both array ";
print_r(array_merge($fruit,$veggi));
?>