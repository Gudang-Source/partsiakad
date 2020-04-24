<?php
/**
* 
*/
class m_login extends model
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}
	function run(){
		session::init();
		$username=$_POST['username'];
		$password=$_POST['password'];
		$statement=$this->db->prepare("SELECT * FROM tb_user tbu JOIN tb_user_level tbul on tbu.level_user=tbul.user_level WHERE id_user='".$username."' AND password_user= '".$password."' LIMIT 1");
		$statement->execute();

		$data=$statement->fetch();

		$count=$statement->rowCount();
		if(empty($password) && empty($username)){
			session::set('loginfail','Kolom Username dan Password Kosong');
			header('location:../login/fail');
		} elseif(empty($password) && !empty($username)){
			session::set('loginfail','Kolom Password Kosong');
			header('location:../login/fail');
		} elseif(empty($username) && !empty($password)){
			session::set('loginfail','Kolom Username Kosong');
			header('location:../login/fail');
		}else{
			if($count>0){
				session::set('userLevel',$data['ket_user_level']);
				session::set('loggedIn',true);
				session::set('nim',$data['id_user']);
				session::set('nama',$data['nama_user']);
				header('location:../dashboard');
			}else{
				session::set('loginfail','Username atau Password Salah');
				header('location:../login/fail');
			}
		}
	}
}
?>