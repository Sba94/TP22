{include file= 'templates/header.tpl'}
<div>
<figure class="text-center"><h4 class="display-6">Agregar un producto</h4></figure>
<form action="addProduct" method="POST">
<div>
    <div>
        <div>
            <label>Nombre</label>
            <input name="name" class="form-control" type="text">
        </div>
        <div>
            <label>Precio</label>
            <input name="price" type="number" class="form-control">
        </div>
        <div>
            <label>Descripcion</label>
            <input name="description" type="text" class="form-control">
        </div>
    </div>
    <div>
        <div>
            <label>Stock</label>
            <input name="stock" type="number" class="form-control">
        </div>
        
        <div> 
            <label>Categoria</label>
            <select name="id_category" class="form-control form-control-sm">
            {foreach from=$categories item=$category}
                <option value="{$category->id}">{$category->name}</option>
            {/foreach}
            </select>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-warning">Guardar</button>
</form>
</div>




<figure class="text-center"><h4 class="display-6">Agregar una categoria</h4></figure>
<form action="addCategory" method="POST">

<div>
    <label>Nombre</label>
    <input name="name" type="text" id="name" class="form-control">
</div>

<div>
    <label>Descripcion</label>
    <input name="description" type="text" id="description" class="form-control">
</div>

<button type="submit" class="btn btn-warning">Guardar</button>
</form>

</div>


{include file="categoriesAdmin.tpl"}

{include file="productsAdmin.tpl"}

{include file= 'templates/footer.tpl'}