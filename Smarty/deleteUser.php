<?php
// including the necessary files
include("../Smarty/libs/Smarty.class.php");
include("../Smarty/includes/Curl/Curl.php");
include("../Smarty/includes/Curl/CurlConfig.php");



$html= new Smarty();

if(isset($_GET['action']) == 'delete'){
    $userData = [
        "id" => $_GET['id'],
    ];
    $url = "index.php";
    $result_curl_delete = Curl::curlPost(CURL_DELETE_USERS_URL,$userData);
    $html->assign('alerts',$result_curl_delete['message']);
    header('Location:'.$url);
}



