<?php
/* Smarty version 3.1.33, created on 2019-11-26 20:11:51
  from 'C:\xampp\htdocs\WEB-2\trabajo-practico-ej2\templates\users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddd78f75292f8_62410054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8944982df46bdda0d00835d7ec7757d2020d0a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB-2\\trabajo-practico-ej2\\templates\\users.tpl',
      1 => 1574113235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ddd78f75292f8_62410054 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table>
    <tr>
        <th>
         Usuario
        </th>
        <th>
         Admin
        </th>
    </tr>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
        
		<tr>			
			<td><?php echo $_smarty_tpl->tpl_vars['user']->value->usuarioName;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['user']->value->admin;?>
</td>	
            <?php if ($_smarty_tpl->tpl_vars['user']->value->admin) {?>
            <td> <small><a href="permiso/<?php echo $_smarty_tpl->tpl_vars['user']->value->idUsuario;?>
">Quitar permiso de admin</a></small> </td>    
                
            <?php } else { ?>
            <td> <small><a href="permiso/<?php echo $_smarty_tpl->tpl_vars['user']->value->idUsuario;?>
">Dar permiso de admin</a></small> </td>  
            <?php }?>
            <td> <small><a href="deleteUsuario/<?php echo $_smarty_tpl->tpl_vars['user']->value->idUsuario;?>
">Eliminar usuario</a></small> </td>  	
                	
                     
        </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
