<?php
    require_once('controllers/login.controller.php');
    require_once('controllers/verduleria.controller.php');
    require_once('controllers/categorias.controller.php');
    require_once('Router.php');
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", BASE_URL . 'login');
    define("HOME", BASE_URL . 'home');
    define("CATEGORIAS", BASE_URL . 'categorias');
    define("USERS", BASE_URL . 'users');


    $r = new Router();
    $r->addRoute('singin', 'GET', 'LoginController', 'showSingin');
    $r->addRoute('newUser', 'POST', 'LoginController', 'newUser');
    $r->addRoute('login', 'GET', 'LoginController', 'showLogin');
    $r->addRoute('verify', 'POST', 'LoginController', 'verifyUser');
    $r->addRoute('logout', 'GET', 'LoginController', 'logout');
    $r->addRoute('forgetPassword', 'GET', 'LoginController', 'forgetPassword');
    $r->addRoute('newPassword', 'POST', 'LoginController', 'newPassword');
    $r->addRoute('home', 'GET', 'VerduleriaController', 'showHome');
    $r->addRoute('producto/:ID', 'GET', 'VerduleriaController', 'showProducto');
    $r->addRoute('addProducto', 'POST', "VerduleriaController", 'addProducto');
    $r->addRoute('editarProducto/:ID', 'GET', "VerduleriaController", 'ShowEditProducto');  
    $r->addRoute('delete/:ID', 'GET', 'VerduleriaController', 'deleteProducto');
    $r->addRoute('editProducto', 'POST', "VerduleriaController", 'editProducto');
    $r->addRoute('categorias', 'GET', 'categoriasController', 'showCategorias');
    $r->addRoute('categoria/:ID', 'GET', 'categoriasController', 'showCategoria');
    $r->addRoute('addCategoria', 'POST', "categoriasController", 'addCategoria');
    $r->addRoute('editarCategoria/:ID', 'GET', "categoriasController", 'showEditCategoria');
    $r->addRoute('deleteCategoria/:ID', 'GET', 'categoriasController', 'deleteCategoria');
    $r->addRoute('editCategoria', 'POST', "categoriasController", 'editCategoria');
    $r->addRoute('users', 'GET', "loginController", 'showUsers');
    $r->addRoute('permiso/:ID', 'GET', "loginController", 'permiso');
    $r->addRoute('deleteUsuario/:ID', 'GET', 'loginController', 'deleteUser');



    
    $r->setDefaultRoute("VerduleriaController", "showHome");

    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 


