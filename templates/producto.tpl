{include 'templates/header.tpl'}
<h1> {$producto->Nombre} </h1>
<h3> Descripcion: {$producto->Descripcion} </h2>
<h3> Categoria: {$producto->Categoria} </h2>
<h2> Precio: {$producto->Precio}</h2>
{if $producto->imagen}
<img src="{$producto->imagen}">
{/if}
{if $admin && $producto->imagen}
<a href="deleteImg/{$producto->idProducto}">Eliminar imagen</a>
{/if}


{include 'templates/vue/comentarios.tpl'}


{include 'templates/footer.tpl'}