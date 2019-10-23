<?php
include_once('./models/verduleria.model.php');
include_once('./views/verduleria.view.php');
include_once('./models/categorias.model.php');
include_once('./helpers/auth.helper.php');

class VerduleriaController {
    private $model;
    private $view;
    private $modelCategorias;
    private $authHelper;
    
    public function __construct(){
        $this->model=new VerduleriaModel();
        $this->view=new VerduleriaView();
        $this->modelCategorias=new CategoriasModel();
        $this->authHelper = new AuthHelper();
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
        
        public function showEditProducto($params = null){
            $idProducto = $params [":ID"];
            $producto = $this->model->get($idProducto);
            $categorias =  $this->modelCategorias->getCategorias();
        if ($producto)
            $this->view->showEditProducto($producto, $categorias);
            else
            $this->view->showError('El producto no existe');
        }
        
        public function showEditCategoria($params = null){
            $idCategoria = $params [":ID"];
            $categoria = $this->modelCategorias->getCategoria($idCategoria);
            if ($categoria)            
            $this->view->showEditCategoria($categoria);
            else
            $this->view->showError('La categoria no existe');

            
        }
        


    public function editCategoria($params= null){
                   
         // chequea si esta logueado
        $this->authHelper->checkLoggedIn();
         
            $idCategoria = $_POST ['idCategoria'];
            $nombre = $_POST['edit'];
             
            if (!empty($nombre)) {
                $this->modelCategorias->editCategoria($nombre, $idCategoria);
                header('Location:' . CATEGORIAS);
                }
                else {
                    $this->view->showError("Faltan datos.");
                }
                header('Location:' . CATEGORIAS);
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
        
        
        // chequea si esta logueado
        $this->authHelper->checkLoggedIn();
        
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $categoria = $_POST['categoria'];
        
        if ((!empty($nombre )) && (!empty($precio)) && (!empty($descripcion)) && (!empty($categoria))) {
            
            $this->model->save($nombre, $precio, $descripcion, $categoria);
            header('Location:' . HOME);
        }
        else {
            $this->view->showError("Faltan datos.");
        }
    }  
    public function addCategoria(){
        
        // chequea si esta logueado
        $this->authHelper->checkLoggedIn();

        $nombre = $_POST['nombre'];

        if (!empty($nombre)) {
            
            $this->modelCategorias->save($nombre);
            header('Location:' . CATEGORIAS);
        }
        else {
            $this->view->showError("Faltan datos.");
        }
    }  
    public function deleteProducto($params= null){
        
        // chequea si esta logueado
        $this->authHelper->checkLoggedIn();

        $idProducto = $params [':ID'];
        $this->model->delete($idProducto);
        header("Location: " . HOME);
    }
    public function deleteCategoria($params= null){
         
        // chequea si esta logueado
        $this->authHelper->checkLoggedIn();

        $idCategoria = $params [':ID'];
        $this->modelCategorias->delete($idCategoria);
        header('Location:' . CATEGORIAS);


    }
    public function editProducto($params= null){
        
        // chequea si esta logueado
        $this->authHelper->checkLoggedIn(); 

        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $categoria = $_POST['categoria'];
        $idProducto = $_POST['idProducto'];
        
        if ((!empty($nombre )) && (!empty($precio)) && (!empty($descripcion)) && (!empty($categoria))) {
            
            $this->model->editProducto($nombre, $precio, $descripcion, $categoria, $idProducto);
            header('Location:' . HOME);
        }
        else {
            $this->view->showError("Faltan datos.");
        }
        
    }
}
