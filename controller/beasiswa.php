<?php
/**
* 
*/
class beasiswa extends controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		session::init();
	}

	//info
	function info(){
		$this->view->renderheader('operatorkemahasiswaan/headeroperatorkemahasiswaan');
		$this->view->renderkonten('operatorkemahasiswaan/infobeasiswa/info-bea-kmhs');
	}
	function showformcreate(){
		$this->view->renderheader('operatorkemahasiswaan/headeroperatorkemahasiswaan');
		$this->view->renderkonten('operatorkemahasiswaan/infobeasiswa/form-tbhbea');
	}
	function create(){
		$data=array();
		$data['jenisBeasiswa']=$_POST['jenisBeasiswa'];
		$data['namaBeasiswa']=$_POST['namaBeasiswa'];
		$data['persyaratanBeasiswa']=$_POST['persyaratanBeasiswa'];
		$data['tanggalAwalPendaftaran']=$_POST['tanggalAwalPendaftaran'];
		$data['tanggalAkhirPendaftaran']=$_POST['tanggalAkhirPendaftaran'];
		$data['deskripsi']=$_POST['deskripsi'];
		$this->model->createbeasiswa($data);
		header('location:'.URL.'beasiswa/info');
	}

	function penerima(){

	}
	function pendaftar(){

	}

}
?>