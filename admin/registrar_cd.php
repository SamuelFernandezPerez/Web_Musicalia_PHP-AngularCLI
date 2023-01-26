<?php
require_once "../librerias_php/setup_red_bean.php";
$cd = R::dispense("cds");
$cd->titulo = $_POST["titulo"];
$cd->artista = $_POST["artista"];
$cd->precio = $_POST["precio"];
$cd->duracion = $_POST["duracion"];
$cd->canciones = $_POST["canciones"];
$cd->productora = $_POST["productora"];
$id_generada = R::store($cd);

move_uploaded_file($_FILES["portada"]["tmp_name"],"../server/imagenes/$id_generada.jpg");

include("registro_ok.php");