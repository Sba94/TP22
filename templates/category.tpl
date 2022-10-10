{include file= 'templates/header.tpl'}




{foreach from=$productsByCategory item=$product}
            
  <li class="list-group-item">Nombre: {$product->name}</li>
  <li class="list-group-item">Descripcion: {$product->description}</li>
  <li class="list-group-item">Stock: {$product->stock}</li>
  <li class="list-group-item">Precio: ${$product->price}</li>
  
     
  {/foreach}

</div>


{include file= 'templates/footer.tpl'}