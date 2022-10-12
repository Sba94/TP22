{include file= 'templates/header.tpl'}

<div>
<figure class="text-center"><h4 class="display-6">Categorias disponibles</h4></figure>
<table class="table">
 <thead class="thead-dark">
    <tr>
        <td scope="row">Nombre</td>
        <td scope="row">Descripcion</td>
        <td scope="row">Ver más</td>
    </tr>
 </thead>
   <tbody>
{foreach from=$categories item=$category}
        <tr> 
            <td>{$category->name}</td>
            <td>{$category->description}</td>
            <td><a href="category/{$category->id}"><button type="button" class="btn btn-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16"><path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path><path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path></svg>
                {$category->name}
              </button></a><td>
        <tr>
{/foreach}  
 </tbody>
</table>

{include file= 'templates/footer.tpl'}