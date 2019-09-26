<?php
include_once('./views/login.view.php');
include_once('./models/user.model.php');

class LoginController {
    private $view;
    private $model;


    public function __construct(){
        $this->view = new LoginView();
        $this->model = new UserModel();
    }

    
    public function showLogin(){
        $this->view->showLogin();
    }
    public function verifyAdmin(){
        $adminName = $_POST['adminName'];
        $password = $_POST['password'];

        $admin = $this->model->getByAdminName($adminName);

        if (!empty($adminName) && password_verify($password, $admin->password)) {
            
            // INICIO LA SESSION Y LOGUEO AL USUARIO
            session_start();
            $_SESSION['ID_ADMIN'] = $admin->idAdmin;
            $_SESSION['ADMIN'] = $admin->adminName;

            header('Location: home');
        } else {
            $this->view->showLogin("Login incorrecto");
        }
    }
    public function logout() {
        session_start();
        session_destroy();
        header('Location: ' . LOGIN);
    }
}