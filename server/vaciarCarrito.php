<?php
session_start();
session_destroy();
$_SESSION["carrito"] = array();
echo json_encode("ok");
