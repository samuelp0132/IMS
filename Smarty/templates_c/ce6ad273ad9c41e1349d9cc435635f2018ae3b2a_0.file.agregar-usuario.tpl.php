<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-06 17:48:11
  from 'C:\xampp2\htdocs\Smarty-Trunk\Smarty\templates\users\agregar-usuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fcd0b4bbd2fa6_80784355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce6ad273ad9c41e1349d9cc435635f2018ae3b2a' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\Smarty-Trunk\\Smarty\\templates\\users\\agregar-usuario.tpl',
      1 => 1607272184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:../footer.tpl' => 1,
  ),
),false)) {
function content_5fcd0b4bbd2fa6_80784355 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Agregar Usuario'), 0, false);
?>
<div class = "container" >
<form id="agregar-usuarios-form" name="agregar-usuarios-form" method="post">
    <?php if ((isset($_smarty_tpl->tpl_vars['alerts']->value))) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['alerts']->value, 'alert', false, NULL, 'alert', array (
));
$_smarty_tpl->tpl_vars['alert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->do_else = false;
?>
        <div class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-exclamation-sign'></span> <?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
</div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    <div id="demo_div"></div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputNombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="inputNombre" placeholder="Nombre">
        </div>
        <div class="form-group col-md-6">
            <label for="inputApellido">Apellido</label>
            <input type="text" class="form-control" name="apellido" id="inputApellido" placeholder="Apellido">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
            <label for="inputTelefono">Telefono</label>
            <input type="text" class="form-control" name="telefono" id="inputTelefono" placeholder="Telefono">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Agregar</button>
</form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
