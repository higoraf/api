<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
include_once '../config/database.php';
include_once '../class/usuarios.php';
 
$database = new Database();
$db = $database->getConnection();
 
$usuario = new Usuarios($db);
 
$stmt = $usuario->read();
 
    $usuarios_arr=array();
    $usuarios_arr["records"]=array();
 
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
 
        $usuario_item=array(
            "id" => $id,
            "name" => $name,
            "description" => html_entity_decode($description),
            
        );
 
        array_push($usuarios_arr["records"], $usuario_item);
    }
 
    echo json_encode($usuarios_arr);

?>