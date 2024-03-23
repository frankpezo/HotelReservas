<?php
//1. Creamos la clase que se hará de hacer la conexión 
//   entre el controlador y el modelo
class Controller{
    //1.1. 
    protected $model;
   //
   public function __construct(){
     $this->cargarModel();
   }
    //1.2. Comprobar si nos encontramos el url Admin
     public function cargarModel(){
        $isAdmin = strpos($_SERVER['REQUEST_URI'], '/'. ADMIN) !== false;
        $nombremodel = get_class($this) . 'Model';
        $ruta = ($isAdmin) ? 'models/admin/' . $nombremodel. '.php' : 'models/principal/' .  $nombremodel. '.php';
        //1.2.1 Comprobamos si existe
        if(file_exists($ruta)){
             require_once $ruta;
             $this->model = new $nombremodel;
        }else{

        }
     }
}



?>