<head>
    <title>Self</title>
</head>
<?php

class metodos
{
    static function mandarColor($valor)
    {
        if ($valor === 0) {
            return 'negro';
        } else if ($valor === 1) {
            return 'blanco';
        } else {
            return 'otro color';
        }
    }

    public function darDeAltaColor($tipoColor)
    {
        /* $instanciaPrivada = new metodos();
        return $instanciaPrivada->mandarColor($tipoColor); */
        $self = self::mandarColor($tipoColor);
        return $self;
    }
}

$instanciaGlobal  = new metodos();
echo $instanciaGlobal->darDeAltaColor(0);
