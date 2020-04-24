<?php
	/**
	* 
	*/
	class view
	{
		
		function __construct()
		{
			# code...
		}
		public function renderkonten($nama, $noInclude=false)
		{
			require 'view/'.$nama.'.php';
			require 'view/footer.php';
		}
		public function renderheader($nama, $noInclude=false){
			require 'view/'.$nama.'.php';
		}
		public function renderhomepage($nama, $noInclude=false)
		{
			require 'view/'.$nama.'.php';
		}

	}
?>