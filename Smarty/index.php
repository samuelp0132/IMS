<?php
// including the necessary files
include("../Smarty/libs/Smarty.class.php");
include("../Smarty/includes/Curl/Curl.php");
include("../Smarty/includes/Curl/CurlConfig.php");


$result_curl_read = Curl::curlGet(CURL_READ_USERS_URL);
$html= new Smarty();
$html->assign('users', $result_curl_read['data']);
$html->display('index.html');


