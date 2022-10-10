{include file= 'templates/header.tpl'}

<h1>{$category[0]->name}</h1>



    {foreach from=$productsByCategory item=$product}
            
    <li class="list-group-item">Nombre: {$product->name}</li>
    <li class="list-group-item">Descripcion: {$product->description}</li>
    <li class="list-group-item">Stock: {$product->stock}</li>
    <li class="list-group-item">Precio: ${$product->price}</li>
    
       
    {/foreach}
</ul>

{include file= 'templates/footer.tpl'}