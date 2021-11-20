<head>
    <title>Metodos protegidos</title>
</head>
<?php
//Los metodos protegidos  pueden ser accedidos desde herencias de clases 
//o solo desde clases hijas
//DEBE ser utilizado mediante metodo hijo desde una clase extendida
class ClasePadre
{
    protected function metodoProtegido()
    {
        return "metodo protegido";
    }
}

class ClaseHija extends clasePadre
{
    public function muestraProtegido()
    {
        return parent::metodoProtegido();
    }
}

$obj = new ClaseHija;
echo $obj->muestraProtegido();
