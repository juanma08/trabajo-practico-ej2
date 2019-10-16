<?php
/* Smarty version 3.1.33, created on 2019-10-16 04:18:38
  from 'C:\xampp\htdocs\WEB-2\TrabajoPracticoEspecialOriginal\trabajo-practico-ej2\templates\formCategorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da67dfe5463a7_48676820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '175a08cb2a57c2ab61532a0082cbab3d0a44bd8c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB-2\\TrabajoPracticoEspecialOriginal\\trabajo-practico-ej2\\templates\\formCategorias.tpl',
      1 => 1571192275,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da67dfe5463a7_48676820 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <form action="addCategoria" method="POST" class="col-md-4 offset-md-4 mt-4">
        <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
     
        <div class="form-group">
            <label>Categoria</label>
            <input type="text" name="nombre" class="form-control" placeholder="categoria">
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>

</div><?php }
}
