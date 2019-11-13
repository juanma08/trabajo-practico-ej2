<?php
/* Smarty version 3.1.33, created on 2019-11-13 23:42:43
  from 'C:\xampp\htdocs\WEB-2\trabajo-practico-especial-api\trabajo-practico-ej2\templates\producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcc86e30444b7_66106129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7e9e7dec09afc1241e2cc13c14aa7b9438ef145' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB-2\\trabajo-practico-especial-api\\trabajo-practico-ej2\\templates\\producto.tpl',
      1 => 1573684961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5dcc86e30444b7_66106129 (Smarty_Internal_Template $_smarty_tpl) {
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

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
