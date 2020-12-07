{include file="../header.tpl" title='Ver Usuarios'}
<div class = "container" id="tabla-usuarios">
    {if isset($alerts)}
        {foreach name=alert from=$alerts item=alert}
            <div class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-exclamation-sign'></span> {$alert}</div>
        {/foreach}
    {/if}
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

    {if isset($users)}
    {foreach name=users from=$users item=user}
    <tr>
        <th scope="row">{$user.id}</th>
        <td>{$user.nombre}</td>
        <td>{$user.apellido}</td>
        <td>{$user.email}</td>
        <td>{$user.telefono}</td>
        <td><button type="button" data-id="{$user.id}" id="agregar-usuario-btn" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Editar</button></td>
        <td><a class="btn btn-danger btn-sm" href="deleteUser.php?action=delete&id={$user.id}">Eliminar</a></td>

    </tr>
    {/foreach}
    {/if}
    </tbody>
</table>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Actualizacion de Usuario</h4>
                </div>
                <div class="modal-body">
                    <div class = "container" >
                    <form id="actualizar-usuarios-form" name="agregar-usuarios-form" method="post" action="updateUser.php">
                        <div class="form-row">
                            <input id="userID" name="id"  value="" hidden/>
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
                        <button type="submit" name="" class="btn btn-primary ">Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{include file="../footer.tpl"}
?>
