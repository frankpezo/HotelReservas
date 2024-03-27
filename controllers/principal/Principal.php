<?php

class Principal extends Controller{
    //1. Constuctor para cargar la herencia
    public function __construct(){
        parent::__construct(); //Porque este constructor es el que tiene el model Controller
    }

    function index(){
        //1.1. Método del constructor
       $data =  $this->model->getPrueba();
        // echo $data; 
     print_r($data);
     $this->views->getView("principal", 'index', $data);
    }

    
}


?>