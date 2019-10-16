<?php
/* Smarty version 3.1.33, created on 2019-10-16 18:20:11
  from 'C:\xampp\htdocs\PEDRO\trabajo-practico-ej2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da7433bc06375_95157293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa7389bbe41e30c6ba165d981d719ff35021c983' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PEDRO\\trabajo-practico-ej2\\templates\\header.tpl',
      1 => 1571242742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da7433bc06375_95157293 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>
<body>

    <ul class="nav nav-pills">
    <li class="nav-item">
        <a class="nav-link active" href="home">Locasso</a>
    </li>
    <li>
        <a class="nav-link" href="categorias">Categorias</a>
    </li>
            <?php if ($_smarty_tpl->tpl_vars['adminName']->value) {?>
                <div class="navbar-nav ml-auto">
                    <span class="navbar-text"><?php echo $_smarty_tpl->tpl_vars['adminName']->value;?>
</span>
                    <a class="nav-item nav-link" href="logout">LOGOUT</a>
                </div>
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['adminName']->value) {?>
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="login">LOGIN</a>
            </div>                 
            <?php }?>
        
    </ul>
<?php }
}
