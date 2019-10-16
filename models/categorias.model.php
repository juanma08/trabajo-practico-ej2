<?php
class CategoriasModel{

    private $db;//declaro variable q va a contener la conexion
    public function __construct(){
        $this->db = new PDO ('mysql:host=localhost;dbname=db_verduleria;charset=utf8', 'root', '');
        //Guardo la conexion en la variable.
    }

    public function getCategorias(){
        $query = $this->db->prepare("SELECT * FROM categorias");
        $query -> execute();
        return $query -> fetchAll(PDO::FETCH_OBJ);

    }
    public function getCategoria($idCategoria){
        $query = $this->db->prepare('SELECT * FROM categorias WHERE idCategoria= ?');
        $query->execute([$idCategoria]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
    public function save($nombre){
        
        $query = $this->db->prepare('INSERT INTO categorias(idCategoria, Nombre) VALUES (?,?)');
        var_dump($query->errorInfo($nombre, $precio));
        $query->execute([$idCategoria, $nombre]);
    }
    public function delete($idCategoria){
        $query = $this->db->prepare('DELETE FROM categorias WHERE idCategoria = ?');
        var_dump($idCategoria);
        $query->execute([$idCategoria]);

    }
    














}