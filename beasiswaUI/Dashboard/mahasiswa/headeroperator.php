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
                background-image:url(<?php echo URL ?>img/backgroun-login.png);
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
                    	<img class="scale-to-55 img-responsive" src="<?php echo URL ?>img/logo unej.png" style="margin-left:50px; margin-top:7px">
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
                                    <li class="<?php echo URL;?>dashboard"><a href="">Dashboard</a></li>
                                    <li class="dropdown">
                                        <a href="" class="dropdown-toggle active" data-toggle="dropdown">Mata Kuliah
                                            <span class="caret"></span></a>
                                        <ul class="dropdown-menu">

                                            <li><a href="<?php echo URL ?>matkulreguler">Reguler</a></li>
                                            <li><a href="#">SP</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="" class="dropdown-toggle active" data-toggle="dropdown">Mahasiswa
                                            <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Nilai</a></li>
                                            <li><a href="#">Transkrip</a></li>
                                            <li><a href="#">Rencana Studi</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="" class="dropdown-toggle active" data-toggle="dropdown">Dosen
                                            <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Beban Mengajar</a></li>
                                            <li><a href="#">Jadwal Mengajar</a></li>
                                            <li><a href="#">Perwalian</a></li>
                                            <li><a href="#">Pengampuan</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="" class="dropdown-toggle active" data-toggle="dropdown">Perkuliahan
                                            <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="/presensimahasiswa">Presensi</a></li>
                                            <li><a href="#">Input Jadwal Entry</a></li>
                                            <li><a href="kelas">Kelas</a></li>
                                            <li><a href="kelas">Jadwal Kelas</a></li>
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
</body>