<?php
/* Smarty version 3.1.33, created on 2019-09-19 03:42:25
  from 'C:\xampp\htdocs\WEB-2\trabajo-practico-ej2\templates\producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d82dd013a5137_31836561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '029902eb2ef2451917537a640754657d5cbe51ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB-2\\trabajo-practico-ej2\\templates\\producto.tpl',
      1 => 1568857343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5d82dd013a5137_31836561 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\WEB-2\\trabajo-practico-ej2\\libs\\plugins\\modifier.mb_wordwrap.php','function'=>'smarty_modifier_mb_wordwrap',),));
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1> <?php echo $_smarty_tpl->tpl_vars['producto']->value->Nombre;?>
 (<?php echo $_smarty_tpl->tpl_vars['producto']->value->Descripcion;?>
)</h1>
<p><?php echo smarty_modifier_mb_wordwrap($_smarty_tpl->tpl_vars['producto']->value->Precio,50,"<br/>\n",false);?>
 </p>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
