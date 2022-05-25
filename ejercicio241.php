<?php

$lad1 = $_GET["inputLado1"];
$lad2 = $_GET["inputLado2"];

$per = ($lad1*2)+($lad2*2);
$sup = ($lad1*2)*($lad2*2);

echo "El perimetro es: " . $per . "<br>";
echo "La superficie es: " . $sup . "<br>";

if ( $lad1 == $lad2 ) {

    echo "Es un Cuadrado" . "<br>";
    } else {
    echo "No es un cuadrado" . "<br>";
        }

?>












    
