<div class="container  form-control" style="height:585px" xmlns="http://www.w3.org/1999/html">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i><a href="#">Dosen</a>
                </li>
                <li class="active">
                    <i class="fa fa-edit"></i>Penguji Tugas Akhir
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <div class="table-responsive">
        <table class="table table-hover">
            <?php
            echo "<td>";
            echo "<form action =\"" . URL . "ta/getDataPenguji/\"  method = \"get\">";
            echo "<select name=\"penguji\" style=\" width: 50%;font-size:small\">";
            if ($this->penguji != " ") {
                echo "<option>" . $this->penguji . "</option >";
            }
            foreach ($this->dosenlist as $key => $dosen) {
                echo "<option value=\"" . $dosen['nip'] . "\">" . $dosen['namaLengkap'] . "</option >";
            }
            echo "</select>";
            echo "<button type=\"submit\" class=\"btn btn-success btn-md\">Cek</button>";
            echo "</form>";
            echo "</td>";
            ?>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Judul</th>
                <th>Judul (Inggris)</th>
                <th>Cetak</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1;
            if ($this->penguji != ' ') {
                foreach ($this->talist as $key => $value) {

                    echo "<tr>";
                    echo "<td>" . $value['nim'] . "</td>";
                    echo "<td>" . $value['nama_user'] . "</td>";
                    echo "<td> <textarea class=\"form-control\" readonly=\"readonly\" rows=\"1\">" . $value['judul_TA'] . "</textarea></td>";
                    echo "<td> <textarea class=\"form-control\" readonly=\"readonly\" rows=\"1\">" . $value['judul_TA_ing'] . "</textarea></td>";
                    echo "<td class=\"text-center\"><a href=\"" . URL . "ta/cetaktugaspenguji/" . $value['Penguji'] . "\" class=\"btn btn-success btn-md\"><span class=\"glyphicon glyphicon-print\"></span></td>";
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
</div>
