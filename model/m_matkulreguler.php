<?php

/**
* 
*/
class m_matkulreguler extends model
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}
	//matkul

	//getmatkulpengajuan
	function getMatkul(){
		$statement=$this->db->prepare('SELECT * FROM tb_matakuliah tbmk 
			join tb_sharing tbs on tbmk.id_sharing=tbs.id_sharing 
			join tb_jenismatkul tbjm on tbmk.id_jenis_matkul=tbjm.id_jenis_matkul 
			join tb_statussemester tbss on tbmk.id_status_semester=tbss.id_status_semester');
		$statement->execute();
		return $statement->fetchAll();
	}
	function getMatkulReguler(){
		$statement=$this->db->prepare('SELECT * FROM tb_matakuliah tbmk 
			join tb_pengajuanmatakuliahreguler tbpmkr on tbmk.id_matkul=tbpmkr.id_matkul');
		$statement->execute();
		return $statement->fetchAll();
	}
	function getMatkulRegulerPerPeriode($id){
		$statement=$this->db->prepare('SELECT * FROM tb_matakuliah tbmk 
			join tb_pengajuanmatakuliahreguler tbpmkr on tbmk.id_matkul=tbpmkr.id_matkul where id_tahunakademik ='.$id);
		$statement->execute();
		return $statement->fetchAll();
	}
		
	function addMatkulReguler($data){
		$statement=$this->db->prepare("INSERT INTO tb_pengajuanmatakuliahreguler VALUES (null,6,1,".$data['idMatkul'].")");
		$statement->execute();

	}
	function editSaveMatkulPengajuan($data){
		$statement=$this->db->prepare("UPDATE tb_matakuliah SET kode_matkul= '".$data['kodeMatkul']."', id_status_semester=".$data['tipeSemester'].", nama_matkul='".$data['namaMatkul']."',jumlah_sks=".$data['jumlahSKS'].", id_jenis_matkul=".$data['tipeJenis'].", id_sharing=".$data['tipeSharing']." 	WHERE id_matkul=".$data['idMatkul']);
		$statement->execute();
	}
	function deleteMatkulReguler($id){
		$statement=$this->db->prepare("DELETE FROM tb_pengajuanmatakuliahreguler where id_pengajuan_mata_kuliah=".$id);
		$statement->execute();	
	}
	function getTahunAkademik(){
		$statement=$this->db->prepare("SELECT * FROM tb_tahunakademik order by id_tahunakademik desc");
		$statement->execute();
		return $statement->fetchAll();
	}
}