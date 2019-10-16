{include 'templates/header.tpl'}

<h1> {$categoria->Nombre}</h1>

<div class="container">
    <form method="POST"  action="editCategoria" class="col-md-4 offset-md-4 mt-4">
        <h1>Categoria</h1>
     
        <div class="form-group">
            <label>Editar</label>
            <input type="text" name="edit" class="form-control" placeholder="Nombre">
        </div>
        <input type="checkbox" name="idCategoria" value="{$categoria->idCategoria}">Estoy seguro
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>

</div> 

{include 'templates/footer.tpl'}