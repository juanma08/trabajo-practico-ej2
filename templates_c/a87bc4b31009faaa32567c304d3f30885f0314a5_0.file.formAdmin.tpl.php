<?php
/* Smarty version 3.1.33, created on 2019-10-07 03:55:12
  from 'C:\xampp\htdocs\WEB-2\trabajo-practico-ej2\templates\formAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9a9b001d3873_53068018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a87bc4b31009faaa32567c304d3f30885f0314a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB-2\\trabajo-practico-ej2\\templates\\formAdmin.tpl',
      1 => 1570413309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9a9b001d3873_53068018 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <form action="addProducto" method="POST" class="col-md-4 offset-md-4 mt-4">
        <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
     
        <div class="form-group">
            <label>Producto</label>
            <input type="text" name="nombre" class="form-control" placeholder="producto">
        </div>

        <div class="form-group">
            <label>Precio </label>
            <input type="number" name="precio" class="form-control" placeholder="precio">
        </div>

        <div class="form-group">
            <label> Descripcion </label>
            <input type="text" name="descripcion" class="form-control" placeholder="descripcion">
        </div>
        
        <div class="form-group">
            <label> Categoria </label>
            <select name="categoria" >
                <option value="1">Fruta</option>
                <option value="2">Verdura</option>


            </select>
        </div>

        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>

</div><?php }
}
