<?php

/**
 *
 */
class m_ta extends model
{

    function __construct()
    {
        # code...
        parent::__construct();
    }

    function getta_mahasiswa()
    {
        $statement = $this->db->prepare("select * from tb_tugas_akhir ta join tb_user us on ta.nim = us.id_user");
        $statement->execute();
        return $statement->fetchAll();
    }

    function get_ta_mahasiswa_pem($id)
    {
        $statement = $this->db->prepare("select * from tb_tugas_akhir ta join tb_user us on ta.nim = us.id_user WHERE pembimbing = '$id'");
        $statement->execute();
        return $statement->fetchAll();
    }

    function get_ta_mahasiswa_peng($id)
    {
        $statement = $this->db->prepare("select * from tb_tugas_akhir ta join tb_user us on ta.nim = us.id_user WHERE Penguji = '$id'");
        $statement->execute();
        return $statement->fetchAll();
    }

    function getPengPem($id)
    {
        $statement = $this->db->prepare("select * from tb_tugas_akhir ta join tb_user us on ta.nim = us.id_user WHERE nim = '$id'");
        $statement->execute();
        return $statement->fetchAll();
    }

    function set_verified()
    {
        $statement = $this->db->prepare("select * from tb_tugas_akhir ta join tb_user us on ta.nim = us.id_user WHERE ta.id_verifikasijudul=2");
        $statement->execute();
        return $statement->fetchAll();
    }

    function get_dosen()
    {
        $statement = $this->db->prepare("select * from tb_pegawai");
        $statement->execute();
        return $statement->fetchAll();
    }

    function get_nama_dosen($id)
    {
        $statement = $this->db->prepare("select * from tb_pegawai WHERE nip = '$id' LIMIT 1");
        $statement->execute();
        $data = $statement->fetchAll();
        foreach ($data as $key => $value) {
            return $value['namaLengkap'];
        }
    }

    function get_status($nim)
    {
        $statement = $this->db->prepare("select * from tb_tugas_akhir ta join tb_user us on ta.nim = us.id_user where nim = '" . $nim . "'");
        $statement->execute();
        $status = $statement->fetch();
        return $status['status'];
    }

    function getcekjudul($nim)
    {
        $statement = $this->db->prepare("select * from tb_tugas_akhir ta join tb_user us on ta.nim = us.id_user where nim = " . $nim);
        $statement->execute();
        $cekjudul = $statement->fetch();
        $count = $statement->rowCount();
        if ($count > 0) {
            session::set('cek', true);
            return $cekjudul;
        } else {
            session::set('cek', false);
        }
    }

    function createjudul($data)
    {
        $statement = $this->db->prepare("insert into tb_tugas_akhir VALUES (null,'" . $data['nim'] . "', '" . $data['judulta'] . "','" . $data['judultaing'] . "', null, null, null, null, null,  null, null, null, null,1,1)");
        $statement->execute();
        return $statement->fetchAll();
    }

    function updateverifyjudul($data)
    {
        $statement = $this->db->prepare("update tb_tugas_akhir set id_verifikasijudul =2 WHERE nim = " . $data['nim']);
        $statement->execute();
    }

    function updatetolakjudul($data)
    {
        $statement = $this->db->prepare("update tb_tugas_akhir set id_verifikasijudul =3 WHERE nim = " . $data['nim']);
        $statement->execute();
    }

    function add_pembimbing($data)
    {
        $statement = $this->db->prepare("update tb_tugas_akhir set pembimbing ='" . $data['pembimbing'] . "', pembimbing_anggota ='" . $data['pem_anggota'] . "', status =2 where nim = '" . $data['nim'] . "' ");
        $statement->execute();
        return $statement->fetchAll();
    }

    function add_penguji($data)
    {
        $statement = $this->db->prepare("update tb_tugas_akhir set penguji ='" . $data['penguji'] . "', penguji_anggota ='" . $data['peng_anggota'] . "', status =6 where nim = '" . $data['nim'] . "' ");
        $statement->execute();
        return $statement->fetchAll();
    }

    function cetak_pembimbing($id)
    {
        $statement = $this->db->prepare("select * from tb_tugas_akhir ta join tb_user us on ta.nim = us.id_user join tb_pegawai pg on ta.pembimbing = pg.nip where pembimbing = '$id'");
        $statement->execute();
        $a = $this->db->prepare("update tb_tugas_akhir set status =3 where pembimbing = '$id'");
        $a->execute();
        return $statement->fetchAll();
    }
    function cetak_penguji($id)
    {
        $statement = $this->db->prepare("select * from tb_tugas_akhir ta join tb_user us on ta.nim = us.id_user join tb_pegawai pg on ta.pembimbing = pg.nip where Penguji = '$id'");
        $statement->execute();
        $a = $this->db->prepare("update tb_tugas_akhir set status =7 where Penguji = '$id'");
        $a->execute();
        return $statement->fetchAll();
    }

    function uploadProposal($temp, $file, $id)
    {
        $a = $this->db->prepare("update tb_tugas_akhir set status =4 ,upload_proposal_final = '$file' where nim = '$id'");
        $a->execute();
        move_uploaded_file($temp, 'public/file/' . basename($file));
    } 

    function uploadProposalfinal($temp, $file, $id)
    {
        $a = $this->db->prepare("update tb_tugas_akhir set status =9 ,upload_TA_final = '$file' where nim = '$id'");
        $a->execute();
        move_uploaded_file($temp, 'public/file/' . basename($file));
    }
    function cetak_sempro($id)
    {
        $statement = $this->db->prepare("select * from tb_tugas_akhir ta join tb_user us on ta.nim = us.id_user join tb_pegawai pg on ta.pembimbing = pg.nip where nim = '$id'");
        $statement->execute();
        $a = $this->db->prepare("update tb_tugas_akhir set status =8 where nim = '$id'");
        $a->execute();
        return $statement->fetchAll();
    }
    function cetak_tugasakhir($id)
    {
        $statement = $this->db->prepare("select * from tb_tugas_akhir ta join tb_user us on ta.nim = us.id_user join tb_pegawai pg on ta.pembimbing = pg.nip where nim = '$id'");
        $statement->execute();
        $a = $this->db->prepare("update tb_tugas_akhir set status =11 where nim = '$id'");
        $a->execute();
        return $statement->fetchAll();
    }
}

?>