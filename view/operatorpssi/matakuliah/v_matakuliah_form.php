<!DOCTYPE html>
<html>
<body>	
	<div class="main" style="padding-top:0px">
	<ol class="breadcrumb">
  		<li><a href="<?php echo URL;?>dashboard">Home</a></li>
  		<li class="active">/</li>
  		<li><a href="<?php echo URL;?>matkul">Mata Kuliah</a></li>
  		<li class="active">/</li>
  		<li class="active">Form Create</li>
	</ol>
	<div class="container">
	<div class="fold">
		<div class="page-header">
        	<h2 class="text-center">Form Create Mata Kuliah</h2>
    	</div>
		<form class="form-horizontal" role="form" action="<?php echo URL?>matkul/create" method="POST">
      
        <fieldset>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-3 control-label" for="textinput" >Kode Mata Kuliah</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="kodeMatkul">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-3 control-label" for="textinput">Nama Mata Kuliah</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="namaMatkul">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-3 control-label" for="textinput">Jumlah SKS</label>
            <div class="col-sm-6">
              <label class="radio-inline"><input type="radio" name="jumlahSKS" value="2">2</label>
              <label class="radio-inline"><input type="radio" name="jumlahSKS" value="3">3</label>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-3 control-label" for="textinput">Tipe Jenis</label>
            <div class="col-sm-6">
              <select class="form-control" name="tipeJenis">
                <option value="1">Master</option>
                <option value="2">Pelaksanaan</option>
                <option value="3">Penawaran</option>
                <option value="4">Prasyarat</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label" for="textinput">Status Semester</label>
            <div class="col-sm-6">
              <select class="form-control" name="tipeSemester">
                <option value="1">Gasal</option>
                <option value="2">Genap</option>
                <option value="3">Gasal/Genap</option>
              </select>
            </div>
            </div>


            <div class="form-group">
            <label class="col-sm-3 control-label" for="textinput">Tipe Sharing</label>
            <div class="col-sm-6">
              <select class="form-control" name="tipeSharing">
                <option value="1">Program Studi</option>
                <option value="2">Fakultas</option>
                <option value="3">Universitas</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
	            <button type="submit" class="btn btn-primary">Create</button>
    	        <a type="button" class="btn btn-secondary" value="cancel" href="<?php echo URL;?>matkul">Cancel</a>
            </div>
          </div>

        </fieldset>
      </form> 	
    </div>
    </div>
    </div>
	</body>
</html>