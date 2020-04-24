<html>
    <body>
       <!-- ini isimu -->
            <div class="container form-control" style="height:auto">

                 <!-- Page Heading -->
                 <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Form Tambah Beasiswa
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                Beasiswa
                            </li>
                            <li class="active">
                                 Informasi Beasiswa
                            </li>
                            <li class="active">
                                 Tambah Beasiswa
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" action="<?php echo URL?>beasiswa/create" method="POST">

                            <div class="form-group">
                                <label>Jenis Beasiswa</label>
                                <select class="form-control" name="jenisBeasiswa">
                                    <option value="1">PPA/BPP-PPA</option>
                                    <option value="2">Beasiswa Luar</option>
                                </select>
                            </div>

                             <div class="form-group">
                                <label>Nama Beasiswa</label>
                                <input class="form-control" placeholder="Nama Beasiswa" name="namaBeasiswa">
                             </div>

                             <div class="form-group">
                                <label>Persyaratan</label>
                                <textarea class="form-control" rows="3" placeholder="Persyaratan" name="persyaratanBeasiswa"></textarea>
                             </div>

                             <div class="form-group">
                                <label>Tanggal Awal Pendaftaran</label>
                                <input type="date" class="form-control" placeholder="Tanggal Awal Pendaftaran" name="tanggalAwalPendaftaran">
                             </div>

                             <div class="form-group">
                                <label>Tanggal Akhir Pendaftaran</label>
                                <input type="date" class="form-control" placeholder="Tanggal Akhir Pendaftaran" name="tanggalAkhirPendaftaran">
                             </div>

                             <div class="form-group">
                                <label>Tentang Beasiswa</label>
                                <textarea class="form-control" rows="3" placeholder="Deskripsi" name="deskripsi"></textarea>
                             </div>
                             <button type="submit" class="btn btn-primary">Create</button>
                            <a type="button" class="btn btn-secondary" value="cancel" href="<?php echo URL;?>matkul">Cancel</a>
                        </form>
                    </div>
                </div>
            
            </div>
            <!-- akhir dari isimu -->


	 <!-- footer -->
    <div class="row">
    	<div class="col-sm-12 panel-footer" style="background-image:url(../img/backgroun-login.png); background-color:rgba(153,153,153,0.2); margin-top:7px">
        <p style="color:#999; font-size:8px; margin-bottom:2px; text-align:center">Copyright SIAKAD B ; 2015</p>
        </div>
    </div>
    <!-- end footer -->

</body>
