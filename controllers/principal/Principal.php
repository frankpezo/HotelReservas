<?php

class Principal extends Controller{
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
     $data['title'] = "Página principal";
     //2. Realizamos una consulta a la bd para 
     // traer el Slider
     $data['sliders'] = $this->model->getSliders();
    /*  print_r($data);
     exit; */

     $this->views->getView("index",  $data);
    }

    
}


?>