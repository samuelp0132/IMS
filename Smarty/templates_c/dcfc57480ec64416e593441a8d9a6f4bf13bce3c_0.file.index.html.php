<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-05 22:47:00
  from 'C:\xampp2\htdocs\Smarty-Trunk\Smarty\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fcbffd4ba6ba8_47409048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcfc57480ec64416e593441a8d9a6f4bf13bce3c' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\Smarty-Trunk\\Smarty\\templates\\index.html',
      1 => 1607204818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fcbffd4ba6ba8_47409048 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">
<meta>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="./../assets/css/style.css">
</head>

<body><table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
    </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user', false, NULL, 'users', array (
));
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
    <tr>
        <th scope="row">1</th>
        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['nombre'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['apellido'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['telefono'];?>
</td>
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>


</body>

</html><?php }
}
