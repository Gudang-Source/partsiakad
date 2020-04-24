<?php
/**
* 
*/
class homepage extends Controller
{
	
	function __construct()
	{
		# code...
		# 
		parent::__construct();
		session::init();

	}
	function index(){
		$this->view->renderhomepage('v_homepage2');
	}
	function todashboard(){
		header('location:'.URL.'dashboard');
	}
}
?>