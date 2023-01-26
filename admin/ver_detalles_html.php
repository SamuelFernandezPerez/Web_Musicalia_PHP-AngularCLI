<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musicalia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body class="bg-gradient-to-br from-teal-100 via-teal-300 to-teal-500">
<?php include("menu.php"); ?>


 <h1 class=" mt-28 w-[60rem] m-auto rounded-lg bg-[#0f172a] p-3 my-10 text-white text-xl lg:text-xl text-center" style="font-family: 'Dancing Script', cursive, sans-serif;">
        Productos del pedido:
    </h1>

<div class="w-full">
<table class="min-w-max w-[60rem] m-auto table-auto shadow-xl">
  		<thead>
   			 <tr class="bg-[#0f766e] text-white uppercase text-sm leading-normal">
     			<th class="text-lg py-3 px-6 text-center">Titulo</th>
                 <th class="text-lg py-3 px-6 text-center">Artista</th>
      			<th class="text-lg py-3 px-6 text-center">Precio/Unidad</th>
     	 		<th class="text-lg py-3 px-6 text-center">Cantidad</th>
    		</tr>
  		</thead>
<?php
    foreach($productos as $p){
        ?>
  		<tbody class="text-[#0f172a] text-sm font-light">

   	 		<tr class="border-b border-[#0f766e] hover:bg-gray-200 bg-white">
   	 			<td class="text-lg py-3 px-6 text-center whitespace-nowrap"><?=$p["titulo"] ?></td>
                    <td class="text-lg py-3 px-6 text-center whitespace-nowrap"><?=$p["artista"] ?></td>
      			<td class=" text-lg py-3 px-6 text-center whitespace-nowrap"><?=$p["precio"] ?></td>
      			<td id-producto="{{cd_id}}" class="text-lg py-3 px-6 text-center whitespace-nowrap"><?=$p["cantidad"] ?></td>
    		</tr>	
  		</tbody>
        <?php
    }
    ?>
	</table>
	
</div>

<br>
 <h1 class="mt-10 w-[60rem] m-auto rounded-lg bg-[#0f172a] p-3 my-10 text-white text-xl lg:text-xl text-center" style="font-family: 'Dancing Script', cursive, sans-serif;">
        Datos del cliente:
    </h1>
