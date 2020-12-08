{include file="../header.tpl" title='Agregar Usuario'}
<div class="container">
        <div class="col-md-8">
            <div class="div-dark">
                    <form id="agregar-usuarios-form" name="agregar-usuarios-form" method="post">
                        <h2 class="form-signin-heading">Formulario de Usuario</h2>
                        {if isset($alerts)}
                            {foreach name=alert from=$alerts item=alert}
                                <div class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-exclamation-sign'></span> {$alert}</div>
                            {/foreach}
                        {/if}

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputUsuario">Usuario</label>
                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="nombre" id="inputUsuario" placeholder="Ingresa tu Usuario" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputContrasena">Contraseña</label>
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="contrasena" id="inputContrasena" placeholder="Ingresa tu Contrasena" />
                            </div>
                        </div>

                        <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputNombre">Nombre</label>
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="nombre" id="inputNombre" placeholder="Ingresa tu nombre" />

                        </div>
                            <div class="form-group col-md-6">
                                <label for="inputApellido">Apellido</label>
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="apellido" id="inputApellido" placeholder="Ingresa tu apellido" />
                            </div>
                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail">Correo</label>
                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="email" id="inputEmail" placeholder="Ingresa tu correo" />

                        </div>
                            <div class="form-group col-md-6">
                                <label for="inputTelefono">Telefono</label>
                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="telefono" id="inputTelefono" placeholder="Ingresa tu telefono" />
                            </div>
                        </div>
                            <div class="form-group ">
                                <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Agregar</button>
                            </div>
                    </form>
                </div>

        </div>
</div>
</div>
{include file="../footer.tpl"}