<?php
class VerduleriaModel{
    private $db;
    public function __construct(){
        $this->db = new PDO ('mysql:host=localhost;dbname=db_verduleria;charset=utf8', 'root', '');

    }
    public function getAll(){
        $query = $this->db->prepare("SELECT * FROM productos");
        $query -> execute();
        return $query -> fetchAll(PDO::FETCH_OBJ);
    }
}