<?php


class ta extends controller
{

    function __construct()
    {
        # code...
        parent::__construct();
        session::init();
    }

    //info

    function judulta()
    {
        $data = array();
        $this->view->talist = $this->model->getta_mahasiswa();
        $this->view->renderheader('kombi/headerkombi');
        $this->view->renderkonten('kombi/ta_mahasiswa');
    }

    function view_dosenpembimbing()
    {
        $data = array();
        $this->view->talist = $this->model->set_verified();
        $this->view->dosenlist = $this->model->get_dosen();
        $this->view->renderheader('kombi/headerkombi');
        $this->view->renderkonten('kombi/dosenpembimbing_ta');
    }

    function view_dosenpenguji()
    {
        $data = array();
        $this->view->talist = $this->model->set_verified();
        $this->view->dosenlist = $this->model->get_dosen();
        $this->view->renderheader('kombi/headerkombi');
        $this->view->renderkonten('kombi/dosenpenguji_ta');
    }

    function createTA()
    {
        $data = array();
        $data['nim'] = session::get('nim');
        $data['judulta'] = $_POST['judulta'];
        $data['judultaing'] = $_POST['judultaing'];

        if ($data['judulta'] == "" || $data['judultaing'] == "") {
            echo "<script>alert('kolom harus diisi')</script>";
            $this->tamhs();
        } else {
            $this->model->createjudul($data);
            header("location:" . URL . "ta/tamhs");
        }
    }

    function tamhs()
    {
        $nim = session::get('nim');
        $this->view->status = $this->model->get_status($nim);
        $this->view->judul = $this->model->getcekjudul($nim);
        $pengpem = $this->model->getPengPem($nim);
        $pembimbing = "";
        $penguji = "";
        foreach ($pengpem as $key => $value) {
            $pembimbing = $value['pembimbing'];
            $penguji = $value['Penguji'];
        }
        $this->view->pembimbing = $this->model->get_nama_dosen($pembimbing);
        $this->view->penguji = $this->model->get_nama_dosen($penguji);
        $this->view->renderheader('mahasiswa/headermahasiswa');
        $this->view->renderkonten('mahasiswa/ta/form_ta');
    }

    function verify_judul($id)
    {
        $data = array();
        $data['nim'] = $id;
        $this->model->updateverifyjudul($data);
        header("location:" . URL . "ta/judulta");
    }

    function tolak_judul($id)
    {
        $data = array();
        $data['nim'] = $id;
        $this->model->updatetolakjudul($data);
        header("location:" . URL . "ta/judulta");
    }

    function add()
    {
        $data = array();
        $data['namafile'] = $_POST['namafile'];
        $data['judultaing'] = $_POST['judultaing'];
        $this->model->createjudul($data);
        header("location:" . URL . "ta/tamhs");
    }

    function operator_tamhs()
    {
        $data = array();
        $this->view->talist = $this->model->getta_mahasiswa();
        $this->view->renderheader('operatorpssi/headeroperator');
        $this->view->renderkonten('operatorpssi/ta/list_judul');
    }

    function operator_pembimbing()
    {
        $data = array();
        $this->view->pembimbing = " ";
        $this->view->talist = $this->model->getta_mahasiswa();
        $this->view->dosenlist = $this->model->get_dosen();
        $this->view->renderheader('operatorpssi/headeroperator');
        $this->view->renderkonten('operatorpssi/ta/pembimbing');
    }

    function operator_penguji()
    {
        $data = array();
        $this->view->penguji = " ";
        $this->view->talist = $this->model->getta_mahasiswa();
        $this->view->dosenlist = $this->model->get_dosen();
        $this->view->renderheader('operatorpssi/headeroperator');
        $this->view->renderkonten('operatorpssi/ta/penguji');
    }

    function add_pembimbing($id)
    {
        $data = array();
        $data['nim'] = $id;
        $data['pembimbing'] = $_POST['pembimbing'];
        $data['pem_anggota'] = $_POST['pem_anggota'];
        $this->model->add_pembimbing($data);

        header("location:" . URL . "ta/view_dosenpembimbing");
    }

    function add_penguji($id)
    {
        $data = array();
        $data['nim'] = $id;
        $data['penguji'] = $_POST['penguji'];
        $data['peng_anggota'] = $_POST['peng_anggota'];
        $this->model->add_penguji($data);
        header("location:" . URL . "ta/view_dosenpenguji");
    }

    function cetaktugaspembimbing($id)
    {
        $data = $this->model->cetak_pembimbing($id);
        include 'view/operatorpssi/ta/cetakPembimbing.php';
    }

    function cetaktugaspenguji($id)
    {
        $data = $this->model->cetak_penguji($id);
        include 'view/operatorpssi/ta/cetakPenguji.php';
    }

    function getDataPembimbing()
    {
        $id = $_GET['pembimbing'];
        $this->view->pembimbing = $this->model->get_nama_dosen($id);
        $this->view->talist = $this->model->get_ta_mahasiswa_pem($id);
        $this->view->dosenlist = $this->model->get_dosen();
        $this->view->renderheader('operatorpssi/headeroperator');
        $this->view->renderkonten('operatorpssi/ta/pembimbing');
    }

    function getDataPenguji()
    {
        $id = $_GET['penguji'];
        $this->view->penguji = $this->model->get_nama_dosen($id);
        $this->view->talist = $this->model->get_ta_mahasiswa_peng($id);
        $this->view->dosenlist = $this->model->get_dosen();
        $this->view->renderheader('operatorpssi/headeroperator');
        $this->view->renderkonten('operatorpssi/ta/penguji');
    }

    function uploadProposal()
    {
        if (isset($_POST['simpan'])) {
            $temp = addslashes($_FILES['proposal']['tmp_name']);
            $file = addslashes($_FILES['proposal']['name']);
            $id = session::get('nim');

            $this->model->uploadProposal($temp, $file, $id);
            header('location: ' . URL . 'ta/tamhs');
        }
    }

    function uploadtafinal()
    {
        if (isset($_POST['simpan'])) {
            $temp = addslashes($_FILES['proposal']['tmp_name']);
            $file = addslashes($_FILES['proposal']['name']);
            $id = session::get('nim');

            $this->model->uploadProposalfinal($temp, $file, $id);
            header('location: ' . URL . 'ta/tamhs');
        }
    }

    function cetaksempro($id)
    {
        $data = $this->model->cetak_sempro($id);
        include 'view/mahasiswa/ta/cetak_sempro.php';
    }

    function cetak_ta($id)
    {
        $data = $this->model->cetak_tugasakhir($id);
        include 'view/mahasiswa/ta/cetak_tugasakhir.php';
    }
}

?>