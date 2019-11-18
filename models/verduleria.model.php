<?php
class VerduleriaModel{
    private $db;//declaro variable q va a contener la conexion
    public function __construct(){
        $this->db = new PDO ('mysql:host=localhost;dbname=db_verduleria;charset=utf8', 'root', '');
        //Guardo la conexion en la variable.
    }
    public function getAll(){//Hago funcion que va a usar el view y el controller para imprimir toda la tabla
        $query = $this->db->prepare("SELECT productos.Nombre, productos.Precio, productos.Descripcion, productos.idProducto, categorias.Nombre as Categoria FROM productos JOIN categorias ON productos.idCategoria = categorias.idCategoria");
        $query -> execute();
        return $query -> fetchAll(PDO::FETCH_OBJ);
    }
 
    
    public function get($idProducto){
        $query = $this->db->prepare('SELECT productos.Nombre, productos.Precio, productos.Descripcion, productos.idProducto,productos.imagen, categorias.Nombre as Categoria FROM productos JOIN categorias ON productos.idCategoria = categorias.idCategoria  WHERE idProducto = ? ');
        $query->execute([$idProducto]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
    public function save($nombre, $precio, $descripcion, $idCategoria, $img = null){
        $pathImg = null;
        if ($img)
            $pathImg = $this->uploadImage($img);


        $query = $this->db->prepare('INSERT INTO productos(Nombre, Precio, Descripcion, idCategoria, imagen) VALUES (?,?,?,?,?)');        
        $query->execute([$nombre, $precio, $descripcion, $idCategoria, $pathImg]);
        $lastInsertId = $this->db->lastInsertId();
        return $this->get($lastInsertId);
    }
    private function uploadImage($img){
        $target = "img/producto/" . uniqid() . "." . strtolower(pathinfo($img['name'], PATHINFO_EXTENSION));  
        move_uploaded_file($img['tmp_name'], $target);
        return $target;
    }
    public function delete($idProducto){
        $query = $this->db->prepare('DELETE FROM productos WHERE idProducto = ?');
        $query->execute([$idProducto]);   
    }
    public function editProducto($nombre, $precio, $descripcion, $categoria, $idProducto){
        
        $query = $this->db->prepare('UPDATE productos SET Nombre = ?, Precio = ?, Descripcion = ?, idCategoria = ? WHERE idProducto = ? ');
        $query->execute([$nombre, $precio, $descripcion, $categoria, $idProducto]);
    }

 }