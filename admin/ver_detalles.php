

<?php

require_once "../librerias_php/setup_red_bean.php";

$id_pedido = $_GET["id_pedido"];

$pedido = R::findOne('pedidos',' id = ? ', [$id_pedido]);

//obtener la informacino de los productos del pedido:

$sql = " select c.titulo as titulo, c.artista, c.precio, pp.cantidad 
from cds as c, cdpedido as pp 
where c.id = pp.id_cd  and pp.id_pedido = ? 
order by pp.id asc ";

$productos = R::getAll($sql,[$id_pedido]);

require "ver_detalles_html.php";


