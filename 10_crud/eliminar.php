<?php
require_once('conexion.php');
require_once('metodos.php');

$conn = new conexion();
$conexion = $conn->conectar();

$id_auto = $_GET['id_auto'];

$obj = new MetodosBD();
if ($obj->elimina($id_auto)==1) {
    header('location: index.php');
} else {
    echo $obj->elimina($id_auto);
}
