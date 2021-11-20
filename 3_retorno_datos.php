<head>
    <title>Retorno de datos</title>
</head>
<?php


class retornoDatos
{
    public function retornaString($edad)
    {
        if ($edad > 18) {
            return "Es mayor de edad";
        } else {
            return "Es menor de edad";
        }
    }
    public function retornaEntero($valor)
    {
        if ($valor > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    public function retornaArreglo($ciclos)
    {
        $datos = array();
        for ($i = 0; $i <= $ciclos; $i++) {
            $datos[$i] = $i;
        }
        return $datos;
    }
    public function retornaJSON()
    {
        $arreglo = array(
            "hdd" => 500,
            "pantalla" => 32,
            "ram" => 16
        );
        return json_encode($arreglo);
    }
}

$cadena = new retornoDatos;

var_dump($cadena->retornaString(24));

var_dump($cadena->retornaEntero(1));

var_dump($cadena->retornaArreglo(10));

var_dump(($cadena->retornaJSON()));
