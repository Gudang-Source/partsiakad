<html>
<head>
  <title>SIAKAD</title>
  <link rel="shortcut icon" href="img/logounej.png"/>
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo URL; ?>public/css/siakad.css">

    <!-- Script jquery -->
  <script src="<?php echo URL; ?>public/js/jquery.min.js"></script>
    <!-- Latest compiled and minifieied JavaScript -->
  <script src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>
</head>
<body>
<div class="" style="padding-top:0px">
    <nav class="navbar navbar-default" style="margin:0px">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand">SIAKAD</a>
        </div>
  <div class="collapse navbar-collapse" id="mainNavbar" >
    <ul class="nav navbar-nav">
      <li class=""><a href="">Dashboard</a></li>
        <li class="dropdown">
          <a href="" class="dropdown-toggle active" data-toggle="dropdown">Mata Kuliah
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo URL?>matkul">Data</a></li>
            <li><a href="<?php echo URL?>matkulreguler">Reguler</a></li>
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
</body>