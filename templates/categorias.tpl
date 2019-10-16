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


            {/if}
        </tr>
    {/foreach}
</table>

{if $adminName}
<div class="container">
    <form action="addCategoria" method="POST" class="col-md-4 offset-md-4 mt-4">
        <h1>{$titulo}</h1>
     
        <div class="form-group">
            <label>Agregar</label>
            <input type="text" name="nombre" class="form-control" placeholder="categoria">
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>

</div>  
<div class="container">
    <form action="editCategoria" method="POST" class="col-md-4 offset-md-4 mt-4">
        <h1>Categoria</h1>
     
        <div class="form-group">
            <label>Editar</label>
            <input type="text" name="edit" class="form-control" placeholder="Nombre">
              <select name="categoria">
            {foreach $categorias as $categoria}
                <option value={$categoria->idCategoria}>{$categoria->Nombre}</option>
            {/foreach}
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>

</div>                    
{/if}

{include 'templates/footer.tpl'}