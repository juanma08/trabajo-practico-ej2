<?php

class usuariosModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=db_verduleria;charset=utf8', 'root', '');
    }

    /**
     * Retorna un usuario según el username pasado.
     */
    public function getByusuarioName($usuarioName) {
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE usuarioName = ?');
        $query->execute([$usuarioName]);

        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function save($usuarioName, $password, $dni)
    {   
        $query = $this->db->prepare('INSERT INTO usuarios(usuarioName, password, dni) VALUES (?,?,?)');
        $query->execute([$usuarioName, $password, $dni]);
    }

    public function newPassword($idUsuario, $password){
        
        $query = $this->db->prepare('UPDATE usuarios SET password = ? WHERE idUsuario = ?');
        $query->execute([$password, $idUsuario]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
}