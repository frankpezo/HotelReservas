<?php
//Manejo de rutas
//1. Requerimos el archivo config
require_once 'config/config.php';
//1.2. CAPTURAR RUTA ACTUAL
// Para saber en qué rutas estamos 
$currentPageUrl = $_SERVER['REQUEST_URI'];
echo $currentPageUrl . '</br>';
//VERFICAR SI EXISTE LA RUTA ADMIN
$isAdmin = strpos($currentPageUrl, '/'. ADMIN) !== false;
//echo $isAdmin;
//1.1. COMPROBAR SI EXISTE GET PARA CREAR URL AMIGABLES 
//Comprobamos si funciona la ruta
$ruta = empty($_GET['url']) ? 'principal/index': $_GET['url'];
    /* echo $ruta;
    echo RUTA_ADMIN;
    echo RUTA_PRINCIPAL */
//1.3. CREAR UN ARRAY A PARTIR DE LA RUTA 
$array = explode('/', $ruta);
//print_r($array);
//1.4. VALIDAR SI NOS ENCONTRAMOS EN LA RUTA ADMIN
if($isAdmin && (count($array) == 1 
|| (count($array)== 2 && empty($array[1])))
&& $array[0]==ADMIN){
   //1.4.1. Controlador
   $controller = "admin";
   $metodo = "login";
}else{
   $indiceUrl = ($isAdmin)  ? 1 : 0 ; 
   $controller  = ucfirst($array[$indiceUrl]);
   $metodo = "index";
}

echo "Nombe controlador: ". $controller . '<br>';

echo "Nombe método: ". $metodo;

?>