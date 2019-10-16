<?php
/* Smarty version 3.1.33, created on 2019-10-14 04:09:20
  from 'C:\xampp\htdocs\WEB-2\TrabajoPracticoEspecialOriginal\trabajo-practico-ej2\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da3d8d095c1a2_11826346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd39193d45385cef4e61b75dabd1f5ab7d747c7a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB-2\\TrabajoPracticoEspecialOriginal\\trabajo-practico-ej2\\templates\\productos.tpl',
      1 => 1571011010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/formAdmin.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5da3d8d095c1a2_11826346 (Smarty_Internal_Template $_smarty_tpl) {
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

      <?php $_smarty_tpl->_subTemplateRender('file:templates/formAdmin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>             
<?php }?>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
