<html>
    <body>
        <!-- ini isimu -->
            <div class="container form-control" style="height:585px">

                <!-- Page Heading -->
                 <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Informasi Beasiswa
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i><a href="#">Beasiswa</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Informasi Beasiswa
                            </li>
                        </ol>

                        <a href="<?php echo URL;?>beasiswa/showformcreate" class="btn btn-primary btn-sm col-sm-2"><span class="glyphicon glyphicon-plus"></span> Create Beasiswa</a>
                    </div>
                </div>
                <!-- /.row -->

                <!--tabel info beasiswa-->
                <div class="col-lg-12">
                            <h2>List Beasiswa</h2>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nama Beasiswa</th>
                                            <th>Jenis Beasiswa</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Beasiswa BCA</td>
                                            <td>Beasiswa Luar</td>
                                            <td>
                                                <button class="btn btn-primary">Detail</button>
                                                <button class="btn btn-info"><i class="glyphicon glyphicon-edit"></i>
  Edit</button>
                                            </td>
                                        </tr>

                                         <tr>
                                            <td>Beasiswa PPA</td>
                                            <td>Beasiswa Dalam</td>
                                            <td>
                                                <button class="btn btn-primary">Detail</button>
                                                <button class="btn btn-info"><i class="glyphicon glyphicon-edit"></i>
  Edit</button>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
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
</html>