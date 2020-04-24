<?php
	/**
	* 
	*/
	class login extends controller
	{
		
		function __construct()
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

			$this->view->renderhomepage('v_homepageloginfail3');
		}
		function logout(){
			session::destroy();
			header('location:../homepage');
			exit;
		}
	}
?>