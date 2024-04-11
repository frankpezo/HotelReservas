<?php
//1. Creamos clase
class PrincipalModel extends Query{
   
    //
    public function __construct(){
       parent::__construct();
    }


    //
    public function getSliders(){
       //Llmamos los métodos
       return $this->selectAll("SELECT * FROM sliders ");
      
    }
}



?>