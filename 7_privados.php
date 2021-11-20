<head>
    <title>Metodos privados</title>
</head>
<?php
//Metodo privado: solo se puede acceder desde la misma clase donde fue creado
//no puede mostrarse afuera de la clase o en instancia
//debe manejarse desde otro metodo de la misma clase.
class clase1
{
    private static function saludar()
    {
        return "saludando";
    }
    public static function mandarSaludo()
    {
        return self::saludar();
    }
}

echo clase1::mandarSaludo();
 