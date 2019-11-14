{include 'templates/header.tpl'}
<div class="container">
    <form action="newPassword" method="POST" class="col-md-4 offset-md-4 mt-4">
        <h1>{$titulo}</h1>

        <div class="form-group">
            <label>Usuario </label>
            <input type="text" name="usuarioName" class="form-control" placeholder="Usuario">
        </div>

        <div class="form-group">
            <label>DNI</label>
            <input type="number" name="dni" class="form-control" placeholder="DNI">
        </div>

        <div class="form-group">
            <label>Nueva contraseña</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>

        {if $error}
        <div class="alert alert-danger" role="alert">
            {$error}
        </div>
        {/if}

        <button type="submit" class="btn btn-primary">Cambiar</button>
    </form>

</div>
{include 'templates/footer.tpl'}