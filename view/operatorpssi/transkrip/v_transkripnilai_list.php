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
</html>
<body>
	<div class="container">
    <table class="table table-striped custab">
    <a href="creatematkul" class="btn btn-primary btn-xs pull-left"><b>+</b> Create Mata Kuliah</a>
    </div>
    			<table class="table table-striped">
				<thead>
					<tr>
						<th class="text-center">Kode Matkul</th>
						<th>Mata Kuliah</th>
						<th class="text-center">SKS</th>
						<th class="text-center">Jenis</th>
						<th class="text-center">Semester</th>
						<th class="text-center">Sharing</th>
						<th class="text-center">Aksi</th>
						<th class="text-center">Status</th>
					</tr>
				</thead>
    			@foreach($tb_matakuliahs as $tb_matakuliahs)
    				<tbody>
					<tr>
						<td class="text-center">{{$tb_matakuliahs->kode_matkul}}</td>
						<td>{{$tb_matakuliahs->nama_matkul}}</td>
						
						<td class="text-center">{{$tb_matakuliahs->jumlahSKS}}</td>	
						<td class="text-center">{{$tb_matakuliahs->idJenis}}</td>
						<td class="text-center">{{$tb_matakuliahs->idStatusSemester}}</td>
						<td class="text-center">{{$tb_matakuliahs->idSharing}}</td>
						<td class="text-center"><a class='btn btn-info btn-xs' href="/operatorpssi/showdatamatkul/{{$tb_matakuliahs->id}}"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="/operatorpssi/deletematkul/{{$tb_matakuliahs->id}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
						<td><span class="label label-success">Tervalidasi</span>
					</tr>
				@endforeach

				</tbody>
			</table>
</body>

