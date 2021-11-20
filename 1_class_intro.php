<head>
    <title>Clases</title>
</head>
<?php

class miClase
{
    public $atributo = 'hey';

    public function  miMetodo()
    {
        return $this->atributo;
    }
}

$obj = new miClase;
echo $obj->miMetodo();
