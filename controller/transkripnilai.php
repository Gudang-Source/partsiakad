<?php
/**
* 
*/
class transkripnilai extends controller
{
	
	function __construct(argument)
	{
		# code...
	 	parent::__construct();
		session::init();
	}
	function index(){
			$this->view->renderhomepage('v_homepage');
		}
	function run(){
		$this->model->run();
	}
	function fail(){
		$this->view->renderhomepage('v_homepageloginfail');
	}
}

?>