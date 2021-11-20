<?php
require_once('conexion.php');
require_once('metodos.php');

$modelo = $_POST['modelo'];
$placas = $_POST['placas'];
$motor = $_POST['motor'];
$color = $_POST['color'];
$compra = $_POST['compra'];
$valor = $_POST['valor'];
$estatus = $_POST['estatus'];
$usuario = $_POST['usuario'];
$agencia = $_POST['agencia'];

$datosAuto = array(
    $modelo,
    $placas,
    $motor,
    $color,
    $compra,
    $valor,
    $estatus,
    $usuario,
    $agencia
);

/* echo "_MODELO:", $modelo, "_PLACAS:", $placas, "_MOTOR:", $motor, "_COLOR:", $color, "_COMPRA:", $compra;
echo "_VALOR:", $valor . "_ESTATUS:", $estatus . "_USUARIO:", $usuario, "AGENCIA:", $agencia . "<br><br>"; */


$obj = new MetodosBD();
//echo $obj->insertarAuto($datosAuto);

if ($obj->insertarAuto($datosAuto) == 1) {
    header('location: index.php');
} else {
    echo $obj->insertarAuto($datosAuto);
}
