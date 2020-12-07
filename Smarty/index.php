    <?php
    // including the necessary files
    include("../Smarty/libs/Smarty.class.php");
    include("./api/User.php");
    include("../Smarty/includes/Curl/CurlConfig.php");


    $html= new Smarty();
    $user = new User();

    //sending url to entity
    $user->setApiURL(CURL_READ_USERS_URL);

    // retriving users
    $resultGetUsers = $user->getUsers();

    // array index validation
    // checking retrived data is correct to the view
    if(isset($resultGetUsers['data'])) {
        $html->assign('users',$resultGetUsers['data']);
    }else{
        $html->assign('alerts',$resultGetUsers['message']);
    }

    $html->display('users/usuarios.tpl');



