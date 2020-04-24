<?php
/**
* 
*/
class matkul extends controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		session::init();
	}
	function index(){
		$this->view->matkulList=$this->model->getMatkul();
		$this->view->renderheader('operatorpssi/headeroperator');
		$this->view->renderkonten('operatorpssi/matakuliah/v_matakuliah_list');
	}

	function showformcreate(){
		$this->view->renderheader('operatorpssi/headeroperator');
		$this->view->renderkonten('operatorpssi/matakuliah/v_matakuliah_form');	
	}
	function showformedit($id){
		$this->view->matkulSingleList=$this->model->getSingleMatkul($id);
		$this->view->renderheader('operatorpssi/headeroperator');
		$this->view->renderkonten('operatorpssi/matakuliah/v_matakuliah_formedit');	
	}
	function create(){
		$data=array();
		$data['kodeMatkul']=$_POST['kodeMatkul'];
		$data['namaMatkul']=$_POST['namaMatkul'];
		$data['jumlahSKS']=$_POST['jumlahSKS'];
		$data['tipeJenis']=$_POST['tipeJenis'];
		$data['tipeSemester']=$_POST['tipeSemester'];
		$data['tipeSharing']=$_POST['tipeSharing'];
		$this->model->createMatkul($data);
		header('location:'.URL.'matkul');
	}
	function editSave($id){
		$data=array();
		$data['idMatkul']=$id;
		$data['kodeMatkul']=$_POST['kodeMatkul'];
		$data['namaMatkul']=$_POST['namaMatkul'];
		$data['jumlahSKS']=$_POST['jumlahSKS'];
		$data['tipeJenis']=$_POST['tipeJenis'];
		$data['tipeSemester']=$_POST['tipeSemester'];
		$data['tipeSharing']=$_POST['tipeSharing'];
		$this->model->editSaveMatkul($data);
		header('location:'.URL.'matkul');
	}
	function delete($id){
		$this->model->deleteMatkul($id);
		header('location:'.URL.'matkul');
	}
}
?>