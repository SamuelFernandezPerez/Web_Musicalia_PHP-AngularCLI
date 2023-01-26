
 <tbody class="text-[#0f172a] text-sm font-light">
   	 		<tr  class="border-b border-[#0f766e] hover:bg-gray-200 bg-white">
      			<td class="px-6 text-center whitespace-nowrap"><img class="w-32 h-32  rounded-full shadow-lg my-2" src="../server/imagenes/<?= $cd["id"] ?>.jpg"/>
      			<!-- <td class="px-6 text-center whitespace-nowrap">${cd.portada}<img class="w-32 h-32 text-lg" src="../subidas/${cd.id}-portada2.jpg"/>
      			<td class="px-6 text-center whitespace-nowrap">${cd.portada}<img class="w-32 h-32 text-lg" src="../subidas/${cd.id}-portada3.jpg"/> -->
      			<td class="text-lg py-3 px-5 text-center whitespace-nowrap"><?= $cd["titulo"] ?></a></td>
      			<td class="text-lg py-3 px-5 text-center whitespace-nowrap"><?= $cd["artista"] ?></td>
      			<td class="text-lg py-3 px-5 text-center whitespace-nowrap"><?= $cd["precio"] ?></td>
      			<td class="text-lg py-3 px-5 text-center whitespace-nowrap"><?= $cd["duracion"] ?></td>
      			<td class="text-lg py-3 px-5 text-center whitespace-nowrap"><?= $cd["canciones"] ?></td>
    			<td class="text-lg py-3 px-5 text-center whitespace-nowrap"><?= $cd["productora"] ?></td>
    			<!-- <td class="text-lg py-3 px-5 text-center whitespace-nowrap">${cd.categoria.nombre}</td> -->
    			<td class="text-lg py-3 px-5 text-center whitespace-nowrap"><a class="rounded-lg bg-red-500 p-2 text-white font-bold hover:bg-red-700"   onclick="return confirm('¿Seguro?');" href="?id_borrar=<?=$cd['id']?>">Borrar</a></td>
    			<td class="text-lg py-3 px-5 text-center whitespace-nowrap"><a class="rounded-lg bg-orange-500 p-2 text-white font-bold hover:bg-orange-700" href="editar_cd.php?id_editar=<?=$cd['id']?>">Editar</a></td>
    			<!-- <td class="py-3 px-6 text-left whitespace-nowrap"><a class="rounded-lg bg-blue-500 p-2 text-white font-bold hover:bg-blue-700" href="agregarIdioma?idCd=${cd.id}" onclick="alert('mostrar formulario para registrar para el cd textos en otro idioma'); return false;"> agregar textos en otro idioma</a>-->
    		</tr>
  </tbody>

