<div class="container">
    <form action="addProducto" method="POST" class="col-md-4 offset-md-4 mt-4">
        <h1>{$titulo}</h1>
     
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

        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>

</div>