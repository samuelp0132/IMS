{include file="../header.tpl" title='Agregar Usuario'}
<div class = "container" >
<form id="agregar-usuarios-form" name="agregar-usuarios-form" method="post">
    {if isset($alerts)}
    {foreach name=alert from=$alerts item=alert}
        <div class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-exclamation-sign'></span> {$alert}</div>
    {/foreach}
    {/if}
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
{include file="../footer.tpl"}