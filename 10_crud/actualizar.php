<?php
require_once('conexion.php');
require_once('metodos.php');

$placas = $_POST['placas'];
$valor = $_POST['valor'];
$id_auto = $_POST['id_auto'];

$datosAuto = array(
    $placas,
    $valor,
    $id_auto
);

/* echo "_MODELO:", $modelo, "_PLACAS:", $placas, "_MOTOR:", $motor, "_COLOR:", $color, "_COMPRA:", $compra;
echo "_VALOR:", $valor . "_ESTATUS:", $estatus . "_USUARIO:", $usuario, "AGENCIA:", $agencia . "<br><br>"; */


$obj = new MetodosBD();
if ($obj->actualiza($datosAuto) == 1) {
    header('location: index.php');
} else {
    echo $obj->actualiza($datosAuto);
}
