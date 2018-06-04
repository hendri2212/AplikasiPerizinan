<?php include_once 'config/connection.php'; ?>
<html>
	<head>
		<title>Aplikasi Perizinan</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="header">
				<h1>Silahkan di isis</h1>
			</div>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="?module=beranda">Beranda</a>
				<a class="dropdown-item" href="?module=syarat">Persyaratan</a>
				<a class="dropdown-item" href="#">Something else here</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Separated link</a>
			</div>
			<?php include_once 'content.php'; ?>
			<div class="card-footer text-muted text-center"> copyright &copy; 2018 </div>
		</div>
	</body>
</html>
