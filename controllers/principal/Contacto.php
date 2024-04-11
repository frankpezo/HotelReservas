<?php

class Contacto extends Controller{
    //1. Constuctor para cargar la herencia
    public function __construct(){
        parent::__construct(); //Porque este constructor es el que tiene el model Controller
    }

    function index(){
      /*   //1.1. Método del constructor
       $data =  $this->model->getPrueba();
        // echo $data; 
        //Enviamos el valor especial
     $data = strClean('    <script> hola');
    /*    $data = slugify("Hola a todo el mundo");
     print_r($data); */ 
     $data['title'] = "Contacto";
     $data['subtitle'] = "Contáctenos";
     $this->views->getView("principal/Contactos/index",  $data);
    }

    
}


?>