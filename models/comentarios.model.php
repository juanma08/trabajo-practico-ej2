<?php

class comentariosModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=db_verduleria;charset=utf8', 'root', '');
    }
    public function get($idProducto){
       
            $query = $this->db->prepare('SELECT * FROM comentarios WHERE fk_id_producto = ?');
            $query->execute([$idProducto]);
            return $query->fetchAll(PDO::FETCH_OBJ);
        
    }
    public function save($puntaje, $usuario, $comentario, $producto){
        $query = $this->db->prepare('INSERT INTO comentarios(puntaje,fk_id_usuario, comentario, fk_id_producto) VALUES(?,?,?,?)');

        $query->execute([ $puntaje, $usuario, $comentario, $producto]);
        return $this->db->lastInsertId();

    }
    public function getComentario($idComentario){
       
        $query = $this->db->prepare('SELECT * FROM comentarios WHERE idComentario = ?');
        $query->execute([$idComentario]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    
}
}
