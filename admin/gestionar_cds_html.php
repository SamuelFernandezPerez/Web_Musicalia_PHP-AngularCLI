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
    <!-- <div class="justify-center items-center">
  <form class="">
    <div class="relative w-60 mt-28 m-auto">
      <div class="flex items-center justify-center">
        <input
          type="text"
          id="buscador_titulo"
          class="bg-gray-50 border border-gray-300 text-slate-50 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block pl-10 p-2.5 dark:bg-[#0f766e] dark:border-[#0f766e] dark:placeholder-slate-50 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 flex-1 mr-2"
          placeholder="Buscar por título"
          (keyup)="filtrarCds()"
        />
        <button
          class="flex items-center space-x-1.5 rounded-lg p-2.5 bg-blue-400 text-lg text-center font-medium capitalize tracking-wide text-white transition-colors duration-300 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80"
        >
          LIMPIAR
        </button>
      </div>
    </div>
  </form>
</div> -->
    <div class="w-full mb-28 mt-28">
        <table class="mb-5 min-w-max m-auto table-auto shadow-xl p-10">
            <thead>
                <tr class="bg-[#0f766e] text-white uppercase text-sm leading-normal">
                    <th class="text-lg py-3 px-5 text-center">Caratula</th>
                    <th class="text-lg py-3 px-5 text-center">Titulo</th>
                    <th class="text-lg py-3 px-5 text-center">Artista</th>
                    <th class="text-lg py-3 px-5 text-center">Duracion</th>
                    <th class="text-lg py-3 px-5 text-center">Nº canciones</th>
                    <th class="text-lg py-3 px-5 text-center">Precio</th>
                    <th class="text-lg py-3 px-5 text-center">Productora</th>
                    <th class="text-lg py-3 px-5 text-center">Borrar</th>
                    <th class="text-lg py-3 px-5 text-center">Editar</th>
                </tr>
            </thead>
            <?php
  $cds = R::getAll("select * from cds");
  if(isset($_GET['buscador_titulo']) && !empty($_GET['buscador_titulo'])){
    $buscador_titulo = $_GET['buscador_titulo'];
    $cds = R::find('cds',"titulo like ?",["%$buscador_titulo%"]);
  }
  
  $pagina_actual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
  $elementos_por_pagina = 9;
  $inicio = ($pagina_actual - 1) * $elementos_por_pagina;
  $i = 0;
  $num_paginas = ceil(count($cds) / $elementos_por_pagina);

  foreach($cds as $cd){
    if($i >= $inicio && $i < $inicio + $elementos_por_pagina){
        include("gestionar_productos_elemento_html.php");
    }
    $i++;
  }
?>

        </table>
        <div class="my-7 text-center">
        <span>Página <?= $pagina_actual ?> de <?= $num_paginas ?></span>
    <br />
    <br>
            <?php if($pagina_actual > 1) { ?>
                <a href="?pagina=1" class="inline-flex items-center px-4 py-2 text-xl  font-medium text-center text-white bg-blue-700 rounded-lg
                 hover:bg-[#134e4a] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-[#0f766e] dark:hover:bg-[#134e4a] dark:focus:[#134e4a]">PRIMERA PAGINA</a>
                <a href="?pagina=<?php echo $pagina_actual - 1; ?>" class="inline-flex items-center px-4 py-2 text-xl  font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-[#134e4a] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-[#0f766e] dark:hover:bg-[#134e4a] dark:focus:[#134e4a]">ANTERIOR</a>
                <?php } 

                if($pagina_actual < $num_paginas) { ?>
                <a href="?pagina=<?php echo $pagina_actual + 1; ?>" class="inline-flex items-center px-4 py-2 text-xl  font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-[#134e4a] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-[#0f766e] dark:hover:bg-[#134e4a] dark:focus:[#134e4a]">SIGUIENTE</a>
                <?php } 
                if($pagina_actual != $num_paginas) { ?>
                <a href="?pagina=<?php echo $num_paginas; ?>" class="inline-flex items-center px-4 py-2 text-xl  font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-[#134e4a] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-[#0f766e] dark:hover:bg-[#134e4a] dark:focus:[#134e4a]">ULTIMA PAGINA</a>
                <?php } ?>
            </div>
        </div>
    </body>
</html>

