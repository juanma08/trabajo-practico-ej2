<?php

class AuthHelper {
    public function __construct() {}

    public function login($admin) {
        // INICIO LA SESSION Y LOGUEO AL USUARIO
        session_start();
        $_SESSION['ID_ADMIN'] = $admin->idAdmin;
        $_SESSION['ADMIN'] = $admin->adminName;
    }

    public function logout() {
        session_start();
        session_destroy();
    }

    public function checkLoggedIn() {
        session_start();
        if (!isset($_SESSION['ID_ADMIN'])) {
            header('Location: ' . LOGIN);
            die();
        }       
    }

    public function getLoggedAdminName() {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
        return $_SESSION['ADMIN'];
    }
}