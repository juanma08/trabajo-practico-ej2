{include 'templates/header.tpl'}
    <h1>{$titulo}</h1>

<table>
    <tr>
        <th>
         Producto
        </th>
        <th>
         Precio
        </th>
        <th>
         Descripcion
        </th>
        <th>
         Categoria
        </th>
    </tr>
	{foreach $productos as $producto}
        
		<tr>			
			<td>{$producto->Nombre}</td>
			<td>{$producto->Precio}</td>
			<td>{$producto->Descripcion}</td>
			<td>{$producto->Categoria}</td>			
            <td> <small><a href="producto/{$producto->idProducto}">Ver mas</a></small> </td>
        </tr>
    {/foreach}
</table>

{if $adminName}

      {include 'templates/formAdmin.tpl'}             
{/if}

{include 'templates/footer.tpl'}