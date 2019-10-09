{include 'templates/header.tpl'}
    <h1>{$titulo}</h1>

<table>
    <tr>
        <th>
         Fruta
        </th>
        <th>
         Precio
        </th>
        <th>
         Descripcion
        </th>
    </tr>
	{foreach $frutas as $fruta}
        
		<tr>			
			<td>{$fruta->Nombre}</td>
			<td>{$fruta->Precio}</td>
			<td>{$fruta->Descripcion}</td>		
            <td> <small><a href="producto/{$producto->idProducto}">Ver mas</a></small> </td>
            {if $adminName}
            <td> <small><a href="delete/{$producto->idProducto}">Borrar</a></small> </td>
            {/if}
        </tr>
    {/foreach}
</table>

{if $adminName}

      {include 'templates/formAdmin.tpl'}             
{/if}

{include 'templates/footer.tpl'}