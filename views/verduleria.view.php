<?php
require_once('libs/Smarty.class.php');
class VerduleriaView {

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('basehref', BASE_URL);
        $this->authHelper = new AuthHelper();
        $usuarioName = $this->authHelper->getLoggedusuarioName();
        $admin = $this->authHelper->checkAdmin();
        $this->smarty->assign('usuarioName', $usuarioName);
        $this->smarty->assign('admin', $admin);
    }


    public function showHome($productos, $categorias) {
                        
        $this->smarty->assign('titulo',"Lista de productos");
        $this->smarty->assign('productos',$productos);
        $this->smarty->assign('categorias',$categorias);

        $this->smarty->display('templates/productos.tpl');     
                        
        
    }
    public function showEditProducto($producto, $categorias){
        $this->smarty->assign('titulo',"editProducto");
        $this->smarty->assign('producto',$producto);
        $this->smarty->assign('categorias',$categorias);
        $this->smarty->display('templates/editProducto.tpl');  
    }
    public function showProducto($producto) {
        $this->smarty->assign('titulo',"Producto");
        $this->smarty->assign('producto',$producto);
        $this->smarty->display('templates/producto.tpl');     
        
    }  
    public function showCategorias($categorias) {
        $this->smarty->assign('titulo',"Categorias");
        $this->smarty->assign('categorias',$categorias);
        $this->smarty->display('templates/categorias.tpl');     
        
    }  
    public function showCategoria($categoria) {
        $this->smarty->assign('titulo',"Categoria");
        $this->smarty->assign('categoria',$categoria);
        $this->smarty->display('templates/categoria.tpl');     
        
    }
    
    public function showEditCategoria($categoria){
        $this->smarty->assign('titulo',"editCategoria");
        $this->smarty->assign('categoria',$categoria);
        $this->smarty->display('templates/editCategoria.tpl');  
    }
    public function showError() {
        echo "<h1>ERROR!</h1>";
    }

    





    }
