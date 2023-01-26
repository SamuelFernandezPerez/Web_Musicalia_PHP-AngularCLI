<?php
session_start();
$jsonInfo = json_decode(file_get_contents("php://input"));


for($i = 0; $i<count($_SESSION["carrito"]); $i++){
    if($_SESSION["carrito"][$i][0] == $jsonInfo->id){
        $_producto_en_carrito =true;
        $_SESSION["carrito"][$i][1] = $jsonInfo->cantidad;
    }
}

echo json_encode("ok");