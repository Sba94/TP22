<link rel="stylesheet" href="css/style.css">
<figure class="text-center"><h4 class="display-6">Productos disponibles</h4></figure>
<div class="div-table">
<table class="table table-bordered">
 <thead class="thead">
    <tr>
        <td scope="col">Nombre</td>
        <td scope="col">Descripcion</td>
        <td scope="col">Mas Informacion</td>
    </tr>
 </thead>
   <tbody>
{foreach from=$products item=$product}
       <tr class="contenedor-home"> 
            <td scope="row"> {$product->name}</td>
            <td>{$product->description}</td>
            <td><a href="details/{$product->id}">Detalles</a> </td>
        <tr>
{/foreach}  
 </tbody>
</table>
</div>
