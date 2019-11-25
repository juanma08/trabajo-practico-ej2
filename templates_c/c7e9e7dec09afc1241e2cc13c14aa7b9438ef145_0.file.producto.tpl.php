<?php
/* Smarty version 3.1.33, created on 2019-11-25 01:15:52
  from 'C:\xampp\htdocs\WEB-2\trabajo-practico-especial-api\trabajo-practico-ej2\templates\producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddb1d38f023d4_69152971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7e9e7dec09afc1241e2cc13c14aa7b9438ef145' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB-2\\trabajo-practico-especial-api\\trabajo-practico-ej2\\templates\\producto.tpl',
      1 => 1574286429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ddb1d38f023d4_69152971 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1> <?php echo $_smarty_tpl->tpl_vars['producto']->value->Nombre;?>
 </h1>
<h3> Descripcion: <?php echo $_smarty_tpl->tpl_vars['producto']->value->Descripcion;?>
 </h2>
<h3> Categoria: <?php echo $_smarty_tpl->tpl_vars['producto']->value->Categoria;?>
 </h2>
<h2> Precio: <?php echo $_smarty_tpl->tpl_vars['producto']->value->Precio;?>
</h2>
<img src="<?php echo $_smarty_tpl->tpl_vars['producto']->value->imagen;?>
" alt="">

<form action="">

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
</form>
    
    <table>
        <tr>
            <th>
                Usuario
            </th>
            <th>
                Comentario
            </th>
            <th>
                Puntuacion
            </th>
        </tr>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comentarios']->value, 'comentario');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comentario']->value) {
?>
        
		<tr>			
			<td><?php echo $_smarty_tpl->tpl_vars['comentario']->value->usuarioName;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['comentario']->value->comentario;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['comentario']->value->puntuacion;?>
</td>
            <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
            <td> <small><a href="delete/<?php echo $_smarty_tpl->tpl_vars['producto']->value->idProducto;?>
">Borrar</a></small> </td>
            <?php }?>
        </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>





<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
