<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{$basehref}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>{$titulo}</title>
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <a class="navbar-brand" href="home">Locasso</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="home">Productos</a>
            </div>
            {if $adminName}
                <div class="navbar-nav ml-auto">
                    <span class="navbar-text">{$adminName}</span>
                    <a class="nav-item nav-link" href="logout">LOGOUT</a>
                </div>
            {/if}
            {if !$adminName}
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="login">LOGIN</a>
            </div>                 
            {/if}
        </div>
    </nav>