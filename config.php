<?php
define('APP_BASE_PATH', dirname(__FILE__));

$dir =  getcwd();

if ($dir == "projetoDiegao") {
    $APP_IMAGE_PATH =  'img/';
}else{
    $APP_IMAGE_PATH = '../img/';
}


$APP_CSS_PATH = APP_BASE_PATH . '/css/';
$APP_JAVASCRIPT_PATH = APP_BASE_PATH . '/js/';
$APP_PAGES_PATH = APP_BASE_PATH . '/pages/';
$APP_SHARED_PATH = APP_BASE_PATH . '/shared/';


?>