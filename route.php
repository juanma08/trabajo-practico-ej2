<?php
    require_once('controllers/login.controller.php');
    require_once('controllers/verduleria.controller.php');

    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", BASE_URL . 'login');
    define("HOME", BASE_URL . 'home');


    //si no viene un "action", definimos una por defecto
    if($_GET['action']=='')//Si action esta vacion, transformalo a home
        $_GET['action']='home';

    $partesURL = explode('/', $_GET['action']);//Declaro arreglo de partes y lo separo por cada '/' que haya en la url

    //La posicion 0 del arreglo partesURL es el action obtenido de la URL

    switch ($partesURL[0]) {//Se hace un swich para cada action.
        case 'login':
            $controller = new LoginController();
            $controller->showLogin();
            break;
        case 'verify':
            $controller = new LoginController();
            $controller->verifyAdmin();
            break;
        case 'home':
            $controller = new VerduleriaController();
            $controller->showHome();
            break;
        case 'producto':
            $controller = new VerduleriaController();
            $controller->showProducto($partesURL[1]);
            break;
        default:
            # code...
            break;
    }