<?php
$ang1 = $_GET["inputAng1"];
$ang2 = $_GET["inputAng2"];
$ang3 = $_GET["inputAng3"];

if ($ang1 == "" && $ang2 == "" && $ang3 == ""){
    echo "";
} elseif (($ang1+$ang2+$ang3) == 180 ) {
    if ($ang1 == $ang2 && $ang2 == $ang3) {
        echo "es un triangulo equilatero";
    } elseif ($ang1 == $ang2 || $ang1 == $ang3 || $ang2 == $ang3) {
        echo "es un triangulo isosceles";
    } else {
        echo "es un triangulo escaleno";
    } else {
        echo "no es un triangulo"
    }
    
}

?>