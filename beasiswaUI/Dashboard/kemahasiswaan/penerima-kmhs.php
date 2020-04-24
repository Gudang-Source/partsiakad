<html>
    <head>
        <title>SIAKAD</title>
        <link rel="shortcut icon" href="img/logounej.png"/>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="../../View Base/bs/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/siakad.css">
        <link rel="stylesheet" href="../../View Base/Niceajahgan.css">
        <!-- Script jquery -->
        <script src="<?php echo URL; ?>public/js/jquery.min.js"></script>
        <!-- Latest compiled and minifieied JavaScript -->
        <script src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>
        <style>
            body{
                font-family:Verdana, Geneva, sans-serif;
            }
            .scale-to-55{
                width:55%;
                height:auto;
            }
            .container{
                width:99%;
                margin-left:auto;
                margin-right:auto;
            }
            .btn-default{
                color:#FFF;
            }

            .btn-nav-menu{
                margin-bottom:7px; 
                width:118px;
            }

            .page-name{
                color:#CCC;
                font-family:Verdana, Geneva, sans-serif;
				margin-left:20px;
            }

            #header-styled{
                height:auto;
                background-color:rgba(0,0,0,0.2);
                background-image:url(../img/backgroun-login.png);
                padding:10px;
            }

        </style>
    </head>
    
    <body>
        <div class="row">
            <!-- header -->
            <div class="col-sm-12" id="header-styled" style="height:auto">
				<div class="row" style="margin-bottom:4px">
                	<div class="col-sm-1">
                    	<img class="scale-to-55 img-responsive" src="../img/logo unej.png" style="margin-left:50px; margin-top:7px">
                    </div>
                    <div class="col-sm-11" style="padding:1px; height:auto">
                    	<h4 class="page-name"><b>SISTEM INFORMASI AKADEMIK</b></h4>
                        <h5 class="page-name"><b>PROGRAM STUDI SISTEM INFORMASI</b></h5>
                    </div>
                </div>
                <div class="siakad-menu" style="padding-top:0px">
                    <nav class="navbar navbar-default navbar-inverse" style="margin:0px;background-color:rgba(0,0,0,0.5)">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse" id="mainNavbar" >
                                <ul class="nav navbar-nav">
                                    <li class=""><a href="">Dashboard</a></li>
                                    <li class="dropdown">
                                        <a href="" class="dropdown-toggle active" data-toggle="dropdown">Beasiswa
                                            <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="info-bea-kmhs.php">Informasi Beasiswa</a></li>
                                            <li><a href="pendaftar-kmhs.php">Pendaftar Beasiswa</a></li>
                                            <li><a href="pendaftar-kmhs.php">Penerima Beasiswa</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="" class="dropdown-toggle active" data-toggle="dropdown">Yudisium & Wisuda
                                            <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Info Beasiswa</a></li>
                                            <li><a href="#">Pendaftar Beasiswa</a></li>
                                            <li><a href="#">Penerima Beasiswa</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown">
                                        <a href="" class="dropdown-toggle active" data-toggle="dropdown"> <span class="glyphicon glyphicon-user"></span> Profil
                                            <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo URL; ?>login/logout"><span class="glyphicon glyphicon-off"></span> Logout</a></li>

                                        </ul>
                                    </li>
                                </ul>
                                </nav>
                            </div>
                        </div>
                </div>
		
       <!-- ini isimu -->
            <div class="container form-control" style="height:585px">

                <!-- Page Heading -->
                 <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Penerima Beasiswa
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                Beasiswa
                            </li>
                            <li class="active">
                                Penerima Beasiswa
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!--ini buat combo boxnya-->
                 <div class="row">
                    <div class="col-lg-4">
                        <div class="tambah">
                            <label>Nama Beasiswa</label>
                            <select class="form-control">
                                <option>Beasiswa A</option>
                                <option>Beasiswa B</option>
                                <option>Beasiswa C</option>
                                <option>Beasiswa D</option>
                            </select>
                        </div>

                        <div>
                            <label>Tahun</label>
                            <select class="form-control">
                                <option>2015</option>
                                <option>2014</option>
                                <option>2013</option>
                                <option>2012</option>
                                <option>2011</option>
                                <option>2010</option>
                            </select>
                        </div>

                    </div>
                </div>

                <!--ini tabelnya-->
                <div class="col-lg-12">
                        <h2>Penerima Beasiswa</h2>
                        <button class="btn btn-info"><i class="glyphicon glyphicon-plus"></i><a href="form-penerima.php">  Tambah Data</a></button>

                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>132410101089</td>
                                        <td>Safitri Febryanti Astuti</td>
                                        <td>
                                            <button class="btn btn-info"><i class="glyphicon glyphicon-edit"></i>  Edit</button>
                                            <button class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i>  Delete</button>
                                        </td>
                                    </tr>
                                        
                                    <tr>
                                        <td>132410101077</td>
                                        <td>Antonius Halim Febrianto</td>
                                        <td>
                                            <button class="btn btn-info"><i class="glyphicon glyphicon-edit"></i>  Edit</button>
                                            <button class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i>  Delete</button>
                                        </td>                                        
                                    </tr>

                                 </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--tabel-->
            
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