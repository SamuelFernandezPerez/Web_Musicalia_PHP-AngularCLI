<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musicalia</title>
</head>
<body class="bg-gradient-to-br from-teal-100 via-teal-300 to-teal-500">
    <?php include("menu.php"); ?>
    <div class="my-28 w-full text-center">
    <table class="min-w-max w-[80rem] m-auto table-auto shadow-xl p-10">
  		<thead>
   			 <tr class=" bg-[#0f766e] text-white uppercase text-sm leading-normal">
     			<th class="text-lg py-3 px-5 text-center">Nombre</th>
     			<th class="text-lg py-3 px-5 text-center">Direccion</th>
                 <th class="text-lg py-3 px-5 text-center">CP</th>
      			<th class="text-lg py-3 px-5 text-center">Provincia</th>
      			<th class="text-lg py-3 px-5 text-center">Telefono</th>
      			<th class="text-lg py-3 px-5 text-center">Email</th>
      			<!-- <th class="text-lg py-3 px-5 text-center">Estado</th> -->
      			<th class="text-lg py-3 px-5 text-center">Ver pedido</th>
    		</tr>
  		</thead>
        <tbody class="text-[#0f172a] text-sm font-light">
        <?php
        $idpedido = 0;
        $idpedido_anterior = 0;
        $items_per_page = 18;
        $total_items = count($pedidos);
        $total_pages = ceil($total_items / $items_per_page);
        $current_page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $offset = ($current_page - 1) * $items_per_page;
        $pedidos_paginated = array_slice($pedidos, $offset, $items_per_page);
        foreach($pedidos_paginated as $pedido){
            $idpedido = $pedido["id"];
            ?>
            <?php if($idpedido!=$idpedido_anterior){?>
                <tr class="border-b border-[#0f766e] hover:bg-gray-200 bg-white">
          <td class="text-lg py-5 px-5 text-center whitespace-nowrap"><?= $pedido["nombre"] ?></td>
          <td class="text-lg py-5 px-5 text-center whitespace-nowrap"><?= $pedido["direccion"] ?></td>
          <td class="text-lg py-5 px-5 text-center whitespace-nowrap"><?= $pedido["cp"] ?></td>
          <td class="text-lg py-5 px-5 text-center whitespace-nowrap"><?= $pedido["provincia"] ?></td>
          <td class="text-lg py-5 px-5 text-center whitespace-nowrap"><?= $pedido["telefono"] ?></td>
          <td class="text-lg py-5 px-5 text-center whitespace-nowrap"><?= $pedido["email"] ?></td>
          <!-- <td class="text-lg py-5 px-5 text-center whitespace-nowrap">${pedido.estado}</td> -->
          <td class="text-lg py-5 px-5 text-center whitespace-nowrap"><a class="rounded-lg bg-teal-500 p-2 text-white font-bold hover:bg-teal-700" <a href="ver_detalles.php?id_pedido=<?= $pedido["id"] ?>">Ver detalles</a></td>
        </tr>
          <!-- <div>
            Productos del pedido:
        </div> -->
        <?php 

} ?>
         <!-- <div style="margin:10px">
            Titulo: <?=$pedido["titulo"] ?> <br>
            Artista: <?=$pedido["artista"] ?> <br>
            Duracion: <?=$pedido["duracion"] ?> <br>
            Numero de Canciones: <?=$pedido["canciones"] ?> <br>
            Precio: <?=$pedido["precio"] ?> <br>
            Productora: <?=$pedido["productora"] ?> <br>
        </div> -->
    <?php 
    $idpedido_anterior = $idpedido;
} ?>
    </tbody>
</table>
<div class="my-5 w-full text-center">
    <span>Página <?= $current_page ?> de <?= $total_pages ?></span>
    <br />
    <br>
    <?php if($current_page > 1): ?>
        <a href="?page=1" class="inline-flex items-center px-4 py-2 text-1xl  font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-[#134e4a] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-[#0f766e] dark:hover:bg-[#134e4a] dark:focus:[#134e4a]">PRIMERA PAGINA</a>
        <a href="?page=<?= $current_page - 1 ?>" class="inline-flex items-center px-4 py-2 text-1xl  font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-[#134e4a] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-[#0f766e] dark:hover:bg-[#134e4a] dark:focus:[#134e4a]">ANTERIOR</a>
    <?php endif; ?>
    <?php if($current_page < $total_pages): ?>
        <a href="?page=<?= $current_page + 1 ?>" class="inline-flex items-center px-4 py-2 text-1xl  font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-[#134e4a] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-[#0f766e] dark:hover:bg-[#134e4a] dark:focus:[#134e4a]">SIGUIENTE</a>
        <a href="?page=<?= $total_pages ?>" class="inline-flex items-center px-4 py-2 text-1xl  font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-[#134e4a] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-[#0f766e] dark:hover:bg-[#134e4a] dark:focus:[#134e4a]">ULTIMA PAGINA</a>
    <?php endif; ?>
</div>
</div>
    </body>
    </html>



