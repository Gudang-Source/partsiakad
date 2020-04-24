<?php
/**
* 
*/
class cuti extends controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		session::init();
	}

	//info
	function cutimhs(){
		$this->view->renderheader('mahasiswa/headermahasiswa');
		$this->view->renderkonten('mahasiswa/cuti/cuti');
	}

	function formcuti(){
		$this->view->renderheader('mahasiswa/headermahasiswa');
		$this->view->renderkonten('mahasiswa/cuti/form-cuti');
	}

}
?>