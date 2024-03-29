<?php
require_once("./models/comentarios.model.php");
require_once("./api/json.view.php");

class comentariosApiController{
    private $view;
    private $model;
    private $data;


    public function __construct(){
        $this->model= new comentariosModel();
        $this->view= new JSONView();
        $this->data= file_get_contents("php://input");
    }
    private function getData() {
        return json_decode($this->data); //convierte el RAW en JSON
    }
    public function getComentarios($params = null)
    {
        $idProducto = $params [":ID"];
        $comentarios = $this->model->get($idProducto);
        $this->view->response($comentarios, 200);
    }
    public function addComentario(){
        $data=$this->getData();
        $idComentario=$this->model->save($data->puntaje, $data->fk_id_usuario, $data->comentario, $data->fk_id_producto);
        if ($idComentario){
            $comentario = $this->model->getComentario($idComentario);
            $this->view->response($comentario, 200);
        }
        else
        $this->view->response("El comentario no ha sido agregado", 404);
    }

    public function deleteComentario($params = null){
        $idComentario = $params [":ID"];
        $comentario = $this->model->getComentario($idComentario);
        if($comentario){
            $this->model->delete($idComentario);
            $this->view->response("Borrado exitoso", 200);
        }
        else{
            $this->view->response("El comentario no existe", 404);
        }
    }
}