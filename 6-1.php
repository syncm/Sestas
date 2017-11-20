<?php 


$a = [5, 6, 10, 15];
$b = [8, 5, 3, 25];
$i = 0;



$skirtumas = average($a) - average($b);


echo " Vidurkiu skirtumas=  ", $skirtumas, " ";


function average($a) {
    return array_sum($a) / count($a);
   }


?>