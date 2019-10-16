<?php
include_once('./models/verduleria.model.php');
include_once('./views/verduleria.view.php');
include_once('./models/categorias.model.php');

class VerduleriaController {
    private $model;
    private $view;
    private $modelCategorias;
    
    public function __construct(){
        $this->model=new VerduleriaModel();
        $this->view=new VerduleriaView();
        $this->modelCategorias=new CategoriasModel();
    }
    public function showHome(){
        $productos = $this->model->getAll();
        $categorias =  $this->modelCategorias->getCategorias();
        $this->view->showHome($productos, $categorias);
    }
    public function showProducto($params = null){
        $idProducto = $params [":ID"];
        $producto = $this->model->get($idProducto);
        if ($producto)
            $this->view->showProducto($producto);
        else
            $this->view->showError('El producto no existe');
    }
    public function showCategorias(){
        $categorias = $this->modelCategorias->getCategorias();
        $this->view->showCategorias($categorias);

    }

    public function showCategoria($params = null){
        $idCategoria = $params [":ID"];
        $categoria = $this->modelCategorias->getCategoria($idCategoria);
        $this->view->showCategoria($categoria);
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
    public function addCategoria(){
        $nombre = $_POST['nombre'];

        if (!empty($nombre)) {
            
            $this->modelCategorias->save($nombre);
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
    public function deleteCategoria($params= null){
        $idCategoria = $params [':ID'];
        $this->modelCategorias->delete($idCategoria);
        

    }
    public function editCategoria($params= null){
        $nombre = $_POST['edit'];
        $idCategoria = $params [':ID'];

        if (!empty($nombre)) {
            
            $this->modelCategorias->editCategoria($nombre, $idCategoria);

        }
        else {
            $this->view->showError("Faltan datos.");
        }
        
    }
    public function editProducto($params= null){
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $categoria = $_POST['categoria'];
        $idProducto = $params [':ID'];

        if ((!empty($nombre )) && (!empty($precio)) && (!empty($descripcion)) && (!empty($categoria))) {
            
            $this->model->editProducto($nombre, $precio, $descripcion, $categoria, $idProducto);

        }
        else {
            $this->view->showError("Faltan datos.");
        }
        
    }
}
