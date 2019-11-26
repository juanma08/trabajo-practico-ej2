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
    
    public function addProducto(){
        
        if ($this->authHelper->checkAdmin()) {

        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $idCategoria = $_POST['categoria'];
        
        if ((!empty($nombre )) && (!empty($precio)) && (!empty($descripcion)) && (!empty($idCategoria))) {
            if($_FILES['img']['type'] == "image/jpg" || $_FILES['img']['type'] == "image/jpeg" 
            || $_FILES['img']['type'] == "image/png" ){
                $this->model->save($nombre, $precio, $descripcion, $idCategoria, $_FILES['img']);
                header('Location:' . HOME);

            }
            else {
                $this->model->save($nombre, $precio, $descripcion, $idCategoria);
            header('Location:' . HOME);
            }
        }
        else {
            $this->view->showError("ERROR");
            
    }
    }
    }  
 
    public function deleteProducto($params= null){
        
        // chequea si es admin
        $this->authHelper->checkAdmin();

        $idProducto = $params [':ID'];
        $this->model->delete($idProducto);
        header("Location: " . HOME);
    }

    public function deleteImagen($params= null){
        
        // chequea si es admin
        $this->authHelper->checkAdmin();

        $idProducto = $params [':ID'];
        $this->model->deleteImg($idProducto);
        header("Location: " . HOME);
    }

    public function editProducto($params= null){
        
        // chequea si es admin
        $this->authHelper->checkAdmin(); 

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
