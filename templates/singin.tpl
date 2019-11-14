{include 'templates/header.tpl'}
<div class="container">
    <form action="newUser" method="POST" class="col-md-4 offset-md-4 mt-4">
        <h1>{$titulo}</h1>

        <div class="form-group">
            <label> Usuario </label>
            <input type="text" name="usuarioName" class="form-control" placeholder="Nombre de usuario">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>

        <div class="form-group">
            <label>DNI*</label>
            <input type="number" name="dni" class="form-control" placeholder="DNI">
        </div>

        {if $error}
        <div class="alert alert-danger" role="alert">
            {$error}
        </div>
        {/if}

        <button type="submit" class="btn btn-primary">Ingresar</button>

        <p>*El DNI solo se usara la recuperacion de contraseña</p>
    </form>

</div>
{include 'templates/footer.tpl'}