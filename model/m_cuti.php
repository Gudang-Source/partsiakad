<?php

/**
* 
*/
class m_cuti extends model
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}
	function createbeasiswa(){

		$statement=$this->db->prepare("INSERT INTO tb_beasiswa VALUES (null,".$data['jenisBeasiswa'].",".$data['namaBeasiswa'].",'".$data['persyaratanBeasiswa']."',".$data['tanggalAwalPendaftaran'].",".$data['tanggalAkhirPendaftaran'].",".$data['deskripsi'].")");
		$statement->execute();
	}
}
?>