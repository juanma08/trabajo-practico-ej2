<?php

class AdminsModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=db_verduleria;charset=utf8', 'root', '');
    }

    /**
     * Retorna un usuario según el username pasado.
     */
    public function getByAdminName($adminName) {
        $query = $this->db->prepare('SELECT * FROM admins WHERE adminName = ?');
        $query->execute(array($adminName));

        return $query->fetch(PDO::FETCH_OBJ);
    }

}