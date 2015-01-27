<?php  
class Home extends Controller{
function __construct($params){


	parent::__construct($params);
	$this->conf=Registry::getInstance();

	$this->model=new mHome;
		$this->view=new vHome;

}


}
 
