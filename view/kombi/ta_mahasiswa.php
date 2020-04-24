<div class="container  form-control" style="height:585px" xmlns="http://www.w3.org/1999/html">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Tugas Akhir
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i><a href="#">Tugas Akhir</a>
                </li>
                <li class="active">
                    <i class="fa fa-edit"></i>Pengajuan Judul Tugas Akhir
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Judul</th>
                <th>Judul (Inggris)</th>
                <th>Status Verifikasi</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <?php
                foreach ($this->talist as $key => $value) {

                    echo "<tr>";
                    echo "<td class=\"text-center\">" . $value['nim'] . "</td>";
                    echo "<td class=\"text-center\">" . $value['nama_user'] . "</td>";
                    echo "<td class=\"text-center\"> <textarea class=\"form-control\" readonly=\"readonly\" rows=\"1\">" . $value['judul_TA'] . "</textarea></td>";
                    echo "<td class=\"text-center\"> <textarea class=\"form-control\" readonly=\"readonly\" rows=\"1\">" . $value['judul_TA_ing'] . "</textarea></td>";
                    if ($value ['id_verifikasijudul'] == 1) {
                        echo "<td class=\"text-center\">  <span class=\"label label-default\">Belum Diverifikasi</span> </td>";
                    } elseif ($value ['id_verifikasijudul'] == 2) {
                        echo "<td class=\"text-center\">  <span class=\"label label-success\">Sudah Diverifikasi</span> </td>";
                    } else {
                        echo "<td class=\"text-center\">  <span class=\"label label-danger\">Tidak Diverifikasi</span> </td>";
                    }
                    echo "<td class=\"text-center\"><a href=\"".URL."ta/verify_judul/".$value['nim']."\" class=\"btn btn-success btn-md\"><span class=\"glyphicon glyphicon-check\"></span>  </a>
                    <a href=\"".URL."ta/tolak_judul/".$value['nim']."\" class=\"btn btn-danger btn-md\"><span class=\"glyphicon glyphicon-remove\"></span> </td>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</div>
