<?php
include_once('./views/login.view.php');
include_once('./models/admins.model.php');
include_once('./helpers/auth.helper.php');

class LoginController {

    private $view;
    private $model;
    private $authHelper;

    public function __construct(){
        $this->view = new LoginView();
        $this->model = new AdminsModel();
        $this->authHelper = new AuthHelper();
    }
    
    public function showLogin(){
        $this->view->showLogin();
    }

    public function verifyAdmin(){
        $adminName = $_POST['adminName'];
        $password = $_POST['password'];

        $admin = $this->model->getByAdminName($adminName);
        var_dump($admin->password);
        var_dump(password_hash($password, PASSWORD_DEFAULT));
        var_dump($password);
        if ((!empty($adminName)) && (password_verify($password, $admin->password))) {
            var_dump("Llegoo");
            $this->authHelper->login($admin);
            
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