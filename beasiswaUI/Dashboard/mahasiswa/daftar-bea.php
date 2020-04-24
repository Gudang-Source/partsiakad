<html>
    <head>
        <title>SIAKAD</title>
        <link rel="shortcut icon" href="../img/logounej.png"/>
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
                </div><!--header-->

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
                                    <li class="active"><a href="">Dashboard</a></li>
                                    
                                    <!--status-->
                                    <li class="dropdown">
                                        <a href="" class="dropdown-toggle active" data-toggle="dropdown">Status
                                        <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Biodata Mahasiswa</a></li>
                                            <li><a href="#">Penundaan SPP/UKT</a></li>
                                            <li><a href="#">Penurunan SPP/UKT</a></li>
                                            <li><a href="#">Pengunduran Diri</a></li>
                                            <li><a href="#">Cuti Kuliah</a></li>
                                            <li><a href="#">Perpanjangan Masa Studi</a></li>
                                            <li><a href="#">Status Kuliah</a></li>
                                            <li><a href="#">Pindah Kuliah</a></li>
                                            <li><a href="#">Status Pembayaran</a></li>
                                        </ul>
                                    </li><!--status-->

                                    <!--Yudisium & wisuda-->
                                    <li class="dropdown">
                                        <a href="" class="dropdown-toggle active" data-toggle="dropdown">Yudisium & wisuda
                                        <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Info Beasiswa</a></li>
                                            <li><a href="#">Daftar Beasiswa</a></li>
                                        </ul>
                                    </li>

                                    <!--Akademik-->
                                    <li class="dropdown">
                                        <a href="" class="dropdown-toggle active" data-toggle="dropdown">Akademik
                                        <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Dosen Wali</a></li>
                                            <li><a href="#">KRS Reguler</a></li>
                                            <li><a href="#">KRS SA</a></li>
                                            <li><a href="#">Record Pembatalan</a></li>
                                            <li><a href="#">Jadwal Kuliah</a></li>
                                            <li><a href="#">Perkuliahan</a></li>
                                            <li><a href="#">Hasil Studi</a></li>
                                            <li><a href="#">Transkrip</a></li>
                                            <li><a href="#">Tugas Akhir</a></li>
                                        </ul>
                                    </li>

                                    <!--beasiswa-->
                                    <li class="dropdown">
                                        <a href="" class="dropdown-toggle active" data-toggle="dropdown">Beasiswa
                                        <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="info-bea-mhs.php">Info Beasiswa</a></li>
                                            <li><a href="daftar-bea.php">Daftar Beasiswa</a></li>
                                        </ul>
                                    </li>
                                
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                
            </div>
		
            <!-- ini isimu -->
            <div class="container  form-control" style="height:585px">

                <!-- Page Heading -->
             <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Pendaftaran PPA/BPP-PPA
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i><a href="#">Beasiswa</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-edit"></i> Daftar Beasiswa
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-6">
                    <button class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>  DAFTAR</button>
                </div>
                <!--clo-lg-6-->
            </div>
            <!--row-->
            
            </div>
            <!-- akhir dari isimu -->

            </div>
        </div>
        <!--end content-->


	 <!-- footer -->
    <div class="row">
    	<div class="col-sm-12 panel-footer" style="background-image:url(../img/backgroun-login.png); background-color:rgba(153,153,153,0.2); margin-top:7px">
        <p style="color:#999; font-size:8px; margin-bottom:2px; text-align:center">Copyright SIAKAD B ; 2015</p>
        </div>
    </div>
    <!-- end footer -->

    </body>