<?php
/* Smarty version 3.1.33, created on 2019-10-16 06:14:53
  from 'C:\xampp\htdocs\Web2\trabajo-practico-ej2\templates\categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da6993d9af2e8_06609362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad9051fcb974d79049b29670817714f7728efafc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\trabajo-practico-ej2\\templates\\categorias.tpl',
      1 => 1571199214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/formCategorias.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5da6993d9af2e8_06609362 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

<table>
    <tr>
        <th>
         Categoria
        </th>
    </tr>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
        
		<tr>			
			<td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->Nombre;?>
</td>
						
            <td> <small><a href="categoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->idCategoria;?>
">Ver mas</a></small> </td>
            <?php if ($_smarty_tpl->tpl_vars['adminName']->value) {?>
            <td> <small><a href="deleteCategorias/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->idCategoria;?>
">Borrar</a></small> </td>

            <td> <small><a href="editCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->idCategoria;?>
">Editar</a></small> </td>

            <?php }?>
        </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<?php if ($_smarty_tpl->tpl_vars['adminName']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:templates/formCategorias.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  
<?php }?>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
