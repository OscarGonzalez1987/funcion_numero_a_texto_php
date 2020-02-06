<?php
include 'algoritmo_saldo.php';

$saldo = 12345;
$texto = algoritmo_saldo($saldo);
echo $texto['decenas_mil'];
echo $texto['unidades_mil'];
echo $texto['mil'];
echo $texto['centenas'];
echo $texto['decenas'];
echo $texto['unidades'];
?>