<?php
define('APP_BASE_PATH', dirname(__FILE__));

$dir =  getcwd();
$dir = substr($dir, -5);

if ($dir == "pages") {
    $APP_IMAGE_PATH =  '../img/';
    $APP_CSS_PATH = '../css/';
    $APP_JAVASCRIPT_PATH = '../js/';
    $APP_PAGES_PATH = '../pages/';
    $APP_SHARED_PATH = APP_BASE_PATH . '../shared/';
    $APP_HOME_PATH = '../';
} else {
    $APP_IMAGE_PATH = 'img/';
    $APP_CSS_PATH = 'css/';
    $APP_JAVASCRIPT_PATH = 'js/';
    $APP_PAGES_PATH = 'pages/';
    $APP_SHARED_PATH = APP_BASE_PATH . '/shared/';
    $APP_HOME_PATH = '';
}
