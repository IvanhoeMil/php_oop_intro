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
    <title>CRUD</title>
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

    <form action="procesar.php" method="post" enctype="multipart/form-data">

        <label>Ingresa las placas del auto</label>
        <input type="text" name="placas" id="placas">
        <br>

        <label>Ingresa el numero de motor</label>
        <input type="number" name="motor" id="motor" min="1" />
        <br>

        <label>Selecciona el color del auto</label>
        <select name="color" id="color">
            <?php
            $queryColor = "SELECT * FROM colores";
            $colores = $obj->mostrar($queryColor);
            foreach ($colores as $color) {
                echo "<option value=" . $color['id_color'] . " >" . $color['color'] . "</option>";
            } ?>
        </select>
        <br>

        <label>Ingresa la fecha de compra</label>
        <input type="date" name="compra" id="fecha" />
        <br>

        <label>Ingresa el valor del auto $</label>
        <input type="number" name="valor" id="valor" min="1" step="any" value="60000.00" />MXN
        <br>


        <label>Selecciona el modelo del auto</label>
        <select name="modelo" id="modelo">
            <?php
            $queryModelos = "SELECT * FROM autos_modelos";
            $modelos = $obj->mostrar($queryModelos);
            foreach ($modelos as $modelo) {
                echo "<option value=" . $modelo['id_modelo'] . ">" . $modelo['marca'] . " - " . $modelo['modelo'] . "</option>";
            }
            ?>
        </select>
        <br>

        <label>Selecciona el estatus del auto</label>
        <select name="estatus" id="estatus">
            <?php
            $queryEstatus = "SELECT * FROM autos_estatus";
            $estatus = $obj->mostrar($queryEstatus);
            foreach ($estatus as $estatus) {
                echo "<option value=" . $estatus['id_estatus'] . ">" . $estatus['estatus']  . "</option>";
            }
            ?>
        </select>
        <br>

        <label>Selecciona el usuario del auto:</label>
        <select name="usuario" id="usuario">
            <?php
            $queryUsuarios = "SELECT * FROM usuarios_autos";
            $usuarios = $obj->mostrar($queryUsuarios);
            foreach ($usuarios as $usuario) {
                echo "<option value=" . $usuario['id_usuario'] . " >" . $usuario['nombre'] . "</option>";
            }
            ?>
        </select>
        <br>

        <label>Selecciona la agencia del auto:</label>
        <select name="agencia" id="agencia">
            <?php
            $queryAgencias = "SELECT * FROM agencias";
            $agencias = $obj->mostrar($queryAgencias);
            foreach ($agencias as $agencia) {
                echo "<option value=" . $agencia['id_agencia'] . " >" . $agencia['nombre_agencia'] . "</option>";
            }
            ?>
        </select>
        <br>
        <button type="submit" name="submit">Registrar</button>
        <br>
        <br>
    </form>

    <table>
        <tr>
            <th>Placas</th>
            <th>Modelo</th>
            <th>Costo</th>
            <th>Estatus</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        </tr>

        <?php
        $queryAutos = "SELECT id_auto,placas, id_modelo, costo, id_estatus FROM autos";
        $autos =  $obj->mostrar($queryAutos);

        foreach ($autos as $auto) {
            echo "<tr>";
            echo "<td>" . $auto['placas'] . "</td>";
            echo "<td>" . $auto['id_modelo'] . "</td>";
            echo "<td>" . $auto['costo'] . "</td>";
            echo "<td>" . $auto['id_estatus'] . "</td>";
            echo "<td><a href='editar.php?id_auto=" . $auto['id_auto'] . "'>Editar</a></td>";
            echo "<td><a href='eliminar.php?id_auto=" . $auto['id_auto'] . "'>Eliminar</a></td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>