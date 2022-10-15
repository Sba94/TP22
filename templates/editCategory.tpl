{include file= 'templates/header.tpl'}



<form action="editCategory/{$category[0]->id}" method="POST">
<input type="hidden" name="id" value="{$category[0]->id}">
<div>
    <label>Nombre</label>
    <input type="text" class="form-control" name="name" id="name" value="{$category[0]->name}">
</div>
<div>
    <label>Descripcion</label>
    <input type="text" class="form-control" name="description" id="name" value="{$category[0]->description}">
</div>

<button type="submit" class="btn btn-warning">Guardar</button>
</form>






{include file= 'templates/footer.tpl'}