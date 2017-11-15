<?php 


$a = [5, 6, 10, 15];
$b = [8, 5, 3, 25];
$i = 0;
$s = count($a);
$s1 = count($b);
$skirtumas = 0;
$skirtumas1 = 0;
$skirtumas2 = 0;


for ($i ; $i<$s ; $i++ )
{
    $skirtumas =  $skirtumas - $a[$i];


}


echo "Skirtumas: ",$skirtumas;

$i = 0;



for ($i ; $i<$s1 ; $i++ )
{
    $skirtumas1 =  $skirtumas1 - $b[$i];
}

echo " Skirtumas: ",$skirtumas1, " ";
echo " Vidurkis=  ", average($a), " ";
echo " Vidurkis=  ", average1($b), " ";

$skirtumas2 = average($a) - average($b);


echo " Vidurkiu skirtumas=  ", $skirtumas2, " ";


function average($a) {
    return array_sum($a) / count($a);
   }


   function average1($b) {
    return array_sum($b) / count($b);
   }


?>