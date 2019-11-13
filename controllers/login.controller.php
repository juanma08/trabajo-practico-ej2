<?php
include_once('./views/login.view.php');
include_once('./models/usuarios.model.php');
include_once('./helpers/auth.helper.php');

class LoginController {

    private $view;
    private $model;
    private $authHelper;

    public function __construct(){
        $this->view = new LoginView();
        $this->model = new UsuariosModel();
        $this->authHelper = new AuthHelper();
    }
    
    public function showLogin(){
        $this->view->showLogin();
    }

    public function verifyusuario(){
        $usuarioName = $_POST['usuarioName'];
        $password = $_POST['password'];

        $usuario = $this->model->getByusuarioName($usuarioName);
               
        if ((!empty($usuario)) && (password_verify($password, $usuario->password))) {
            
            $this->authHelper->login($usuario);
            
            header('Location: home');
        } else {
            $this->view->showLogin("Login incorrecto");
        }
    }
    public function logout() {
        $this->authHelper->logout();
        header('Location: ' . HOME);
    }
}