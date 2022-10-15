{include file= 'templates/header.tpl'}

<figure class="text-center"><h4 class="display-6">Productos por categoria</h4></figure>

<ul class="list-group">
  {foreach from=$productsByCategory item=$product}    
    <li class="p-3 mb-2 bg-warning text-dark">Nombre: {$product->name}</li>
    <li class="list-group-item">Descripcion: {$product->description}</li>
    <li class="list-group-item">Stock: {$product->stock}</li>
    <li class="list-group-item">Precio: ${$product->price}</li> 
  {/foreach}
</ul>



{include file= 'templates/footer.tpl'}