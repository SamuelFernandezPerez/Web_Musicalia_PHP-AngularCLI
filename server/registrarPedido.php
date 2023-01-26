<?php
session_start();
require("../librerias_php/setup_red_bean.php");
$jsonInfo = json_decode(file_get_contents("php://input"));
$pedido = R::dispense("pedidos");
$pedido -> nombre = $jsonInfo->nombre;
$pedido -> direccion = htmlentities($jsonInfo->direccion);
$pedido -> cp = $jsonInfo->cp;
$pedido -> provincia = $jsonInfo->provincia;
$pedido -> telefono = $jsonInfo->telefono;
$pedido -> email = $jsonInfo->email;

if(preg_match("/^[0-9]{0,30}$/",$jsonInfo->tarjeta)){
    $pedido -> tarjeta = $jsonInfo->tarjeta;
}else{
    $pedido -> tarjeta = "tarjeta no valida";
}



$ip = "";
if(!empty($_SERVER["HTTP_CLIENT_IP"])){
    $ip = $_SERVER["HTTP_CLIENT_IP"];
}else if(!empty($_SERVER["REMOTE_ADDR"])){
    $ip = $_SERVER["REMOTE_ADDR"];
}
$pedido->ip = $ip;
$pedido->useragent = $_SERVER["HTTP_USER_AGENT"];

$id_generado_pedido = R::store($pedido);
foreach($_SESSION["carrito"] as $pc){
    $cd_pedido = R::dispense("cdpedido");
    $cd_pedido->id_pedido = $id_generado_pedido;
    $cd_pedido->id_cd = $pc[0];
    $cd_pedido->cantidad = $pc[1];
    R::store($cd_pedido);

}
$_SESSION["carrito"] = array();
echo json_encode("ok");