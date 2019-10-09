<?php
include_once('./models/verduleria.model.php');
include_once('./views/verduleria.view.php');

class VerduleriaController {
    private $model;
    private $view;
    
    public function __construct(){
        $this->model=new VerduleriaModel();
        $this->view=new VerduleriaView();
    }
    public function showHome(){
        $productos = $this->model->getAll();

        $this->view->showHome($productos);
    }
    public function showProducto($params = null){
        $idProducto = $params [":ID"];
        $producto = $this->model->get($idProducto);
        if ($producto)
            $this->view->showProducto($producto);
        else
            $this->view->showError('El producto no existe');
    }
    public function showFrutas(){
        $frutas= $this->model->getAllFrutas();
        $this->view->showFrutas($frutas);
    }

    public function addProducto(){
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $categoria = $_POST['categoria'];

        if ((!empty($nombre )) && (!empty($precio)) && (!empty($descripcion)) && (!empty($categoria))) {
            
            $this->model->save($nombre, $precio, $descripcion, $categoria);
            header('Location:' . home);
        }
        else {
            $this->view->showError("Faltan datos.");
        }
    }   
    public function deleteProducto($params= null){
        $idProducto = $params [':ID'];
        $this->model->delete($idProducto);
        
    }
}
