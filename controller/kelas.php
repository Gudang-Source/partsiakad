<?php
/**
* 
*/
class kelas extends controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		session::init();
	}
	function index(){
		$this->view->kelasList=$this->model->getKelas();
		$this->view->renderheader('operatorpssi/headeroperator');
		$this->view->renderkonten('operatorpssi/kelas/v_kelas_list');
	}

	function show(){
		$this->view->kelasList=$this->model->getKelas();
		$this->view->renderheader('operatorpssi/headeroperator');
		$this->view->renderkonten('operatorpssi/kelas/v_kelas_list');	
	}
	function showformcreate(){
		$this->view->renderheader('operatorpssi/headeroperator');
		$this->view->renderkonten('operatorpssi/kelas/v_kelas_form');	
	}
	function create(){
		$this->view->renderheader('operatorpssi/headeroperator');
		$this->view->renderkonten('operatorpssi/kelas/v_kelas_list');	
	}
}
?>