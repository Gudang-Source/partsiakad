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
        	<h2 class="text-center">Mata Kuliah Reguler</h2>
    	</div>
    	<form class="form-horizontal" role="form">
    	<div class="form-group" style="margin-left:0px">
            	<label class="col-md-1 control-label" for="textinput">Akademik:</label>
            	<div class="col-sm-2">
    			<select class="form-control input-sm" name="tahunAkademik">
    				<?php
    				foreach ($this->tahunAkademikList as $key => $value) {	 	
					 	echo "<option value=\"".$value['id_tahunakademik']."\">".$value['ket_tahunakademik']."</option>";		 
					}
					?>
            	</select>
        		</div>
            	<label class="col-md-1 control-label" for="textinput">Semester:</label>
            	<div class="col-sm-2">
    			<select class="form-control input-sm" name="tahunAkademik">
    				<option value="1">Gasal</option>
                	<option value="2">Genap</option>
            	</select>
        		</div>
        		<a class='btn btn-success btn-xs' href="<?php URL?>"><span class=\"glyphicon glyphicon-edit\"></span> Go</a>
        </div>

        </fieldset>
        </form>
        <div class="form-group">
        		<br>
        </div>
		<div class="form-group" style="margin-left:0px">
        	<a href="<?php echo URL;?>matkulreguler/showadd" class="btn btn-primary btn-sm col-sm-2"><span class="glyphicon glyphicon-plus"></span> Add Matkul Reguler</a>
        </div>
        
    			<table class="items table table-condensed table-responsive" style="margin-top:10px">
				<thead>
					<tr>
						<th class="text-center">No</th>
						<th class="text-center">Mata Kuliah</th>
						<th class="text-center">Kelas</th>
						<th class="text-center">Aksi</th>
					</tr>
				</thead>
			<tbody>
				<?php
				$no=1;
    			foreach ($this->matkulRegulerList as $key => $value) {
    				
					echo "<tr>";
					echo "<td class=\"text-center\">".$no."</td>";
					echo "<td class=\"text-center\">".$value['nama_matkul'].'</td>';
					echo "<td class=\"text-center\"> <a href=\"".URL."kelas/show/".$value['id_pengajuan_mata_kuliah']."\" class=\"btn btn-success btn-xs\"><span class=\"glyphicon glyphicon-log-in\"></span> Kelas</a></td>";			 			 	
					echo "<td class=\"text-center\"> <a href=\"".URL."matkulreguler/delete/".$value['id_pengajuan_mata_kuliah']."\" class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-remove\"></span> Del</a></td>";
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