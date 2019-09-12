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
}