<div class="w-full">
	<table class="min-w-max w-[60rem] m-auto table-auto shadow-xl">
  		<thead>
   			 <tr class="bg-[#0f766e] text-white uppercase text-sm leading-normal">
   			 	<th class="text-lg py-3 px-6 text-center">Nombre completo</th>
    		</tr>
  		</thead>
  		<tbody class="text-[#0f172a] text-sm font-light">

   	 		<tr class="border-b border-[#0f766e] hover:bg-gray-200 bg-white">
      			<td class=" text-lg py-3 px-6 text-center whitespace-nowrap"><?= $pedido["nombre"] ?></td>
   			</tr>	
  		</tbody>
	</table>
		<table class="min-w-max w-[60rem] m-auto table-auto shadow-xl">
  		<thead>
   			 <tr class="bg-[#0f766e] text-white uppercase text-sm leading-normal">
   			 	<th class="text-lg py-3 px-6 text-center">Direccion</th>
    		</tr>
  		</thead>
  		<tbody class="text-[#0f172a] text-sm font-light">

   	 		<tr class="border-b border-[#0f766e] hover:bg-gray-200 bg-white">
      			<td class=" text-lg py-3 px-6 text-center whitespace-nowrap"><?= $pedido["direccion"] ?></td>
   			</tr>	
  		</tbody>
	</table>
		<table class="min-w-max w-[60rem] m-auto table-auto shadow-xl">
  		<thead>
   			 <tr class="bg-[#0f766e] text-white uppercase text-sm leading-normal">
   			 	<th class="text-lg py-3 px-6 text-center">Provincia</th>
    		</tr>
  		</thead>
  		<tbody class="text-[#0f172a] text-sm font-light">

   	 		<tr class="border-b border-[#0f766e] hover:bg-gray-200 bg-white">
      			<td class=" text-lg py-3 px-6 text-center whitespace-nowrap"><?= $pedido["provincia"] ?></td>
   			</tr>	
  		</tbody>
	</table>
		<table class="min-w-max w-[60rem] m-auto table-auto shadow-xl">
  		<thead>
   			 <tr class="bg-[#0f766e] text-white uppercase text-sm leading-normal">
   			 	<th class="text-lg py-3 px-6 text-center">Telefono</th>
    		</tr>
  		</thead>
  		<tbody class="text-[#0f172a] text-sm font-light">

   	 		<tr class="border-b border-[#0f766e] hover:bg-gray-200 bg-white">
      			<td class=" text-lg py-3 px-6 text-center whitespace-nowrap"><?= $pedido["telefono"] ?></td>
   			</tr>	
  		</tbody>
	</table>
		<table class="min-w-max w-[60rem] m-auto table-auto shadow-xl">
  		<thead>
   			 <tr class="bg-[#0f766e] text-white uppercase text-sm leading-normal">
   			 	<th class="text-lg py-3 px-6 text-center">Codigo postal</th>
    		</tr>
  		</thead>
  		<tbody class="text-[#0f172a] text-sm font-light">

   	 		<tr class="border-b border-[#0f766e] hover:bg-gray-200 bg-white">
      			<td class=" text-lg py-3 px-6 text-center whitespace-nowrap"><?= $pedido["cp"] ?></td>
   			</tr>	
  		</tbody>
        
	</table>
    </table>
		<table class="min-w-max w-[60rem] m-auto table-auto shadow-xl">
  		<thead>
   			 <tr class="bg-[#0f766e] text-white uppercase text-sm leading-normal">
   			 	<th class="text-lg py-3 px-6 text-center">Email</th>
    		</tr>
  		</thead>
  		<tbody class="text-[#0f172a] text-sm font-light">

   	 		<tr class="border-b border-[#0f766e] hover:bg-gray-200 bg-white">
      			<td class=" text-lg py-3 px-6 text-center whitespace-nowrap"><?= $pedido["email"] ?></td>
   			</tr>	
  		</tbody>
        
	</table>
	</table>
		<table class="min-w-max w-[60rem] m-auto table-auto shadow-xl">
  		<thead>
   			 <tr class="bg-[#0f766e] text-white uppercase text-sm leading-normal">
   			 	<th class="text-lg py-3 px-6 text-center">Ip</th>
    		</tr>
  		</thead>
  		<tbody class="text-[#0f172a] text-sm font-light">

   	 		<tr class="border-b border-[#0f766e] hover:bg-gray-200 bg-white">
      			<td class=" text-lg py-3 px-6 text-center whitespace-nowrap"><?= $pedido["ip"] ?></td>
   			</tr>	
  		</tbody>
        
	</table>
	</table>
		<table class=" w-[60rem] m-auto table-auto shadow-xl">
  		<thead>
   			 <tr class="bg-[#0f766e] text-white uppercase text-sm leading-normal">
   			 	<th class="text-lg py-3 px-6 text-center">Useragent</th>
    		</tr>
  		</thead>
  		<tbody class="text-[#0f172a] text-sm font-light">

   	 		<tr class="border-b border-[#0f766e] hover:bg-gray-200 bg-white">
      			<td class=" text-lg py-3 px-6 text-center whitespace-nowrap"><?= $pedido["useragent"] ?></td>
   			</tr>	
  		</tbody>
        
	</table>
</div>
<br>
 <h1 class=" w-[60rem] m-auto rounded-lg bg-[#0f172a] p-3 my-10 text-white text-xl lg:text-xl text-center" style="font-family: 'Dancing Script', cursive, sans-serif;">
        Datos de pago:
    </h1>
<div class="w-full">
		<table class="min-w-max w-[60rem] m-auto table-auto shadow-xl">
  		<thead>
   			 <tr class="bg-[#0f766e] text-white uppercase text-sm leading-normal">
   			 	<th class="text-lg py-3 px-6 text-center">Numero de tarjeta</th>
    		</tr>
  		</thead>
  		<tbody class="text-[#0f172a] text-sm font-light">

   	 		<tr class="border-b border-[#0f766e] hover:bg-gray-200 bg-white">
      			<td class=" text-lg py-3 px-6 text-center whitespace-nowrap"><?= $pedido["tarjeta"] ?></td>
   			</tr>	
  		</tbody>
	</table>		
</div>

<br>
	
<input type="hidden" id="id_pedido" value="${pedido.id}"/>
	
    
</body>
</html>