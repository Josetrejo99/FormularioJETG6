<?php


include 'Dinosaurios.php';
echo "Probando Herencia<br>";

$tiranosaurio=new Tiranosaurio(20000,"cien");

echo"El Tiranosaurio tiene ".$tiranosaurio->Estatura_Dino(100)." Metros de estatura";







?>