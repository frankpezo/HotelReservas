<?php
//1. Creamos clase
class PrincipalModel extends Conexion{
    //1.1. Variable y constructor para ver si la conexión funcionó
    private $con;
    //
    public function __construct(){
       $this->con = new Conexion();
    }


    //
    public function getPrueba(){
        //1.1.1. Realizamos la conexión
        $data = $this->con->conectar();
        return $data;
        //return  'Mensaje desde el modelo';
    }
}



?>