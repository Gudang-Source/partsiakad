<div class="container  form-control" style="height:585px">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Tugas Akhir
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i><a href="#">Dosen Penguji</a>
                </li>
                <li class="active">
                    <i class="fa fa-edit"></i>Penetapan Dosen Penguji
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
                    <th>Dosen Penguji</th>
                    <th>Dosen Penguji Anggota</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                foreach ($this->talist as $key => $value) {

                    echo "<form action =\"" . URL . "ta/add_penguji/" . $value['nim'] . "\"  method = \"post\"";
                    echo "<tr>";

                    echo "<td class=\"text-center\">" . $value['nim'] . "</td>";
                    echo "<td class=\"text-center\">" . $value['nama_user'] . "</td>";

                    echo "<td><select name=\"penguji\" style=\" width: 50%;font-size:small\">";
                    foreach ($this->dosenlist as $key => $dosen) {
                        echo "<option value=\"".$dosen['nip']."\">".$dosen['namaLengkap']."</option>";
                    }
                    echo "</select></td>";
                    echo "<td><select name=\"peng_anggota\"style=\" width: 50%;font-size:small\"> ";
                    foreach ($this->dosenlist as $key => $dosen) {
                        echo " <option value=\"".$dosen['nip']."\">" . $dosen['namaLengkap'] . "</option >";
//                    echo " <option value=\"$dosen[nip]\"".(($this->dosenlist==$dosen['namaLengkap'])? "selected" : "").">" . $dosen['namaLengkap'] . "</option >";
                    }
                    echo "</select></td>";
                    echo "<td><button type='submit' class=\"btn btn-success\" >simpan</button></td>";
                    echo "</tr>";
                    echo "</form>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
