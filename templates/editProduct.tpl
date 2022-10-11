{include file= 'templates/header.tpl'}

<form action="editProduct/{$product[0]->id}" method="POST">
<div>
    <div>
    <input type="hidden" name="id" value="{$product[0]->id}">

        <div>
            <label>Nombre</label>
            <input name="name" type="text" value="{$product[0]->name}">
        </div>

        <div>
            <label>Precio</label>
            <input name="price" type="text" value="{$product[0]->price}">
        </div>

        <div>
            <label>Descripcion</label>
            <input name="description" type="text" value="{$product[0]->description}">
        </div>

    </div>

    <div>
        <div>
            <label>Stock</label>
            <input name="stock" type="text" class="form-control"  value="{$product[0]->stock}">
        </div>
       
        <div> 
            <label>Categoria</label>
            <select name="id_category">

            {foreach from=$categories item=$category}
                <option value="{$category->id}">{$category->name}</option>
            {/foreach}
            </select>
        </div>

    </div>
</div>

<button type="submit">Guardar</button>

</form>
</div>




{include file= 'templates/footer.tpl'}