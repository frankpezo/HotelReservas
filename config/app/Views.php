<?php

//1. Creamos la clase view
class Views{
    //1.1. Una función 
    public function getView($ruta, $vista, $data=""){
        if($ruta == 'principal'){
             $vista = 'views/'.$vista. '.php';
        }else{
            $vista = 'views/'.$ruta.'/'. $vista . '.php';
        }
        require $vista;
    }
    
}




?>