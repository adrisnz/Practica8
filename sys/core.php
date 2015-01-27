<?php 
require 'sys/request.php';
class Core{

static private $controller;
static private $action;
static private $params=array();
static function init()
{

echo 'Hola, im adria';
Request::retrieve();
self::$params=Request::getParam();


}


static function router(){
        request::retrieve();
        $route=request::getCont();
        $action=request::getAct();


           if(self::$controller!="")

           	{self::$controller='home';
          }

           if(self::$action!=""){self::$action='home';}
            
Coder::code($route);
            $fileroute=strtolower($route).'.php';
         

            if(is_readable(APP.'controller'.DS.$fileroute)){

  self::$controller=new $route(self::$params);


  call_user_func(array(self::$controller, $action));

            }else{
                self::$controller=new Error;
                
            }

}
}

 ?>