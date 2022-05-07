<?php
$ang1 = $_GET["inputAng1"];
$ang2 = $_GET["inputAng2"];
$ang3 = $_GET["inputAng3"];

if (($ang1+$ang2+$ang3) == 180 ) {

    if ($ang1 > 90 || $ang2 > 90 || $ang3 > 90) {
        echo "Es un triangulo obtusangulo";
    } else if ($ang1 == 90 || $ang2 == 90 || $ang3 == 90) {
        echo "Es un triangulo rectangulo";
    } else {
        echo "Es un triangulo actangulo";
    }

} else {
    echo "No es un triangulo";
        }

?>












    
