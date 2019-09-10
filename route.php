<?php
    require_once('controllers/verduleria.controller.php');

    //si no viene un "action", definimos una por defecto
    if($_GET['action']=='')//Si action esta vacion, transformalo a home
        $_GET['action']='home';

    $partesURL = explode('/', $_GET['action']);//Declaro arreglo de partes y lo separo por cada '/' que haya en la url

    //La posicion 0 del arreglo partesURL es el action obtenido de la URL

    switch ($partesURL[0]) {//Se hace un swich para cada action.
        case 'home':
            $controller = new VerduleriaController();
            $controller->showHome();
            break;
        
        default:
            # code...
            break;
    }