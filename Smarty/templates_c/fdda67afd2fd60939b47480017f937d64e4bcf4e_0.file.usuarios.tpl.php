<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-06 18:23:19
  from 'C:\xampp2\htdocs\Smarty-Trunk\Smarty\templates\users\usuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fcd1387add6f4_96299169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdda67afd2fd60939b47480017f937d64e4bcf4e' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\Smarty-Trunk\\Smarty\\templates\\users\\usuarios.tpl',
      1 => 1607275399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:../footer.tpl' => 1,
  ),
),false)) {
function content_5fcd1387add6f4_96299169 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Ver Usuarios'), 0, false);
?>
<div class = "container" id="tabla-usuarios">
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
    <table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Email</th>
        <th scope="col">Telefono</th>
    </tr>
    </thead>
    <tbody>
    <?php if ((isset($_smarty_tpl->tpl_vars['users']->value))) {?>
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
        <td><button type="button" data-id="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" id="agregar-usuario-btn" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Editar</button></td>
        <td><a class="btn btn-info btn-sm" href="deleteUser.php?action=delete&id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">Eliminar</a></td>

    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    </tbody>
</table>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Actualizacion de Usuario</h4>
                </div>
                <div class="modal-body">
                    <div class = "container" >
                    <form id="actualizar-usuarios-form" name="agregar-usuarios-form" method="post" action="updateUser.php">
                        <div class="form-row">
                            <input id="userID" name="id"  value="" />
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

                        <button type="submit" name="update-user" class="btn btn-primary ">Actualizar</button>
                    </form>
                </div>
            </div>
            </div>

        </div>
    </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '?>';?>

<?php }
}
