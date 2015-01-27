
<?php
class Controller
{
protected $model;
protected $view;
protected $params;;

protected $conf;

function __construct($params)
{

    $this->conf=Registry::getInstance();
    $this->params=$params;



    echo "from the parent...";
}

}            
            
        }