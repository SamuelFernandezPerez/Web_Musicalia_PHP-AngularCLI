<?php
//esto hay que cambiarlo si lo subimos al host
require("../librerias_php/setup_red_bean.php");
echo json_encode(R::getRow("select * from cds where id = ? ",[$_GET["id"]]));