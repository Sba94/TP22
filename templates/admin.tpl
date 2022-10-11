{include file= 'templates/header.tpl'}

<form action="addProduct" method="POST">
<div>
    <div>
        <div>
            <label>Nombre</label>
            <input name="name" type="text">
        </div>

        <div>
            <label>Precio</label>
            <input name="price" type="text">
        </div>

        <div>
            <label>Descripcion</label>
            <input name="description" type="text">
        </div>
    </div>

    <div>
        <div>
            <label>Stock</label>
            <input name="stock" type="text">
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

<div>
    <label>Descripcion</label>
    <textarea name="description" class="form-control" rows="3"></textarea>
</div>

<button type="submit">Guardar</button>

</form>
</div>



<div>
<form action="addCategory" method="POST">

<div>
    <label>Nombre</label>
    <input type="text" name="name" id="name">
</div>

<div>
    <label>Descripcion</label>
    <input type="text" name="description" id="description">
</div>

<button type="submit">Guardar</button>

</form>
</div>

{include file="categoriesAdmin.tpl"}

{include file="productsAdmin.tpl"}

{include file= 'templates/footer.tpl'}