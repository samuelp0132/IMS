<body>
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
    {foreach name=users from=$users item=user}
    <tr>
        <th scope="row">{$user.id}</th>
        <td>{$user.nombre}</td>
        <td>{$user.apellido}</td>
        <td>{$user.email}</td>
        <td>{$user.telefono}</td>
    </tr>
    {/foreach}
    </tbody>
</table>
</div>
