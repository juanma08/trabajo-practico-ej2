<?php
require_once('libs/Smarty.class.php');


class LoginView {
    private $smarty;
    private $authHelper;

    public function __construct(){
        $this->smarty = new Smarty();
        $this->authHelper = new AuthHelper();
        $usuarioName = $this->authHelper->getLoggedusuarioName();
        $this->smarty->assign('basehref', BASE_URL);
        $this->smarty->assign('usuarioName', $usuarioName);
    }

    public function showLogin($error = null){
        $this->smarty->assign('titulo', 'Iniciar sesion');
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/login.tpl');
    }
    
}