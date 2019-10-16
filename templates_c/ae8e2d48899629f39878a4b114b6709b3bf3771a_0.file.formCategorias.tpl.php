<?php
/* Smarty version 3.1.33, created on 2019-10-16 06:14:53
  from 'C:\xampp\htdocs\Web2\trabajo-practico-ej2\templates\formCategorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da6993da54258_47845761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae8e2d48899629f39878a4b114b6709b3bf3771a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\trabajo-practico-ej2\\templates\\formCategorias.tpl',
      1 => 1571199214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da6993da54258_47845761 (Smarty_Internal_Template $_smarty_tpl) {
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
