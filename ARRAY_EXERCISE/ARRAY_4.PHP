4. Check if the color "Green" exists in the array from question 1.

<?php
$color= array('black', 'white','red','pitch');

if (in_array("Green", $color))
  {
  echo "<br/> color founded";
  }
else
  {
  echo "<br/> color not founded";
  }
?>