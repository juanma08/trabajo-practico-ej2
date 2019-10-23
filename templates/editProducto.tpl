{include 'templates/header.tpl'}

<h1> {$producto->Nombre}</h1>

<table>
    <tr>
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
		<tr>			
			<td>{$producto->Precio}</td>
			<td>{$producto->Descripcion}</td>
			<td>{$producto->idCategoria}</td>			
        </tr>
</table>





 <div class="container">
    <form action="editProducto" method="POST" class="col-md-4 offset-md-4 mt-4">
        <h1>Editar</h1>
     
        <div class="form-group">
            <label>Producto</label>
            <input type="text" name="nombre" class="form-control" placeholder="producto">
        </div>

        <div class="form-group">
            <label>Precio </label>
            <input type="number" name="precio" class="form-control" placeholder="precio">
        </div>

        <div class="form-group">
            <label> Descripcion </label>
            <input type="text" name="descripcion" class="form-control" placeholder="descripcion">
        </div>
        
        <div class="form-group">
            <label> Categoria </label>		
            <select name="categoria">
            {foreach $categorias as $categoria}
                <option value={$categoria->idCategoria}>{$categoria->Nombre}</option>
            {/foreach}
            </select>
        </div>
        <div>
        <input type="hidden" name="idProducto" value="{$producto->idProducto}">Estoy seguro
        <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>

</div>         

{include 'templates/footer.tpl'}