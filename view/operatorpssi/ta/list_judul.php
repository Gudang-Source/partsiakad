<div class="container  form-control" style="height:585px" xmlns="http://www.w3.org/1999/html">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
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
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1;
            foreach ($this->talist as $key => $value) {

                echo "<tr>";
                echo "<td>" . $value['nim'] . "</td>";
                echo "<td>" . $value['nama_user'] . "</td>";
                echo "<td> <textarea class=\"form-control\" readonly=\"readonly\" rows=\"1\">" . $value['judul_TA'] . "</textarea></td>";
                echo "<td> <textarea class=\"form-control\" readonly=\"readonly\" rows=\"1\">" . $value['judul_TA_ing'] . "</textarea></td>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
</div>
