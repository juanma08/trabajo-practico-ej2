<?php
/* Smarty version 3.1.33, created on 2019-11-25 01:16:52
  from 'C:\xampp\htdocs\WEB-2\trabajo-practico-especial-api\trabajo-practico-ej2\templates\editProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddb1d7459f6a5_42254346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e67c219dc32c492ae1d8812e36852bacbcb820b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB-2\\trabajo-practico-especial-api\\trabajo-practico-ej2\\templates\\editProducto.tpl',
      1 => 1571859864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ddb1d7459f6a5_42254346 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1> <?php echo $_smarty_tpl->tpl_vars['producto']->value->Nombre;?>
</h1>

<table>
    <tr>
        <th>
         Precio
        </th>
        <th>
         Descripcion
        </th>
        <th>
         Categoria
        </th>
    </tr>        
		<tr>			
			<td><?php echo $_smarty_tpl->tpl_vars['producto']->value->Precio;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['producto']->value->Descripcion;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['producto']->value->Categoria;?>
</td>			
        </tr>
</table>





 <div class="container">
    <form action="editProducto" method="POST" class="col-md-4 offset-md-4 mt-4">
        <h1>Editar</h1>
     
        <div class="form-group">
            <label>Producto</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->Nombre;?>
">
        </div>

        <div class="form-group">
            <label>Precio </label>
            <input type="number" name="precio" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->Precio;?>
">
        </div>

        <div class="form-group">
            <label> Descripcion </label>
            <input type="text" name="descripcion" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->Descripcion;?>
">
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
        <div>
        <input type="hidden" name="idProducto" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->idProducto;?>
">
        <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>

</div>         

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
