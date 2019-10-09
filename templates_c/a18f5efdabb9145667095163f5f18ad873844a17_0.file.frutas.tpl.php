<?php
/* Smarty version 3.1.33, created on 2019-10-10 01:40:13
  from 'C:\xampp\htdocs\WEB-2\trabajo-practico-ej2\templates\frutas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9e6fdd9c6b13_09632358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a18f5efdabb9145667095163f5f18ad873844a17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB-2\\trabajo-practico-ej2\\templates\\frutas.tpl',
      1 => 1570664409,
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
function content_5d9e6fdd9c6b13_09632358 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

<table>
    <tr>
        <th>
         Fruta
        </th>
        <th>
         Precio
        </th>
        <th>
         Descripcion
        </th>
    </tr>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['frutas']->value, 'fruta');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fruta']->value) {
?>
        
		<tr>			
			<td><?php echo $_smarty_tpl->tpl_vars['fruta']->value->Nombre;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['fruta']->value->Precio;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['fruta']->value->Descripcion;?>
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
