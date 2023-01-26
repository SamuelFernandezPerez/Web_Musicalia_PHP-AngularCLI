<?php
require "../librerias_php/setup_red_bean.php";
$cd = R::findOne('cds', ' id = ? ', [$_GET["id_editar"]]);
if(! isset ($_POST["id_guardar_cambios"])){
    require "editar_cd_html.php";
}else{
    $cd_a_actualizar = R::dispense("cds");
    $cd_a_actualizar->id = $_POST["id_guardar_cambios"];
    $cd_a_actualizar->titulo = $_POST["titulo"];
    $cd_a_actualizar->artista = $_POST["artista"];
    $cd_a_actualizar->duracion = $_POST["duracion"];
    $cd_a_actualizar->canciones = $_POST["canciones"];
    $cd_a_actualizar->precio = $_POST["precio"];
    $cd_a_actualizar->productora = $_POST["productora"];
    R::store($cd_a_actualizar);
    require "gestionar_cds.php";

}
