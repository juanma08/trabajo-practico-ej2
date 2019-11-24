{include 'templates/header.tpl'}
<h1> {$producto->Nombre} </h1>
<h3> Descripcion: {$producto->Descripcion} </h2>
<h3> Categoria: {$producto->Categoria} </h2>
<h2> Precio: {$producto->Precio}</h2>
<img src="{$producto->imagen}" alt="">

<form action="">

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
</form>
    
    <table>
        <tr>
            <th>
                Usuario
            </th>
            <th>
                Comentario
            </th>
            <th>
                Puntuacion
            </th>
        </tr>
	{foreach $comentarios as $comentario}
        
		<tr>			
			<td>{$comentario->usuarioName}</td>
			<td>{$comentario->comentario}</td>
			<td>{$comentario->puntuacion}</td>
            {if $admin}
            <td> <small><a href="delete/{$producto->idProducto}">Borrar</a></small> </td>
            {/if}
        </tr>
    {/foreach}
</table>





{include 'templates/footer.tpl'}