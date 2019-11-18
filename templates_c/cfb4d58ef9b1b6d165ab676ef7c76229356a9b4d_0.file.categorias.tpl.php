<?php
/* Smarty version 3.1.33, created on 2019-11-18 20:55:36
  from 'C:\xampp\htdocs\WEB-2\trabajo-practico-ej2\templates\categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd2f738ed8055_72204904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfb4d58ef9b1b6d165ab676ef7c76229356a9b4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB-2\\trabajo-practico-ej2\\templates\\categorias.tpl',
      1 => 1574102493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5dd2f738ed8055_72204904 (Smarty_Internal_Template $_smarty_tpl) {
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
            <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
            <td> <small><a href="deleteCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->idCategoria;?>
">Borrar</a></small> </td>
            <td> <small><a href="editarCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->idCategoria;?>
">Editar</a></small> </td>

            <?php }?>
        </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
<div class="container">
    <form action="addCategoria" method="POST" class="col-md-4 offset-md-4 mt-4">
        <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
     
        <div class="form-group">
            <label>Agregar</label>
            <input type="text" name="nombre" class="form-control" placeholder="categoria">
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
</div>      
<?php }?>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
