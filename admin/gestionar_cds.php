
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script><?php
require_once "../librerias_php/setup_red_bean.php";

if( isset($_GET["id_borrar"])){
    $id_borrar = $_GET["id_borrar"];
    $sql = "delete from cds where id = :id";
    R::exec($sql,[':id' => $id_borrar]);

}

$cds = R::getAll("select * from cds");

require "gestionar_cds_html.php";


