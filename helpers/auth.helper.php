<?php

class AuthHelper {
    public function __construct() {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
    }

    public function login($usuario) {
        // INICIO LA SESSION Y LOGUEO AL USUARIO
        session_start();
        $_SESSION['ID_USUARIO'] = $usuario->idUsuario;
        $_SESSION['USUARIO'] = $usuario->usuarioName;
        $_SESSION['ADMIN'] = $usuario->admin;
    }

    public function logout() {
        session_start();
        session_destroy();
    }

    public function checkLoggedIn() {
        session_start();
        if (!isset($_SESSION['USUARIO'])) {
            header('Location: ' . LOGIN);
            die();
        }       
    }

    public function checkAdmin() {
        if (!isset($_SESSION['ADMIN'])) {
            header('Location: ' . HOME);
            die();
        }
    }

    public function checkLoggedAdmin() {
        if (isset($_SESSION['ADMIN'])){           
            return $_SESSION['ADMIN'];
        }
        else return null;
    }

    public function getLoggedUsuarioName() {
        if (isset($_SESSION['USUARIO'])){           
            return $_SESSION['USUARIO'];
        }
        else return null;
    }

    public function getLoggedUsuarioId() {
        if (isset($_SESSION['ID_USUARIO'])){           
            return $_SESSION['ID_USUARIO'];
        }
        else return null;
    }
}