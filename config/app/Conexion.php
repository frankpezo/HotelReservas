<?php

//1. Creamos la clase que nos permitirá conectarnos a la base de datos
class Conexion{
  //1.1. Atributos
   private $conect;
   //1.2. Constructor 
   public function __construct(){
    //1.2.1. Creamo la conexión aquí
     $pdo = "mysql:host=". HOST."; dbname=".DATABASE. ";". CHARSET;
     //Capturamos las excepciones
     try{
         $this->conect  = new PDO($pdo, USER, PASS);
         $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo 'Conectado';
     }catch(PDOException $e){
       echo 'ERROR: '. $e->getMessage();
     }
   }

   //1.3. Conexión de tipo public 
   public function conectar(){
    return $this->conect;
   }


}



?>