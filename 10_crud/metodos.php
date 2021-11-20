<?php

class MetodosBD
{
    public function mostrar($sql)
    {
        $obj = new conexion();
        $conexion = $obj->conectar();
        $result = mysqli_query($conexion, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function insertarAuto($datosAuto)
    {
        $obj = new conexion();
        $conexion = $obj->conectar();
        $insertAuto = "INSERT INTO autos(id_modelo,placas, numero_motor, color, fecha_compra, costo, id_estatus, id_usuario, id_agencia)
                        VALUES ($datosAuto[0], $datosAuto[1], $datosAuto[2], $datosAuto[3], '$datosAuto[4]',
                        $datosAuto[5], $datosAuto[6], $datosAuto[7], $datosAuto[8])";
        $result = mysqli_query($conexion, $insertAuto);
        return $result;
    }

    public function actualiza($datosAuto)
    {
        $obj = new conexion();
        $conexion = $obj->conectar();
        $updateAuto = "UPDATE autos set placas  = $datosAuto[0], costo = $datosAuto[1] WHERE id_auto = $datosAuto[2]";
        $result = mysqli_query($conexion, $updateAuto);
        return $result;
    }

    public function elimina($id_auto)
    {
        $obj = new conexion();
        $conexion = $obj->conectar();
        $eliminaAuto = "DELETE FROM autos WHERE id_auto=$id_auto";
        $result = mysqli_query($conexion, $eliminaAuto);
        return $result;
    }
}
/*$modelo,
    $placas,
    $motor,
    $valor,
    $estatus,*/