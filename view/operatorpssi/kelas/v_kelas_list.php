<!DOCTYPE html>
<html>
<body>	
	<div class="main" style="padding-top:0px">
	<div class="container">
	<ol class="breadcrumb">
  		<li><a href="<?php echo URL;?>dashboard">Home</a></li>
  		<li class="active">/</li>
  		<li class="active">Matkul Reguler</li>
	</ol>
	<div class="fold">
		<div class="page-header">
        	<h2 class="text-center">Kelas Perkuliahan</h2>
    	</div>
    	<form class="form-horizontal" role="form">
    	    <div class="form-group" style="margin-left:0px">
            	<label class="col-sm-offset-3 col-sm-3 control-label" for="textinput">Akademik:</label>
            	<p class="col-sm-3" style="padding-top:7px">
                    1415/Gasal
        		</p>
            </div>
            <div class="form-group" style="margin-left:0px">
        		<label class="col-sm-offset-3 col-sm-3 control-label" for="textinput">Mata Kuliah:</label>
                <p class="col-sm-3" style="padding-top:7px">
                    Algoritma
                </p>
            </div>
            <div class="form-group">
                <br>
            </div>
		<div class="form-group" style="margin-left:0px">
        	<a href="<?php echo URL;?>matkulreguler/showadd" class="btn btn-primary btn-sm col-sm-2"><span class="glyphicon glyphicon-plus"></span> Create Kelas</a>
        </div>
        </fieldset>
        </form>
        
    			<table class="items table table-condensed table-responsive" style="margin-top:10px">
				<thead>
					<tr>
						<th class="text-center">No</th>
						<th class="text-center">Kelompok Kegiatan Matakuliah</th>
						<th class="text-center">Kelas</th>
						<th class="text-center">Kuota</th>
                        <th class="text-center">Jadwal</th>
                        <th class="text-center">Dosen</th>
                        <th class="text-center">Mahasiswa</th>
                        <th class="text-center">Nilai</th>
                        <th class="text-center">Aksi</th>
					</tr>
				</thead>
			<tbody>
				<?php
				$no=1;
    			foreach ($this->kelasList as $key => $value) {
    				
					echo "<tr>";
					echo "<td class=\"text-center\">".$no."</td>";
					echo "<td class=\"text-center\">".$value['nama_kelompok_kegiatan_mata_kuliah'].'</td>';
                    echo "<td class=\"text-center\">".$value['nama_kelas'].'</td>';
                    echo "<td class=\"text-center\">".$value['jumlah_kuota_kelas'].'</td>';
                    echo "<td class=\"text-center\">".$value['jumlah_jadwal_kelas'].'</td>';
                    echo "<td class=\"text-center\">".$value['jumlah_dosen_kelas'].'</td>';
                    echo "<td class=\"text-center\">".$value['jumlah_mahasiswa_kelas'].'</td>';
                    echo "<td class=\"text-center\">".$value['jumlah_nilai_kelas'].'</td>';
					echo "<td class=\"text-center\"><a class='btn btn-info btn-xs' href=\"".URL."matkul/showformedit/".$value['id_matkul']."\"><span class=\"glyphicon glyphicon-edit\"></span> Edit</a> <a href=\"".URL."matkul/delete/".$value['id_matkul']."\" class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-remove\"></span> Del</a></td>";
					 echo "<tr>";
					 $no++;		 
				}
				?>

			</tbody>
		</table>
    </div>
    </div>
    </div>
	</body>
</html>