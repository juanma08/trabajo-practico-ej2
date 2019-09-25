<?php
require('libs/Smarty.class.php');
class VerduleriaView {

    public function showHome($productos) {
                        
                        $smarty = new Smarty();
                        $smarty->assign('titulo',"Lista de productos");
                        $smarty->assign('productos',$productos);
                        $smarty->display('templates/productos.tpl');     
                        
        
    }
    public function showProducto($producto) {
        $smarty = new Smarty();
        $smarty->assign('titulo',"Producto");
        $smarty->assign('producto',$producto);
        $smarty->display('templates/producto.tpl');     
        
    }   



    




    }
