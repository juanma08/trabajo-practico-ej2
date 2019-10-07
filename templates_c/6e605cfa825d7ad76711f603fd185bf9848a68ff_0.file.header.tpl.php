<?php
/* Smarty version 3.1.33, created on 2019-10-07 02:53:25
  from 'C:\xampp\htdocs\WEB-2\trabajo-practico-ej2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9a8c859f1097_89460105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e605cfa825d7ad76711f603fd185bf9848a68ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB-2\\trabajo-practico-ej2\\templates\\header.tpl',
      1 => 1570409604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9a8c859f1097_89460105 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <a class="navbar-brand" href="home">Locasso</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="home">Productos</a>
            </div>
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
        </div>
    </nav><?php }
}
