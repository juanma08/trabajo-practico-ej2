<?php
/* Smarty version 3.1.33, created on 2019-11-27 19:39:30
  from 'C:\xampp\htdocs\WEB-2\trabajo-practico-ej2\templates\producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddec2e2a50e88_99334595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '029902eb2ef2451917537a640754657d5cbe51ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB-2\\trabajo-practico-ej2\\templates\\producto.tpl',
      1 => 1574878830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/vue/comentarios.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ddec2e2a50e88_99334595 (Smarty_Internal_Template $_smarty_tpl) {
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
<?php if ($_smarty_tpl->tpl_vars['producto']->value->imagen) {?>
<img src="<?php echo $_smarty_tpl->tpl_vars['producto']->value->imagen;?>
">
<?php }
if ($_smarty_tpl->tpl_vars['admin']->value && $_smarty_tpl->tpl_vars['producto']->value->imagen) {?>
<a href="deleteImg/<?php echo $_smarty_tpl->tpl_vars['producto']->value->idProducto;?>
">Eliminar imagen</a>
<?php }?>


<?php $_smarty_tpl->_subTemplateRender('file:templates/vue/comentarios.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
