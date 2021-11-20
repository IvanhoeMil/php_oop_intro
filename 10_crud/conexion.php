<?php
class conexion
{
    private $server = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "grupoVGI_autos";

    public function conectar()
    {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->database);
        //$conn = mysqli_connect(self::$server, self::$user, self::$password, self::$database);
        return $conn;
    }
}

$obj = new conexion();
if (!$obj->conectar()) {
    echo 'Error. No se pudo establecer conexión con la base de datos' . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno();
    echo $obj->conectar();
}

//var_dump($obj->conectar());
