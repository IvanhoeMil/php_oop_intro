<?php
require_once('conexion.php');
require_once('metodos.php');
$obj = new MetodosBD();


$conn = new conexion();
$conexion = $conn->conectar();

$id_auto = $_GET['id_auto'];
$queryAuto = "SELECT placas, costo, id_estatus FROM autos where id_auto = $id_auto";
$result = mysqli_query($conexion, $queryAuto);
$detallesAuto = mysqli_fetch_row($result);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>

<body>
    <form action="actualizar.php" method="post" enctype="multipart/form-data">
        <input type="text" hidden value="<?php echo $id_auto; ?>" name="id_auto" />

        <label>Ingresa las placas del auto</label>
        <input type="text" name="placas" id="placas" value="<?php echo $detallesAuto[0]; ?>">
        <br>

        <label>Ingresa el valor del auto $</label>
        <input type="number" name="valor" id="valor" min="1" step="any" value="<?php echo $detallesAuto[1]; ?>" />MXN
        <br>



        <button type="submit" name="submit">Editar</button>

    </form>
</body>

</html>