<html>
	<head>
		<title>SIAKAD</title>
		<link rel="shortcut icon" href="img/logounej.png"/>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap.min.css">
	    <link rel="stylesheet" href="<?php echo URL; ?>public/css/siakad.css">
		<!-- Script jquery -->
		<script src="public/js/jquery.min.js"></script>
		<!-- Latest compiled and minifieied JavaScript -->
		<script src="public/js/bootstrap.min.js"></script>
	</head>
	<body>
	    <div class="main" style="background-image:url(<?php echo URL;?>img/backgroun-login.png);">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="account-wall" style="margin-top:30px">
							<div class="align-lg-center">
								<img src="<?php echo URL; ?>img/logounej.png" align="center" style="height:100px">
								<h3 class="primary" style="color:#FFF;">SISTEM INFORMASI AKADEMIK</b></h3>
								<h4 class="primary" style="color:#FFF;">UNIVERSITAS JEMBER</b></h4>
								<h5 class="primary" style="color:#FFF; margin-top:30px;">Selamat Datang</h5>
								<div>
								<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"style="color:red"></span>
								<span class="sr-only">Error:</span>
								<span class="sp_center" style="color:red"><?php
									echo session::get('loginfail');
								?></span>
								</div>
							</div>

							<form class="form-signin" action="<?php echo URL; ?>login/run" method="POST">
								<section>
									<div class="input-group">
										<div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
										<input class="form-control" type="text" placeholder="Username" name="username"></input>
									</div>
									<div class="input-group">
										<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
										<input class="form-control" type="password" placeholder="Password" name="password"></input>
									</div>
									<br>
									<button id="sign-in" class="btn btn-danger btn-block" type="submit" style="border: medium none;">Masuk</button>
									<br>
									<p class="footer-link" style="color:#FFF;">© SIAKAD B</p>
								</section>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>