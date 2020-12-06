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
        <th scope="col">#</th>
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
        <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Editar</button></td>
        <td><a href="deleteUser.php?action=delete&id={$user.id}">Eliminar</a></td>

    </tr>
    {/foreach}
    {/if}
    </tbody>
</table>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    </div>
{include file="../footer.tpl"}
?>
