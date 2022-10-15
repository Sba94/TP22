{{include file="header.tpl"}}
<figure class="text-center"><h4 class="display-6">Detalles</h4></figure>
    <div>
    <ul class="list-group">
        <li class="p-3 mb-2 bg-warning text-dark">Nombre: {$productDetail[0]->name}</li>
        <li class="list-group-item">Precio: {$productDetail[0]->price}</li>
        <li class="list-group-item">Descripcion: {$productDetail[0]->description}</li>
        <li class="list-group-item">Stock disponible: {$productDetail[0]->stock}</li>  
    </ul>
<div>

{{include file="footer.tpl"}}