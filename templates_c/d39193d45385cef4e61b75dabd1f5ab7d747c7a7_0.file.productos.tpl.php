<?php
/* Smarty version 3.1.33, created on 2019-10-16 16:29:03
  from 'C:\xampp\htdocs\WEB-2\TrabajoPracticoEspecialOriginal\trabajo-practico-ej2\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da7292f4f1e47_40470091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd39193d45385cef4e61b75dabd1f5ab7d747c7a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB-2\\TrabajoPracticoEspecialOriginal\\trabajo-practico-ej2\\templates\\productos.tpl',
      1 => 1571235981,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5da7292f4f1e47_40470091 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

<table>
    <tr>
        <th>
         Producto
        </th>
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
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
        
		<tr>			
			<td><?php echo $_smarty_tpl->tpl_vars['producto']->value->Nombre;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['producto']->value->Precio;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['producto']->value->Descripcion;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['producto']->value->Categoria;?>
</td>			
            <td> <small><a href="producto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->idProducto;?>
">Ver mas</a></small> </td>
            <?php if ($_smarty_tpl->tpl_vars['adminName']->value) {?>
            <td> <small><a href="delete/<?php echo $_smarty_tpl->tpl_vars['producto']->value->idProducto;?>
">Borrar</a></small> </td>
            <?php }?>
        </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<?php if ($_smarty_tpl->tpl_vars['adminName']->value) {?>

      <div class="container">
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

</div>           
   <div class="container">
    <form action="editProducto" method="POST" class="col-md-4 offset-md-4 mt-4">
        <h1>Editar</h1>
     
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
            <label> Producto </label>
        
		
            <select name="categoria">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
                <option value=<?php echo $_smarty_tpl->tpl_vars['producto']->value->idProducto;?>
><?php echo $_smarty_tpl->tpl_vars['producto']->value->Nombre;?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Editar</button>
    </form>

</div>         
<?php }?>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
