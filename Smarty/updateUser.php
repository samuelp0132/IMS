<?php
// including the necessary files
include("../Smarty/libs/Smarty.class.php");
include("../Smarty/includes/Curl/Curl.php");
include("../Smarty/includes/Curl/CurlConfig.php");

$html= new Smarty();

if($_POST){
    $userData = [
        "id" => $_POST['id'],
        "nombre" => $_POST['nombre'],
        "apellido" => $_POST['apellido'],
        "email" => $_POST['email'],
        "telefono" => $_POST['telefono'],
    ];
    $url = "index.php";
    $result_curl_read = Curl::curlPost(CURL_UPDATE_USERS_URL,$userData);
    $html->assign('alerts',$result_curl_read['message']);
    if($result_curl_read){
        $html->display('users/usuarios.tpl');
    }
}
