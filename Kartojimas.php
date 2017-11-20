<?php 



function kartojimas()

{

$a = array(5, 6 ,10 ,15);
$b = array(8, 5 ,3 ,25);

$s = $a[0] * $b[0] + $a[1] * $b[1] + $a[2] * $b[2] + $a[3] * $b[3];


return $s;
}

echo kartojimas(); 


?>