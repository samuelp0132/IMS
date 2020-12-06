<?php
// including the necessary files
include("../Smarty/libs/Smarty.class.php");
include("../Smarty/includes/Curl/Curl.php");
include("../Smarty/includes/Curl/CurlConfig.php");



$html= new Smarty();



if($_POST){
    $userData = [
        "nombre" => $_POST['nombre'],
        "apellido" => $_POST['apellido'],
        "email" => $_POST['email'],
        "telefono" => $_POST['telefono'],
    ];

    $result_curl_read = Curl::curlPost(CURL_CREATE_USERS_URL,$userData);
    $html->assign('alerts',$result_curl_read['message']);
}


$html->display('users/agregar-usuario.tpl');
