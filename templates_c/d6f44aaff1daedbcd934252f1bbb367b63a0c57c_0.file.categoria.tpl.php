<?php
/* Smarty version 3.1.33, created on 2019-11-27 03:26:47
  from 'C:\xampp\htdocs\WEB-2\trabajo-practico-especial-api\trabajo-practico-ej2\templates\categoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddddee7760568_64357158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6f44aaff1daedbcd934252f1bbb367b63a0c57c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB-2\\trabajo-practico-especial-api\\trabajo-practico-ej2\\templates\\categoria.tpl',
      1 => 1571859864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ddddee7760568_64357158 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1> <?php echo $_smarty_tpl->tpl_vars['categoria']->value->Nombre;?>
</h1>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
