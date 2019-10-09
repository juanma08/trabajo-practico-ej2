<?php
require_once('libs/Smarty.class.php');
class VerduleriaView {

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('basehref', BASE_URL);
        $this->authHelper = new AuthHelper();
        $adminName = $this->authHelper->getLoggedAdminName();
        $this->smarty->assign('adminName', $adminName);
    }

    public function showFrutas($frutas){
        
        $this->smarty->assign('titulo',"Lista de frutas");
        $this->smarty->assign('frutas',$frutas);
        $this->smarty->display('templates/frutas.tpl');

    }

    public function showHome($productos) {
                        
        $this->smarty->assign('titulo',"Lista de productos");
        $this->smarty->assign('productos',$productos);
        $this->smarty->display('templates/productos.tpl');     
                        
        
    }
    public function showProducto($producto) {
        $this->smarty->assign('titulo',"Producto");
        $this->smarty->assign('producto',$producto);
        $this->smarty->display('templates/producto.tpl');     
        
    }  
    public function showError() {
        echo "<h1>ERROR!</h1>";
    }



    




    }
