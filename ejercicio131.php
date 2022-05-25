<?php

$importe = $_GET["inputImp"];
$unidades = $_GET["inputUni"];
$tipo = $_GET["inputTipo"];

if ($tipo == "L" || $tipo == "l") {
    echo "Tipo L"  . "<br>";
    if ($unidades <= 24) {
        echo "Importe total a pagar: " . $importe * 0.8 . "<br>";
        echo "Descuento: " . $importe * 0.20  . "<br>";
    } else {
        echo "Importe total a pagar: " . $importe * 0.75 . "<br>";
        echo "Descuento: " . $importe * 0.25  . "<br>";
    }
    
} elseif ($tipo == "P" || $tipo == "p") {
    echo "Tipo P" . "<br>";
    if ($unidades < 6) {
        echo "importe total a pagar: " . $importe . "<br>";
    } elseif ($unidades > 6 && $unidades < 18) {
        echo "importe total a pagar: " . $importe * 0.95 . "<br>";
        echo "Descuento: " . $importe * 0.05  . "<br>";
    } else {
        echo "importe total a pagar: " . $importe * 0.9 . "<br>";
        echo "Descuento: " . $importe * 0.10  . "<br>";
    }
} else {
    echo "No ingreso un tipo de usuario valido" . "<br>";
}









    
