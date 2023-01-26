<script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<?php
require "../librerias_php/setup_red_bean.php";
$sql = "select p.id, c.titulo, c.artista, c.duracion, c.canciones, c.precio, c.productora,
p.nombre, p.direccion, p.cp, p.provincia, p.telefono, p.email, p.tarjeta, p.ip, p.useragent,
 cdp.cantidad
from cds as c, pedidos as p, cdpedido as cdp
where p.id = cdp.id_pedido and
c.id = cdp.id_cd
order by p.id desc
";
$pedidos = R::getAll($sql);
require("gestionar_pedidos_html.php");