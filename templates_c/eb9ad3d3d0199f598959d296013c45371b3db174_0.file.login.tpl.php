<?php
/* Smarty version 3.1.33, created on 2019-10-15 18:25:28
  from 'C:\xampp\htdocs\WEB-2\TrabajoPracticoEspecialOriginal\trabajo-practico-ej2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da5f2f89213e5_05604599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb9ad3d3d0199f598959d296013c45371b3db174' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB-2\\TrabajoPracticoEspecialOriginal\\trabajo-practico-ej2\\templates\\login.tpl',
      1 => 1571011010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5da5f2f89213e5_05604599 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <form action="verify" method="POST" class="col-md-4 offset-md-4 mt-4">
        <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

        <div class="form-group">
            <label>Usuario </label>
            <input type="text" name="adminName" class="form-control" placeholder="Ingrese email">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>

        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
        <?php }?>

        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>

</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
