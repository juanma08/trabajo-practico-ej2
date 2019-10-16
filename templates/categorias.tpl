{include 'templates/header.tpl'}
    <h1>{$titulo}</h1>

<table>
    <tr>
        <th>
         Categoria
        </th>
    </tr>
	{foreach $categorias as $categoria}
        
		<tr>			
			<td>{$categoria->Nombre}</td>
						
            <td> <small><a href="categoria/{$categoria->idCategoria}">Ver mas</a></small> </td>
            {if $adminName}
            <td> <small><a href="deleteCategorias/{$categoria->idCategoria}">Borrar</a></small> </td>

            <td> <small><a href="editCategoria/{$categoria->idCategoria}">Editar</a></small> </td>

            {/if}
        </tr>
    {/foreach}
</table>

{if $adminName}
    {include 'templates/formCategorias.tpl'}
                  
{/if}

{include 'templates/footer.tpl'}