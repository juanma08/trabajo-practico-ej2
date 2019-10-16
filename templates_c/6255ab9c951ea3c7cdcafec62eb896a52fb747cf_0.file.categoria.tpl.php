<?php
/* Smarty version 3.1.33, created on 2019-10-16 01:36:12
  from 'C:\xampp\htdocs\WEB-2\TrabajoPracticoEspecialOriginal\trabajo-practico-ej2\templates\categoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da657ec0cd819_23629004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6255ab9c951ea3c7cdcafec62eb896a52fb747cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB-2\\TrabajoPracticoEspecialOriginal\\trabajo-practico-ej2\\templates\\categoria.tpl',
      1 => 1571182545,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5da657ec0cd819_23629004 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1> <?php echo $_smarty_tpl->tpl_vars['categoria']->value->Nombre;?>
</h1>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
