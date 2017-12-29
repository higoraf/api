<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
include_once '../config/database.php';
 
include_once '../class/usuarios.php';
 
$database = new Database();
$db = $database->getConnection();
 
$usuario = new Usuarios($db);
 

$usuario->name = $_GET['name'];
$usuario->description = $_GET['description'];
$usuario->created = date('Y-m-d H:i:s');
 
if($usuario->create()){
    echo '{';
        echo 'Usuário inserido';
    echo '}';
}
 
else{
    echo '{';
        echo 'Erro ao inserir usuario';
    echo '}';
}
?>