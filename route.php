<?php
    require_once('controllers/login.controller.php');
    require_once('controllers/verduleria.controller.php');
    require_once('Router.php');
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", BASE_URL . 'login');
    define("HOME", BASE_URL . 'home');
    define("CATEGORIAS", BASE_URL . 'categorias');
    
    $r = new Router();
    $r->addRoute('login', 'GET', 'LoginController', 'showLogin');
    $r->addRoute('verify', 'POST', 'LoginController', 'verifyAdmin');
    $r->addRoute('logout', 'GET', 'LoginController', 'logout');
    $r->addRoute('home', 'GET', 'VerduleriaController', 'showHome');
    $r->addRoute('producto/:ID', 'GET', 'VerduleriaController', 'showProducto');
    $r->addRoute('addProducto', 'POST', "VerduleriaController", 'addProducto');
    $r->addRoute('editarProducto/:ID', 'GET', "VerduleriaController", 'ShowEditProducto');  
    $r->addRoute('delete/:ID', 'GET', 'VerduleriaController', 'deleteProducto');
    $r->addRoute('editProducto', 'POST', "VerduleriaController", 'editProducto');
    $r->addRoute('categorias', 'GET', 'VerduleriaController', 'showCategorias');
    $r->addRoute('categoria/:ID', 'GET', 'VerduleriaController', 'showCategoria');
    $r->addRoute('addCategoria', 'POST', "VerduleriaController", 'addCategoria');
    $r->addRoute('editarCategoria/:ID', 'GET', "VerduleriaController", 'showEditCategoria');
    $r->addRoute('deleteCategoria/:ID', 'GET', 'VerduleriaController', 'deleteCategoria');
    $r->addRoute('editCategoria', 'POST', "VerduleriaController", 'editCategoria');


    
    $r->setDefaultRoute("VerduleriaController", "showHome");

    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 


