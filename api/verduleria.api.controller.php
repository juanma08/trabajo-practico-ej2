<?php
require_once("./models/verduleria.model.php");
require_once("./api/json.view.php");

class verduleriaApiController {

    private $model;
    private $view;
    private $data;

    public function __construct() {
        $this->model = new VerduleriaModel();
        $this->view = new JSONView();
        $this->data = file_get_contents("php://input"); //agarra el body en RAW
    }

    private function getData() {
        return json_decode($this->data); //convierte el RAW en JSON
    }

    public function getProductos($params = null)
    {
        $productos = $this->model->getAll();
        $this->view->response($productos, 200);
    }

    public function getProducto($params = null)
    {
        $idProducto = $params [":ID"];
        $producto = $this->model->get($idProducto);
        if ($producto)
            $this->view->response($producto, 200);
        else
            $this->view->response("El producto con el id={$idProducto} no existe", 404);
    }

    public function addProducto($params = null)
    {
        
        $data=$this->getData();
        $producto=$this->model->save($data->Nombre, $data->Precio, $data->Descripcion, $data->idCategoria);
        if ($producto)
            $this->view->response($producto, 200);
        else
            $this->view->response("la tarea no fue creada", 404);
      
    }

    public function deleteProducto($params= null)
    {
        $idProducto = $params [':ID'];
        $this->model->delete($idProducto);
    }
}