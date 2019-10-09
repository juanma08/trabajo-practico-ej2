<?php
    require_once('controllers/login.controller.php');
    require_once('controllers/verduleria.controller.php');
    require_once('Router.php');
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", BASE_URL . 'login');
    define("HOME", BASE_URL . 'home');

    $r = new Router();
    $r->addRoute('login', 'GET', 'LoginController', 'showLogin');
    $r->addRoute('verify', 'POST', 'LoginController', 'verifyAdmin');
    $r->addRoute('home', 'GET', 'VerduleriaController', 'showHome');
    $r->addRoute('producto/:ID', 'GET', 'VerduleriaController', 'showProducto');
    $r->addRoute('logout', 'GET', 'LoginController', 'logout');
    $r->addRoute('addProducto', 'POST', "VerduleriaController", 'addProducto');
    $r->addRoute('delete/:ID', 'GET', 'VerduleriaController', 'deleteProducto');
    $r->addRoute('categoriaFruta','GET', 'VerduleriaController', 'showFrutas');
    $r->addRoute('categoriaVerdura','GET', 'VerduleriaController', 'showVerduras');

    
    $r->setDefaultRoute("VerduleriaController", "showHome");

    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 


