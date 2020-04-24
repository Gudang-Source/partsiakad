<?php

/**
* 
*/
class m_kelas extends model
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}
	//matkul

	//memanggil kelas ke tabel
	function getKelas(){
		$statement=$this->db->prepare('SELECT * FROM tb_kelas tbk 
			join tb_kelompokkegiatanmatakuliah tbkkm on tbk.id_kelompokkegiatanmatakuliah=tbkkm.id_kelompok_kegiatan_mata_kuliah 
			join tb_matakuliah tbmk on tbk.id_matkul=tbmk.id_matkul 
			join tb_tahunakademik tbta on tbk.id_tahunakademik=tbta.id_tahunakademik
			join tb_statussemester tbss on tbk.id_semester=tbss.id_status_semester');
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