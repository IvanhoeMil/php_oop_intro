<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <form action="procesa.php" method="post">
        <label>Valor1</label>
        <input type="text" name="val1">
        <label>Valor 2</label>
        <input type="text" name="val2">
        <select name="opcion">
            <option>Suma</option>
            <option>Resta</option>
            <option>Multiplicacion</option>
            <option>Division</option>
        </select>
        <button type="submit">Calcular</button>
    </form>
</body>

</html>