<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard Si Akad Nih Kan</title>

        <link href="../View Base/Niceajahgan.css" rel="stylesheet" type="text/css">
        <link href="../View Base/bs/css/bootstrap.css" rel="stylesheet" type="text/css">
        
        <style>
		body{
			font-family:Verdana, Geneva, sans-serif;
		}
		.scale-to-6{
			width:4%;
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
		
		#page-name{
			color:#999;
			font-family:Verdana, Geneva, sans-serif;
			float:left;
			margin-left:25px;
			margin-top:15px;
			text-align:center;
		}
		
		#header-styled{
			 height:auto;
			 background-color:rgba(0,0,0,0.2);
			 background-image:url(img/backgroun-login.png);
			 padding:10px;
		}
		
		</style>
        
</head>

<body>
<div class="container">
	<div class="row">
    <!-- header -->
    	<div class="col-sm-12" id="header-styled">
            <img class="scale-to-6 img-responsive" src="img/logo unej.png" style="float:left; margin-left:13px">
            <h4 id="page-name">SISTEM INFORMASI AKADEMIK UNIVERSITAS JEMBER</h4>
        </div>
    </div>
    <!-- end header -->
    
    <!-- main content -->
    <div class="row" style="margin-top:3px">
    	<div class="col-sm-12">
        	<!-- ini menu -->
        	 <nav class="navbar navbar-inverse">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!--<a class="navbar-brand" href="#">InDesign</a> -->
                        </div>
                        <div id="navbar" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                            	<!-- MENU STATUS -->
                                <li>
                                	<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropup-menu">Status</a>
                       	 			<ul class="dropdown-menu">
										<li><a href="#">Biodata Mahasiswa</a></li>
										<li><a href="#">Penundaan SPP</a></li>
										<li><a href="#">Pengunduran Diri</a></li>
										<li><a href="#">Cuti Kuliah</a></li>
										<li><a href="#">Perpanjangan Masa Studi</a></li>
										<li><a href="#">Status Kuliah</a></li>
										<li><a href="#">Pindah Kuliah</a></li>
										<li><a href="#">Status Pembayaran</a></li>
									</ul>
                                </li>
                                
                                <!-- MENU AKADEMIK -->
								<li>
                                	<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropup-menu">Akademik</a>
                                    <ul class="dropdown-menu">
										<li><a href="#">Dosen Wali</a></li>
										<li><a href="krs_reg">KRS Reguler</a></li>
										<li><a href="#">KRS SA</a></li>
										<li><a href="#">Record Pembatalan</a></li>
										<li><a href="#">Jadwal Kuliah</a></li>
										<li><a href="#">Perkuliahan</a></li>
										<li><a href="#">Hasil Studi</a></li>
										<li><a href="#">Transkrip Nilai</a></li>
									</ul>
                                </li>
                                
                                <!-- MENU YUDISIUM & WISUDA -->
								<li>
                                	<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropup-menu">Yudisium & Wisuda</a>
                                    <ul class="dropdown-menu">
                                    	<li><a href="#">Undangan Yudisium</a></li>
										<li><a href="#">SK Yudisium</a></li>
										<li><a href="#">Pengumuman Wisuda</a></li>
										<li><a href="#">Undangan Wisuda</a></li>
                                    </ul>
                                </li>
                                
                                <!-- MENU BEASISWA -->
								<li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropup-menu">Kuliah GRATIS</a>
                                	<ul class="dropdown-menu">
                                    	<li><a href="#">Daftar Beasiswa</a></li>
										<li><a href="#">Informasi Beasiswa</a></li>
                                    </ul>
                                </li>
								
                                <!-- kalau mau nambah menu lagi -->
                                <!-- ending menu tambahan -->
                            </ul>
                        </div><!-- /.nav-collapse -->
                    </div><!-- /.container -->
                </nav><!-- /.navbar -->
            <!-- akhir dari menu -->
            
            <!-- ini isimu -->
        	<div class="container" style="height:auto">
            </div>
            <!-- akhir dari isimu -->
        </div>
    </div>
    <!-- end content -->
    
    
    <!-- footer -->
    <div class="row">
    	<div class="col-sm-12 panel-footer" style="background-image:url(img/backgroun-login.png); background-color:rgba(153,153,153,0.2)">
        <p style="color:#999; font-size:8px; margin-bottom:2px; text-align:center">Copyright SIAKAD B ; 2015</p>
        </div>
    </div>
    <!-- end footer -->
    
</div>


      <script src="../View Base/bs/jquery-1.11.3.min.js" type="text/javascript"></script>
      <script src="../View Base/bs/js/bootstrap.min.js" type="text/javascript"></script>
      
      <script>
	      	$(".btn-group .dropup").click(function(){
			$(".btn-group .dropup .open").removeClass("open");
    		$(this).addClass("open");
			});
	</script>
      
</body>
</html>