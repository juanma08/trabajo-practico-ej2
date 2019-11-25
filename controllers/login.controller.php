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

    public function showSingin()
    {
        $this->view->showSingin();
    }

    public function newUser(){

        $usuarioName = $_POST['usuarioName'];
        $password = $_POST['password'];
        $dni = $_POST['dni'];

        if ((!empty($usuarioName)) && (!empty($password)) && (!empty($dni))) {
            $usuario = $this->model->getByusuarioName($usuarioName);
            if (!$usuario) {
                $passwordCrypt = password_hash($password, PASSWORD_DEFAULT);
                $this->model->save($usuarioName, $passwordCrypt, $dni);
                $newUsuario = $this->model->getByusuarioName($usuarioName);
                $this->authHelper->login($newUsuario);
                header('Location: home');
            }
            else {
                $this->view->showSingin("Nombre de usuario ya existente");
            }
        }
        else {
            $this->view->showSingin("Faltan datos.");
        }
    }

    public function verifyUser(){
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

    public function forgetPassword(){
        $this->view->forgetPassword();
    }

    public function newPassword(){

        $usuarioName = $_POST['usuarioName'];
        $dni = $_POST['dni'];
        $password = $_POST['password'];

        if ((!empty($usuarioName)) && (!empty($dni)) && (!empty($password))) {
            
            $usuario = $this->model->getByusuarioName($usuarioName);
            var_dump($usuario);
            if ((!empty($usuario)) && ($dni == $usuario->DNI)){
                $passwordCrypt = password_hash($password, PASSWORD_DEFAULT);
                $success = $this->model->newPassword($usuario->idUsuario, $passwordCrypt);
                if (success) {
                
                    header('Location: ' . LOGIN);
                } else $this->view->forgetPassword("error");
            } else {
                $this->view->forgetPassword("Usuario o DNI incorrecto");
            }
        } else {
            $this->view->forgetPassword("Faltan datos");
        }
    }
    public function showUsers(){
        $this->authHelper->checkAdmin(); 
        $users = $this->model->getUsers();
        $this->view->showUsers($users);
    }
    public function permiso($params= null){
        $this->authHelper->checkAdmin(); 
        $idUsuario = $params [':ID'];
        $user = $this->model->get($idUsuario);
        if ($user->admin) {
            $this->model->admin($idUsuario, 0);
            header('Location: ' . USERS);
            
        }
        else {
            $this->model->admin($idUsuario, 1);
            header('Location: ' . USERS);

        }

    }
    public function deleteUser($params= null){
        $this->authHelper->checkAdmin(); 
        $idUsuario = $params [':ID'];
        $user = $this->model->delete($idUsuario);
        header("Location: " . USERS);

    }

}