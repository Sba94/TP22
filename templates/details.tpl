{{include file="header.tpl"}}

    <div>
    <ul>
        <li>Nombre: {$productDetail[0]->name}</li>
        <li>Precio: {$productDetail[0]->price}</li>
        <li>Descripcion: {$productDetail[0]->description}</li>
        <li>Stock disponible: {$productDetail[0]->stock}</li>  
    </ul>
<div>

{{include file="footer.tpl"}}