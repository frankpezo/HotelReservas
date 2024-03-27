<?php

//1. Creamos la clase donde irán las consultas
class Query extends Conexion{
      //1.1. Variable y constructor para ver si la conexión funcionó
    private $con;
    private $pdo;

     //1.2. Constructor que contiene la conexión
     public function __construct(){
        $this->con = new Conexion();
        $this->pdo = $this->con->conectar();
     }



    //2. Creamos las funciones que trendrán las consultas
    //2.1. Recuperar un solo registro
    public function select($sql){
      //Hacemos la consulta
     $result= $this->pdo->prepare($sql);
     $result->execute();
     return $result->fetch(PDO::FETCH_ASSOC);
    }
    //2.2. Recuperar todos los registros
    public function selectAll($sql){
        //Hacemos la consulta
        $result =$this->pdo->prepare($sql);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC); //fetchAll porque recuperaremos todo
      }
      //2.3. Registrar
      public function insert($sql, $array){
         //
         $result = $this->pdo->prepare($sql);
         $data=$result->execute($array);
         if($data){
            $res = $this->pdo->lastInsertId();
         }else{
            $res =0;
         }
         return $res;
      }
      //2.4. MOdificar o eliminar
      public function save($sql, $array){
        //
        $result = $this->pdo->prepare($sql);
        $data=$result->execute($array);
        if($data){
           $res = 1;
        }else{
           $res =0;
        }
        return $res;
     }
}




?>