<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-06 01:57:45
  from 'C:\xampp2\htdocs\Smarty-Trunk\Smarty\templates\users\users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fcc2c892273b4_74042845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50291604e910c4e18e3a0cd94a2093bcd3d9c02a' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\Smarty-Trunk\\Smarty\\templates\\users\\users.tpl',
      1 => 1607213807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fcc2c892273b4_74042845 (Smarty_Internal_Template $_smarty_tpl) {
?><body>
<div class = "container" id="tabla-usuarios">
    <table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Email</th>
        <th scope="col">Telefono</th>
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
        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</th>
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
</div>
<?php }
}
