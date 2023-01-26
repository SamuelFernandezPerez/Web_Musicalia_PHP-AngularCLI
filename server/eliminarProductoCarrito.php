<?php
session_start();
$jsonInfo = json_decode(file_get_contents("php://input"));

if( ! isset($_SESSION["carrito"]) ){
    echo json_encode("error no hay carrito en sesion");
}

for($i = 0; $i<count($_SESSION["carrito"]); $i++){
    if($_SESSION["carrito"][$i][0] == $jsonInfo->idProducto){
        unset($_SESSION["carrito"][$i]);
        $_SESSION["carrito"] = array_values($_SESSION["carrito"]);
        if(count($_SESSION["carrito"]) == 0){
            $_SESSION["carrito"] = array();
            echo json_encode("vacio");
            exit();
        }
    }
}

echo json_encode("ok");