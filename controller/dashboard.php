<?php
/**
* 
*/
class dashboard extends controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		session::init();
		$logged=session::get('loggedIn');
		
	}
	function index(){
		$userlevel=session::get('userLevel');
		if($userlevel=='operator'){
			$this->view->renderheader('operatorpssi/headeroperator');
			$this->view->renderkonten('operatorpssi/v_dashboardoperator');
		} elseif($userlevel=='dosen'){
			$this->view->renderheader('dosen/headerdosen');
			$this->view->renderkonten('dosen/v_dashboarddosen');
		} elseif($userlevel=='mahasiswa'){
			$this->view->renderheader('mahasiswa/headermahasiswa');
			$this->view->renderkonten('mahasiswa/v_dashboardmahasiswa');
		} elseif($userlevel=='operatormahasiswa'){
			$this->view->renderheader('operatorkemahasiswaan/headeroperatorkemahasiswaan');
			$this->view->renderkonten('operatorkemahasiswaan/v_dashboardoperatorkemahasiswaan');
		} elseif($userlevel=='sekretaris1'){
			$this->view->renderheader('sekretaris1/headersekretaris1');
			$this->view->renderkonten('sekretaris1/v_dashboardsekretaris1');
		} elseif($userlevel=='kaprodi'){
			$this->view->renderheader('kaprodi/headerkaprodi');
			$this->view->renderkonten('kaprodi/v_dashboardkaprodi');
		} elseif($userlevel=='baak'){
			$this->view->renderheader('baak/headerbaak');
			$this->view->renderkonten('baak/v_dashboardbaak');
		} elseif($userlevel=='sekretaris3'){
			$this->view->renderheader('sekretaris3/headersekretaris3');
			$this->view->renderkonten('sekretaris3/v_dashboardsekretaris3');
		} elseif($userlevel=='kombi'){
			$this->view->renderheader('kombi/headerkombi');
			$this->view->renderkonten('kombi/v_dashboardkombi');
		}

	}
}
?>