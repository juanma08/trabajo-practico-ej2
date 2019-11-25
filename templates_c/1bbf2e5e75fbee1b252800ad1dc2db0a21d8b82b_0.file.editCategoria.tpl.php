<?php
/* Smarty version 3.1.33, created on 2019-11-25 01:16:33
  from 'C:\xampp\htdocs\WEB-2\trabajo-practico-especial-api\trabajo-practico-ej2\templates\editCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddb1d61a12206_95722814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bbf2e5e75fbee1b252800ad1dc2db0a21d8b82b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB-2\\trabajo-practico-especial-api\\trabajo-practico-ej2\\templates\\editCategoria.tpl',
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
function content_5ddb1d61a12206_95722814 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1> <?php echo $_smarty_tpl->tpl_vars['categoria']->value->Nombre;?>
</h1>

<div class="container">
    <form method="POST"  action="editCategoria" class="col-md-4 offset-md-4 mt-4">
        <h1>Categoria</h1>
     
        <div class="form-group">
            <label>Editar</label>
            <input type="text" name="edit" class="form-control" placeholder="Nombre">
        </div>
        <input type="checkbox" name="idCategoria" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->idCategoria;?>
">Estoy seguro
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>

</div> 

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
