<head>
    <title>Metodos estaticos</title>
</head>
<?php

class clase1
{
    public static $mensaje = "Hola";
    public static function metodo()
    {
        return self::$mensaje;
    }
}

echo clase1::metodo();