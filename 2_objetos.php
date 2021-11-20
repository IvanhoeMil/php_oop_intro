<head>
    <title>Objetos</title>
</head>
<?php

class miClase{
    public $resultado;

    public function miMetodo($x,$y)
    {
        $this->resultado=$x+$y;
        return $this->resultado;
    }
}


$objeto = new miClase();

echo $objeto->miMetodo(3,7);