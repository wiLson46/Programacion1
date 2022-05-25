<?php

$importe = $_GET["inputImp"];
$unidades = $_GET["inputUni"];
$tipo = $_GET["inputTipo"];

if ($tipo == "L"){
    echo "Tipo L";
} elseif ($tipo == "P") {
    echo "Tipo P";
} else {
    echo "No ingreso un tipo de usuario valido";
}









    
