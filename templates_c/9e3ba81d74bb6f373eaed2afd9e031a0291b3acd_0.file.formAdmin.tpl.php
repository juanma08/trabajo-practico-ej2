<?php
/* Smarty version 3.1.33, created on 2019-10-16 05:37:16
  from 'C:\xampp\htdocs\WEB-2\TrabajoPracticoEspecialOriginal\trabajo-practico-ej2\templates\formAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da6906c157a03_86662680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e3ba81d74bb6f373eaed2afd9e031a0291b3acd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB-2\\TrabajoPracticoEspecialOriginal\\trabajo-practico-ej2\\templates\\formAdmin.tpl',
      1 => 1571196717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da6906c157a03_86662680 (Smarty_Internal_Template $_smarty_tpl) {
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
        
		
            <select name="categoria">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
                <option value=<?php echo $_smarty_tpl->tpl_vars['categoria']->value->idCategoria;?>
><?php echo $_smarty_tpl->tpl_vars['categoria']->value->Nombre;?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>

</div><?php }
}
