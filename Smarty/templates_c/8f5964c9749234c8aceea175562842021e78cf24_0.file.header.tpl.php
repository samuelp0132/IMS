<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-06 17:17:58
  from 'C:\xampp2\htdocs\Smarty-Trunk\Smarty\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fcd0436811ca3_64319770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f5964c9749234c8aceea175562842021e78cf24' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\Smarty-Trunk\\Smarty\\templates\\header.tpl',
      1 => 1607270701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fcd0436811ca3_64319770 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">
<head >
    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? 'SmaryCrudIntec' : $tmp);?>
</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="templates/css/nav.menu.css">
    <link rel="stylesheet" href="templates/css/style.css">
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.css">


</head>
<body>
<div class="sidenavmenu">
    <a href="smarty/../addUser.php">Crear Usuario</a>
    <a href="smarty/../index.php">Ver Usuarios</a>
</div>
<div class="main">


<?php }
}
