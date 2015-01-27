<?php 

 ini_set('display_errors','on');
 
    define('DS',DIRECTORY_SEPARATOR);
    define('ROOT',realpath(dirname(__FILE__)).DS);//    practica8/
    define('APP',ROOT.'app'.DS);//     practica8/app/
    define('APP_W',basename($_SERVER['SCRIPT_NAME']));





    
    require 'sys/core.php';
    require "sys/helper.php";
        require "sys/config.php";




    Core::init();