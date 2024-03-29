{include 'templates/header.tpl'}
<div class="container">
    <form action="verify" method="POST" class="col-md-4 offset-md-4 mt-4">
        <h1>{$titulo}</h1>

        <div class="form-group">
            <label>Usuario </label>
            <input type="text" name="usuarioName" class="form-control" placeholder="Usuario">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>

        {if $error}
        <div class="alert alert-danger" role="alert">
            {$error}
        </div>
        {/if}

        <button type="submit" class="btn btn-primary">Ingresar</button>
        <div class="form-group">
            <a href="forgetPassword">olvide mi contraseña</a>
        </div>
    </form>

</div>
{include 'templates/footer.tpl'}