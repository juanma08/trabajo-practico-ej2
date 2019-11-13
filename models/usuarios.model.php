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
        $query->execute(array($usuarioName));

        return $query->fetch(PDO::FETCH_OBJ);
    }

}