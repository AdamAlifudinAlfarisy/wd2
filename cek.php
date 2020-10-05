<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hasil</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="jumbotron jumbotron-fluid bg-info text-white">
		<div class="container">
			<h1 class="display-4">Data Diri Anda</h1>
		</div>
	</div>
	<div class="container">
		
		<?php 
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$tempat = $_POST['tempat'];
		$tanggal = $_POST['tanggal'];
		$jenisKelamin = $_POST['jenisKelamin'];
		$usia = $_POST['usia'];

		if ($nama == "") {
			header("location:kominfo.php?nama=kosong");
		} else{
			echo "<h5>Nama anda adalah " . $nama . "</h5>";
			echo "<br>";
		}

		if ($alamat == "") {
			header("location:kominfo.php?alamat=kosong");
		} else{
			echo "<h5>Alamat anda di " . $alamat . "</h5>";
			echo "<br>";
		}

		if ($tempat == "") {
			header("location:kominfo.php?tempat=kosong");
		} else{
			echo "<h5>Tempat lahir anda di " . $tempat . "</h5>";
			echo "<br>";
		}

		if ($tanggal == "") {
			header("location:kominfo.php?tanggal=kosong");
		} else{
			echo "<h5>Tanggal lahir anda adalah " . $tanggal . "</h5>";
			echo "<br>";
		}

		if ($jenisKelamin == "") {
			header("location:kominfo.php?jenisKelamin=kosong");
		} else{
			echo "<h5>Kelamin anda adalah " . $jenisKelamin . "</h5>";
			echo "<br>";
		}
		if ($usia == "") {
			header("location:kominfo.php?usia=kosong");
		} else{
			echo "<h5>Usia anda adalah " . $usia . "</h5>";
			echo "<br>";
		}
		?>

	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.js@1.16.1.js"></script>
	<script src="js/jquery-3.5.1.slim.min.js"></script>
</body>
</html>