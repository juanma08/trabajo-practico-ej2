<?php
    require_once('Router.php');
    require_once('./api/verduleria.api.controller.php');
    require_once('./api/categorias.api.controller.php');
    
    // CONSTANTES PARA RUTEO
    define('BASE_URL', 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].dirname($_SERVER['PHP_SELF']).'/');

    $r = new Router();

    $r->addRoute('productos', 'GET', 'verduleriaApiController', 'getProductos');
    $r->addRoute('productos/:ID', 'GET', 'verduleriaApiController', 'getProducto');
    $r->addRoute('productos', 'POST', 'verduleriaApiController', 'addProducto');
    $r->addRoute('productos/:ID', 'DELETE', 'verduleriaApiController', 'deleteProducto');
    $r->addRoute('productos/:ID', 'PUT', 'verduleriaApiController', 'editProducto');
    $r->addRoute('categorias', 'GET', 'categoriasApiController', 'getCategorias');
    $r->addRoute('categorias/:ID', 'GET', 'categoriasApiController', 'getCategoria');
    $r->addRoute('categorias/:ID', 'DELETE', 'categoriasApiController', 'deleteCategoria');
    $r->addRoute('categorias', 'POST', 'categoriasApiController', 'addCategoria');
    $r->addRoute('categorias/:ID', 'PUT', 'categoriasApiController', 'editCategoria');

    $r->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);

