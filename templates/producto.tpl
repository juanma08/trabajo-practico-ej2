{include 'templates/header.tpl'}
<h1> {$producto->Nombre} </h1>
<h3> Descripcion: {$producto->Descripcion} </h2>
<h3> Categoria: {$producto->Categoria} </h2>
<h2> Precio: {$producto->Precio}</h2>
<img src="{$producto->imagen}" alt="">

{if $usuarioName}
{include 'templates/vue/comentarios.tpl'}
{/if}

{include 'templates/footer.tpl'}