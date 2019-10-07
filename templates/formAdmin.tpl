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
            <select name="categoria" >
                <option value="1">Fruta</option>
                <option value="2">Verdura</option>


            </select>
        </div>

        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>

</div>