<?php
// including the necessary files
include("../Smarty/libs/Smarty.class.php");
include("./api/User.php");
include("../Smarty/includes/Curl/CurlConfig.php");

$html= new Smarty();
$user = new User();
if($_POST){
    $userData = [
        "id" => $_POST['id'],
        "nombre" => $_POST['nombre'],
        "apellido" => $_POST['apellido'],
        "email" => $_POST['email'],
        "telefono" => $_POST['telefono'],
    ];

    //sending url to entity
    $user->setApiURL(CURL_UPDATE_USERS_URL);

    //sending user data to entity
    $resultUpdateUser = $user->updateUser($userData);

    if($resultUpdateUser){
        Header('Location:index.php');
    }
}
