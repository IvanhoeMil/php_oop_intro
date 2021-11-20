<?php
require_once('conexion.php');
require_once('metodos.php');
$obj = new MetodosBD();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar autos</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }

        table.center {
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Placas</th>
            <th>Modelo</th>
            <th>Costo</th>
            <th>Estatus</th>
            <th>Actualizar</th>
        </tr>

        <tr>
            <?php
            $queryAutos = "SELECT id_auto,placas, id_modelo, costo, id_estatus FROM autos";
            $autos =  $obj->mostrar($queryAutos);

            foreach ($autos as $auto) {
                echo "<td>" . $auto['placas'] . "</td>";
                echo "<td>" . $auto['id_modelo'] . "</td>";
                echo "<td>" . $auto['costo'] . "</td>";
                echo "<td>" . $auto['id_estatus'] . "</td>";
                echo "<td><a href='editar.php?id_auto=" . $auto['id_auto'] . "'>Editar</a></td>";
            }
            ?>
        </tr>

    </table>

</body>

</html>