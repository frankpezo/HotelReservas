<?php

//1. Creamos la clase view
class Views{
    //1.1. Una función 
    public function getView($vista, $data=""){
       require  'views/'.$vista. '.php';
       
    }
    
}




?>