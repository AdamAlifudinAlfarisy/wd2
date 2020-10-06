<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Validasi dengan PHP</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<!-- Style h1 -->
	<div class="jumbotron jumbotron-fluid bg-info text-white">
		<div class="container">
			<h1 class="display-4">Membuat Form Validasi Dengan PHP</h1>
		</div>
	</div>

	<!-- Container php -->
	<div class="container">

		<?php 
		// proses eksekusi form
		if (isset($_GET['nama'])){
			if ($_GET['nama'] == "kosong"){
				echo "<h4 style='color:red'>Nama anda Belum di masukan!</h4>";
			}
		}
		if (isset($_GET['alamat'])){
			if ($_GET['alamat'] == "kosong"){
				echo "<h4 style='color:red'>Alamat anda Belum di masukan!</h4>";
			}
		}
		if (isset($_GET['tempat'])){
			if ($_GET['tempat'] == "kosong"){
				echo "<h4 style='color:red'>Tempat lahir anda Belum di masukan!</h4>";
			}
		}
		if (isset($_GET['tanggal'])){
			if ($_GET['tanggal'] == "kosong"){
				echo "<h4 style='color:red'>Tanggal lahir anda Belum di masukan!</h4>";
			}
		}
		if (isset($_GET['jenisKelamin'])){
			if ($_GET['jenisKelamin'] == "kosong"){
				echo "<h4 style='color:red'> Kelamin anda Belum di masukan!</h4>";
			}
		}
		if (isset($_GET['usia'])){
			if ($_GET['usia'] == "kosong"){
				echo "<h4 style='color:red'> Usia anda Belum di masukan!</h4>";
			}
		}
		?>

	</div>

	<!-- isi form -->
	<div class="container">
		<h4>Masukan Data Diri Anda : </h4><br>
		<form action="cek.php" method="post">
			<!-- inputan nama -->
			<div class="form-group row">
				<label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="inputnama" name="nama" placeholder="nama lengkap">
				</div>
			</div>
			<!-- inputan alamat -->
			<div class="form-group row">
				<label for="inputalamat" class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="inputalamat" name="alamat" placeholder="alamat lengkap sesuai tempat tinggal">
				</div>
			</div>
			<!-- inputan tempat tanggal lahir -->
			<div class="form-group row">
				<label for="inputtempatlahir" class="col-sm-2 col-form-label">Tempat Tanggal Lahir </label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="inputtempatlahir" name="tempat" placeholder="tempat kelahiran"> <br>
					<input type="date" class="form-control" name="tanggal">
				</div>
			</div>
			<!-- inputan jenis kelamin -->
			<div class="form-group row">	
				<label for="inputjeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin </label>
				<div class="col-sm-10">				
					<select class="custom-select" name="jenisKelamin">
						<option value="Laki-Laki">Laki-Laki</option>
						<option value="Perempuan">Perempuan</option>
						<option value="Perempuan">Lainnya</option>
					</select>
				</div>
				<!-- inputan usia -->
				<div class="container">
					<div class="form-group row">
						<label for="inputusia" class="col-sm-2 col-form-label">Usia </label>
						<div class="col-sm-10">
							<br>
							<input type="number" class="form-control" id="inputusia" name="usia" placeholder="usia sekarang">
						</div>
					</div>
				</div>
				<!-- tombol submit -->
				<div class="container-sm">					
					<button type="submit" class="btn btn-info">Cek</button>
				</div>
			</form>
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.5.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
	</html>