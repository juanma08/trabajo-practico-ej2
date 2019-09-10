<?php
include_once('models/veruleria.model.php');
include_once('models/veruleria.view.php');

class VerduleriaController {
    private $model;
    private $view;
    
    public function __construct(){
        $this->model=new VerduleriaModel();
        $this->view=new VerduleriaView();
    }
    public function showHome(){
        $productos = $this->model->getAll();

        $this->view->showHome($tareas);
    }
}
