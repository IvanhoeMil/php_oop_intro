<?php
require_once('clase_calculadora.php');

$calculadora = new calculadora();

$val1 = $_POST['val1'];
$val2 = $_POST['val2'];
$opcion = $_POST['opcion'];


echo $calculadora->calcularDatos($val1, $val2, $opcion);
