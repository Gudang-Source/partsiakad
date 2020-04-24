<!DOCTYPE html>
<html>
<body>	
	<div class="main" style="padding-top:0px">
	<div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo URL;?>dashboard">Home</a></li>
        <li class="active">/</li>
        <li><a href="<?php echo URL;?>matkulreguler">Matkul Reguler</a></li>
        <li class="active">/</li>
        <li class="active">Add</li>
    </ol>
	<div class="fold">
		<div class="page-header">
        	<h2 class="text-center">Tambah Mata Kuliah Reguler</h2>
    	</div>
    	<form class="form-horizontal" role="form">
        <div class="form-group col-sm-11" style="margin-left:0px">
            <input class="form-control" name="q" value="" placeholder="Cari...">
        </div>
        <div class="form-group" style="margin-left:0px">
        	<a href="<?php echo URL;?>matkulreguler/showformcreate" class="btn btn-primary btn-sm col-sm-1"><span class="glyphicon glyphicon-search"></span>Search</a>
        </div>

        </fieldset>
        </form>
        
    			<table class="items table table-condensed table-responsive" style="margin-top:10px">
				<thead>
					<tr>
                        <th class="text-center">No</th>
						<th class="text-center">Mata Kuliah</th>
						<th class="text-center">Aksi</th>
					</tr>
				</thead>
			<tbody>
				<?php
                $no=1;
    			foreach ($this->matkulList as $key => $value) {	
                         	
					 	echo "<tr>";
                        echo "<td class=\"text-center\">".$no.'</td>';
					 	echo "<td class=\"text-center\">".$value['nama_matkul'].'</td>';			 						 	
					 	echo "<td class=\"text-center\"><a class='btn btn-success btn-xs' href=\"".URL."matkulreguler/add/".$value['id_matkul']."\"><span class=\"glyphicon glyphicon-edit\"></span> Tambah</a>";
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