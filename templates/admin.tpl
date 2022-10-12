{include file= 'templates/header.tpl'}

<figure class="text-center"><h1>Agregar un producto</h1></figure>
<form action="addProduct" method="POST">
<div>
    <div>
        <div>
            <label>Nombre</label>
            <input name="name" type="text">
        </div>
        <div>
            <label>Precio</label>
            <input name="price" type="number">
        </div>
        <div>
            <label>Descripcion</label>
            <input name="description" type="text">
        </div>
    </div>
    <div>
        <div>
            <label>Stock</label>
            <input name="stock" type="number">
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




<figure class="text-center"><h1>Agregar una categoria</h1></figure>
<form action="addCategory" method="POST">

<div>
    <label>Nombre</label>
    <input name="name" type="text" id="name">
</div>

<div>
    <label>Descripcion</label>
    <input name="description" type="text" id="description">
</div>

<button type="submit">Guardar</button>
</form>
</div>


{include file="categoriesAdmin.tpl"}

{include file="productsAdmin.tpl"}

{include file= 'templates/footer.tpl'}