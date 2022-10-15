<link rel="stylesheet" href="css/style.css">
<figure class="text-center"><h4 class="display-6">Productos disponibles</h4></figure>
<div class="div-table">
<table class="table table-bordered">
 <thead class="thead">
    <tr>
        <td scope="col" class="p-3 mb-2 bg-warning text-dark">Nombre</td>
        <td scope="col" class="p-3 mb-2 bg-warning text-dark">Descripcion</td>
        <td scope="col" class="p-3 mb-2 bg-warning text-dark">Mas Informacion</td>
    </tr>
 </thead>
   <tbody>
{foreach from=$products item=$product}
       <tr class="contenedor-home"> 
            <td scope="row"> {$product->name}</td>
            <td>{$product->description}</td>
            <td><a href="details/{$product->id}" class="btn btn-outline-warning">Detalles</a> </td>
        <tr>
{/foreach}  
 </tbody>
</table>
</div>
