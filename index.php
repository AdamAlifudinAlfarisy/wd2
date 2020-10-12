<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Daftar Produk</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="jumbotron jumbotron-fluid bg-success text-white">
		<div class="container">
			<h1 class="display-4">Daftar Produk</h1>
		</div>
	</div>
	<div class="container">
		<a href="create.php" class="btn btn-success mb-2 "> Tambah Produk</a>
		<table class="table">
			<thead class="bg-success text-white">
				<tr>
					<th scope="col">No</th>
					<th scope="col">Merek</th>
					<th scope="col">Warna</th>
					<th scope="col">Stok</th>
					<th scope="col">Satuan</th>
					<th scope="col">Harga</th>
				</tr>
			</thead>

			<?php 

			include "koneksi.php";

			// START ambil data dari tabel produk
			$sql = "SELECT * from produk ORDER BY merek";
			// END ambil data dari tabel produk

			// START mengeksekusi data
			$hasil = mysqli_query($db,$sql);
			$no = 0;
			while ($data = mysqli_fetch_array($hasil)) {
				$no++;

				?>
				<!-- START isi body tabel -->
				<tbody>
					<tr>
						<td><?php echo $no ?></td>
						<td><?php echo $data['merek']?></td>
						<td><?php echo $data['warna']?></td>
						<td><?php echo $data['stok']?></td>
						<td><?php echo $data['satuan']?></td>
						<td><?php echo $data['harga']?></td>
					</tr>
				</tbody>
				<!-- END isi body tabel -->

				<?php 

			}
			// END mengeksekusi data
			?>

		</table>
	</div>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.5.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>