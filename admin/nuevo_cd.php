<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda cds</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body class="bg-gradient-to-br from-teal-100 via-teal-300 to-teal-500">
   <?php include("menu.php") ; ?>
   <br>
 <h1    class="w-[30rem] m-auto rounded-lg bg-[#0f172a] p-3 my-10 text-white text-xl lg:text-xl text-center"
    style="font-family: 'Dancing Script', cursive, sans-serif"
  >
        Introduce los datos del CD:
    </h1>
<br>
   <form action="registrar_cd.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
    <div class="w-full overflow-x-auto relative  sm:rounded-lg ">
    <table class="w-auto text-sm text-left text-gray-500 dark:text-gray-400 m-auto w_auto shadow-md" >
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    
                </th>
                <th scope="col" class="py-3 px-6">
                    
                </th>
            </tr>
        </thead>
        <tbody class="text-lg">
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-teal-500">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Titulo: 
                </th>
                <td class="py-4 px-6">
                <input class="w-auto" type="text" name="titulo">
                </td> 
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-teal-500">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Artista: 
                </th>
                <td class="py-4 px-6">
                <input class="w-auto" type="text" name="artista">
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-teal-500">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Productora:  
                </th>
                <td class="py-4 px-6">
                <input class="w-auto" type="text" name="productora"> 
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-teal-500">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   Duración: 
                </th>
                <td class="py-4 px-6">
                <input class="w-auto" type="text" name="duracion">
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-teal-500">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Número de canciones: 
                </th>
                <td class="py-4 px-6">
                <input class="w-auto" type="number" name="canciones">
                </td>
            </tr>

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-teal-500">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Precio: 
                </th>
                <td class="py-4 px-6">
                <input class="w-auto" type="text" name="precio">
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-teal-500">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Portada:  
                </th>
                <td class="py-4 px-6">
                <input class="w-auto" type="file" name="portada">
                </td>
            </tr>		
        </tbody>
    </table>
</div>
<br>
<div class=" flex justify-center	">
<input class="mt-10 mb-10 inline-flex items-center px-4 py-2 text-xl  text-center text-white bg-blue-700 rounded-lg hover:bg-[#134e4a] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-[#0f766e] dark:hover:bg-[#134e4a] dark:focus:[#134e4a]" type="submit" value="REGISTRAR CD"/>
</div>

   </form>
   <script>
function validateForm() {
var inputs = document.getElementsByTagName("input");
var errorSpans = document.getElementsByClassName("error-span");
while (errorSpans.length > 0) {
errorSpans[0].parentNode.removeChild(errorSpans[0]);
}
for (var i = 0; i < inputs.length; i++) {
if (inputs[i].value == "") {
var errorSpan = document.createElement("span");
errorSpan.innerHTML = "Este campo es obligatorio";
errorSpan.classList.add("error-span");
errorSpan.style.color = "red";
inputs[i].parentNode.appendChild(errorSpan);
return false;
}
if (inputs[i].name == "precio" || inputs[i].name == "duracion") {
if (isNaN(inputs[i].value)) {
var errorSpan = document.createElement("span");
errorSpan.innerHTML = "Este campo debe ser un número";
errorSpan.classList.add("error-span");
errorSpan.style.color = "red";
inputs[i].parentNode.appendChild(errorSpan);
return false;
}
}
}
return true;
}
</script>
</body>
</html>

