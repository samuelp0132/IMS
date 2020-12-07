<?php
    // including the necessary files
    include("../Smarty/libs/Smarty.class.php");
    include("./api/User.php");
    include("../Smarty/includes/Curl/CurlConfig.php");

    $html= new Smarty();
    $user = new User();

    if(isset($_GET['action']) == 'delete'){
    $userData = [
        "id" => $_GET['id'],
    ];
    //sending url to entity
    $user->setApiURL(CURL_DELETE_USERS_URL);

    //sending user data to entity
    $resultDeleteUser = $user->deleteUser($userData);

    $html->assign('alerts',$resultDeleteUser);
    header('Location:index.php');
}



