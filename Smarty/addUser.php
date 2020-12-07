<?php
    // including the necessary files
    include("./libs/Smarty.class.php");
    include("./api/User.php");
    include("./includes/Curl/CurlConfig.php");


    $html= new Smarty();
    $user = new User();

    // form post request
    if($_POST){

    $userData = [
        "nombre" => $_POST['nombre'],
        "apellido" => $_POST['apellido'],
        "email" => $_POST['email'],
        "telefono" => $_POST['telefono'],
    ];

    //sending url to entity
    $user->setApiURL(CURL_CREATE_USERS_URL);

    //sending user data to entity
    $resultAddUser = $user->addUser($userData);


    $html->assign('alerts',$resultAddUser);

}
    $html->display('users/agregar-usuario.tpl');
