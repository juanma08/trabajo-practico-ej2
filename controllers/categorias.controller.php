<?php
include_once('./models/categorias.model.php');
include_once('./views/verduleria.view.php');
include_once('./helpers/auth.helper.php');

class categoriasController {
    private $model;
    private $authHelper;
    private $view;

    public function __construct(){
        $this->view=new VerduleriaView();
        $this->model=new CategoriasModel();
        $this->authHelper = new AuthHelper();
    }
    public function showEditCategoria($params = null){
        $idCategoria = $params [":ID"];
        $categoria = $this->model->getCategoria($idCategoria);
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
            $this->model->editCategoria($nombre, $idCategoria);
            header('Location:' . CATEGORIAS);
            }
            else {
                $this->view->showError("Faltan datos.");
            }
            header('Location:' . CATEGORIAS);
    }

    public function showCategorias(){
        $categorias = $this->model->getCategorias();
        $this->view->showCategorias($categorias);
    
    }

    public function showCategoria($params = null){
        $idCategoria = $params [":ID"];
        $categoria = $this->model->getCategoria($idCategoria);
        $this->view->showCategoria($categoria);
    }
    public function addCategoria(){
        
        // chequea si esta logueado
        $this->authHelper->checkLoggedIn();

        $nombre = $_POST['nombre'];

        if (!empty($nombre)) {
        
            $this->model->save($nombre);
            header('Location:' . CATEGORIAS);
        }
        else {
            $this->view->showError("Faltan datos.");
        }
    }
    public function deleteCategoria($params= null){
         
        // chequea si esta logueado
        $this->authHelper->checkLoggedIn();

        $idCategoria = $params [':ID'];
        $this->model->delete($idCategoria);
        header('Location:' . CATEGORIAS);
    }  
}