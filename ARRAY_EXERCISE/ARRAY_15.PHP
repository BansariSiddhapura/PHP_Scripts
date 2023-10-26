15. Create a multidimensional array to store information about movies, including title, director, and release year for at least two movies. Display the information for one of the movies.

<?php
$movies=array(
    array("title"=>'SATYAPREM KI KATHA',"director"=>'SAMEER SANJAY VIDWANS',"release_year"=>2023),
    array("title"=>'GADER 2',"director"=>'ANIL SHARMA',"release_year"=>2023),
);
echo "<br/>";
print_r($movies[1]);

?>