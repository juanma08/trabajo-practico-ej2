<?php
/* Smarty version 3.1.33, created on 2019-10-23 21:20:04
  from 'C:\xampp\htdocs\Web2\trabajo-practico-ej2\templates\producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db0a7e426ea05_28019669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25e8e052326bcbc36710cbe31d1b32240fdb0a64' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\trabajo-practico-ej2\\templates\\producto.tpl',
      1 => 1571858400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5db0a7e426ea05_28019669 (Smarty_Internal_Template $_smarty_tpl) {
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

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
