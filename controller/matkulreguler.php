<?php
/**
* 
*/
class matkulreguler extends controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		session::init();
	}

	//index
	function index(){
		$this->view->tahunAkademikList=$this->model->getTahunAkademik();
		$this->view->matkulRegulerList=$this->model->getMatkulReguler();
		$this->view->renderheader('operatorpssi/headeroperator');
		$this->view->renderkonten('operatorpssi/matakuliahreguler/v_matakuliahreguler_pengajuan');
	}

	//pengajuan
	function data($id_tahunakademik){
		$this->view->tahunAkademikList=$this->model->getTahunAkademik();
		$this->view->matkulRegulerList=$this->model->getMatkulRegulerPerPeriode($id_tahunakademik);
		$this->view->renderheader('operatorpssi/headeroperator');
		$this->view->renderkonten('operatorpssi/matakuliahreguler/v_matakuliahreguler_pengajuan');
	}
	function showadd(){
		$this->view->matkulList=$this->model->getMatkul();
		$this->view->renderheader('operatorpssi/headeroperator');
		$this->view->renderkonten('operatorpssi/matakuliahreguler/v_matakuliahreguler_pengajuan_add');	
	}
	function add($id){
		$this->model->addMatkulReguler($id);
		header('location:'.URL.'matkulreguler');
	}
	function delete($id){
		$this->model->deleteMatkulReguler($id);
		header('location:'.URL.'matkulreguler');
	}

}
?>