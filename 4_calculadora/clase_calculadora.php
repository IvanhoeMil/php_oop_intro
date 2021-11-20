<?php

class calculadora
{
    public function calcularDatos($val1, $val2, $opcion)
    {   

        switch ($opcion) {
            case 'Suma':
                return $val1 + $val2;
                break;
            case 'Resta':
                return $val1 - $val2;
                break;
            case 'Multiplicacion';
                return $val1 * $val2;
                break;
            case 'Division';
                return $val1 / $val2;
                break;
        }
    }
}
