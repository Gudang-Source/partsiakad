<?php
/**
* 
*/
class m_matkul extends model
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}
	function getMatkul(){
		$statement=$this->db->prepare('SELECT * FROM tb_matakuliah tbmk 
			join tb_sharing tbs on tbmk.id_sharing=tbs.id_sharing 
			join tb_jenismatkul tbjm on tbmk.id_jenis_matkul=tbjm.id_jenis_matkul 
			join tb_statussemester tbss on tbmk.id_status_semester=tbss.id_status_semester');
		$statement->execute();
		return $statement->fetchAll();
	}
	function getSingleMatkul($id){
		$statement=$this->db->prepare('SELECT * FROM tb_matakuliah tbmk 
			join tb_sharing tbs on tbmk.id_sharing=tbs.id_sharing 
			join tb_jenismatkul tbjm on tbmk.id_jenis_matkul=tbjm.id_jenis_matkul 
			join tb_statussemester tbss on tbmk.id_status_semester=tbss.id_status_semester where id_matkul='.$id);
		$statement->execute();
		return $statement->fetch();
	}
		
	function createMatkul($data){
		$statement=$this->db->prepare("INSERT INTO tb_matakuliah VALUES (null,'".$data['kodeMatkul']."',".$data['tipeSemester'].",'".$data['namaMatkul']."',".$data['jumlahSKS'].",".$data['tipeJenis'].",".$data['tipeSharing'].",1)");
		$statement->execute();

	}
	function editSaveMatkul($data){
		$statement=$this->db->prepare("UPDATE tb_matakuliah SET kode_matkul= '".$data['kodeMatkul']."', id_status_semester=".$data['tipeSemester'].", nama_matkul='".$data['namaMatkul']."',jumlah_sks=".$data['jumlahSKS'].", id_jenis_matkul=".$data['tipeJenis'].", id_sharing=".$data['tipeSharing']." 	WHERE id_matkul=".$data['idMatkul']);
		$statement->execute();
	}
	function deleteMatkul($id){
		$statement=$this->db->prepare("DELETE FROM tb_matakuliah where id_matkul=".$id);
		$statement->execute();	
	}
	function getTahunAkademik(){
		$statement=$this->db->prepare("SELECT * FROM tb_tahunakademik");
		$statement->execute();
		return $statement->fetchAll();
	}
}
?>