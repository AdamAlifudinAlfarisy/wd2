<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mencoba CRUD</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>


	<?php 

	include "koneksi.php";

		// START cek apakah ada kiriman form dari method POST
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$merek = $_POST["merek"];
		$warna = $_POST["warna"];
		$stok = $_POST["stok"];
		$satuan = $_POST["satuan"];
		$harga = $_POST["harga"];

		$sql = "INSERT into produk (merek, warna, stok, satuan, harga) VALUES
		('$merek','$warna','$stok','$satuan','$harga')";

		// START mengeksekusi data

		$hasil = mysqli_query($db,$sql);

		// END mengeksekusi data

		// START cek hasil eksekusi

		if ($hasil) {
			header("Location:index.php");
			echo "<div class ='alert alert-success'> Berhasil menambahkan data. </div>";
		} else {
			echo "<div class ='alert alert-danger'> Data Gagal disimpan. </div>";
		}
		// END cek hasil eksekusi
	}
		// END cek apakah ada kiriman form dari method POST

	?>
	<div class="jumbotron jumbotron-fluid bg-success text-white">
		<div class="container">
			<h5 class="display-4">Tambah Produk</h5>				
		</div>
	</div>
	<div class="container">		
		<form action="create.php" method="post">
			<div class="form-group row">
				<label for="merek" class="col-sm-2 col-form-label">Merek</label>
				<div class="col-sm-10">
					<input type="text" name="merek" placeholder="Masukan merek" id="" required class="form-control">
				</div>
			</div>
			<div class="form-group row">
				<label for="warna" class="col-sm-2 col-form-label">Warna</label>
				<div class="col-sm-10">
					<input type="text" name="warna" placeholder="Masukan Warna" id="" required class="form-control">
				</div>
			</div>
			<div class="form-group row">
				<label for="stok" class="col-sm-2 col-form-label">Stok</label>
				<div class="col-sm-10">
					<input type="number" name="stok" placeholder="Masukan jumlah stok tersedia" id="" required class="form-control">
				</div>
			</div>
			<div class="form-group row">
				<label for="satuan" class="col-sm-2 col-form-label">Satuan</label>
				<div class="col-sm-10">
					<input type="number" name="satuan" placeholder="Masukan satuan produk" id="" required class="form-control">
				</div>
			</div>
			<div class="form-group row">
				<label for="satuan" class="col-sm-2 col-form-label">Satuan</label>
				<div class="col-sm-10">
					<input type="number" name="harga" placeholder="Masukan harga hanya angka" id="" required class="form-control">
				</div>
			</div>
			<a href="index.php" class="btn btn-danger">Kembali</a>
			<a href="create.php" class="btn btn-warning">Ulangi</a>
			<button type="submit" placeholder="Masukan merek" class="btn btn-success">Simpan</button>
		</form>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.5.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>