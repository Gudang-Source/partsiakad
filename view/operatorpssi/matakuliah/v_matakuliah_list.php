<!DOCTYPE html>
<html>
<body>	
	<div class="main" style="padding-top:0px">
	<div class="container">
    <ol class="breadcrumb">
  		<li><a href="<?php echo URL;?>dashboard">Home</a></li>
  		<li class="active">/</li>
  		<li class="active">Mata Kuliah</li>
	</ol>
	<div class="fold">
		<div class="page-header">
        	<h2 class="text-center">Mata Kuliah</h2>
    	</div>
    	<form class="form-horizontal" role="form">
    	<div class="form-group" style="margin-left:0px">
            <div>
            	<a href="<?php echo URL;?>matkulreguler/indexpengajuan" class="btn btn-primary btn-sm col-sm-2"><span class="glyphicon glyphicon-file"></span> Reguler</a>

            	<a href="<?php echo URL;?>matkulreguler/showformcreate" class="btn btn-primary btn-sm col-sm-1" style="margin-left:15px"><span class="glyphicon glyphicon-folder-open"></span> SP</a>
            </div>
          </div>
        <div class="form-group">
        	
        </div>
        <div class="form-group" style="margin-left:0px">
        	<a href="<?php echo URL;?>matkul/showformcreate" class="btn btn-primary btn-sm col-sm-2"><span class="glyphicon glyphicon-plus"></span> Create Mata Kuliah</a>
        </div>
        </fieldset>
        </form>
        
    			<table class="items table table-condensed table-responsive" style="margin-top:10px">
				<thead>
					<tr>
						<th class="text-center">Kode Matkul</th>
						<th class="text-center">Mata Kuliah</th>
						<th class="text-center">SKS</th>
						<th class="text-center">Jenis</th>
						<th class="text-center">Semester</th>
						<th class="text-center">Sharing</th>
						<th class="text-center">Aksi</th>
					</tr>
				</thead>
			<tbody>
				<?php
    			foreach ($this->matkulList as $key => $value) {	 	
					 	echo "<tr>";
					 	echo "<td class=\"text-center\">".$value['kode_matkul'].'</td>';
					 	echo "<td class=\"text-center\">".$value['nama_matkul'].'</td>';
					 	echo "<td class=\"text-center\">".$value['jumlah_sks'].'</td>';
					 	echo "<td class=\"text-center\">".$value['jenis_matkul'].'</td>';
					 	echo "<td class=\"text-center\">".$value['status_semester'].'</td>';
					 	echo "<td class=\"text-center\">".$value['jenis_sharing'].'</td>';			 						 						 	
					 	echo "<td class=\"text-center\"><a class='btn btn-info btn-xs' href=\"".URL."matkul/showformedit/".$value['id_matkul']."\"><span class=\"glyphicon glyphicon-edit\"></span> Edit</a> <a href=\"".URL."matkul/delete/".$value['id_matkul']."\" class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-remove\"></span> Del</a></td>";
					 	echo "<tr>";		 
				}
				?>

			</tbody>
		</table> 	
    </div>
    </div>
    </div>
	</body>
</html>