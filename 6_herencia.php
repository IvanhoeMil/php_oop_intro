<head>
    <title>Herencia de clases</title>
    hola
</head>
<?php
class clasePadre
{
    static public function funcionPadre()
    {
        return "Retorno del padre<br>";
    }
    static public function funcion1()
    {
        return "Esta es la funcion padre<br>";
    }
}

class claseHijo extends clasePadre
{
    public function funcionHijo()
    {
        return self::funcion1();
        //return parent::funcion1();    //Instanciar funcion del padre

    }
    static public function funcion1()
    {
        return "Esta es la funcion hijo";
    }
}


$objHeredado = new claseHijo();

echo $objHeredado->funcionPadre();

echo $objHeredado->funcionHijo();


//Imprimir instancia rapida del padre
echo clasePadre::funcion1();

//Imprimir instancia rapida o de doble puntuacion con herencia de metodo:
echo claseHijo::funcionPadre();
