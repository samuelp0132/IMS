<?php
include("../Curl/Curl.php");
include("../Curl/CurlConfig.php");
include("../Smarty/libs/Smarty.class.php");


public class api extends Smarty {

    public function __construct()
    {
        $this->setTemplateDir( dirname(dirname(__DIR__)). DIRECTORY_SEPARATOR .'Smarty'. DIRECTORY_SEPARATOR .'templates');
    }
}