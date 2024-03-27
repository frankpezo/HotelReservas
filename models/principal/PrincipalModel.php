<?php
//1. Creamos clase
class PrincipalModel extends Query{
   
    //
    public function __construct(){
       parent::__construct();
    }


    //
    public function getPrueba(){
       //Llmamos los métodos
       return $this->select("SELECT * FROM usuarios WHERE idUser=1");
      
    }
}



?>