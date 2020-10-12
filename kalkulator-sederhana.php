<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kalkulator Sederhana</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- My CSS -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="jumbotron jumbotron-fluid bg-warning text-dark">
		<div class="container">
			<h3 class="display-4">Kalkulator Sederhana</h3>
		</div>
	</div>

	<?php 

	if(isset($_POST['hitung'])){

		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];

		function penjumlahan($bil1, $bil2){
			return $bil1 + $bil2;
		}
		function pengurangan($bil1, $bil2){
			return $bil1 - $bil2;
		}
		function pembagian($bil1, $bil2){
			return $bil1 / $bil2;
		}
		function perkalian($bil1, $bil2){
			return $bil1 * $bil2;
		}
	}
	?>

	<div class="container">

		<form method="POST">
			<div class="form-group">			
				<label for="">Bilangan Pertama</label>
				<input type="number" class="form-control" name="bil1">
			</div>
			<div class="form-group">

				<label for="">Bilangan Kedua</label>
				<input type="number" class="form-control" name="bil2">
			</div>
			<button type="submit" class="btn btn-warning" name="hitung">Hitung</button>
		</form>
	</div>
	<br>
	<div class="container myBorder">		
		<samp>

			<?php 

			if(isset($_POST['hitung'])){
				echo "Bilangan 1 : " . $bil1 . "<br>";
				echo "Bilangan 2 : " . $bil2 . "<br>";

				echo "Hasil Penjumlahan adalah : " . penjumlahan($bil1, $bil2) . "<br>";
				echo "Hasil Pengurangan adalah : " . pengurangan($bil1, $bil2) . "<br>";
				echo "Hasil Perkalian adalah : " . perkalian($bil1, $bil2) . "<br>";
				echo "Hasil Pembagian adalah : " . pembagian($bil1, $bil2) . "<br>";

			} else{
				echo "bilangan 1 : 0 <br>";
				echo "bilangan 2 : 0 <br>";
				echo "<hr>";
				echo "<hr>";

				echo "Hasil Penjumlahan adalah : 0 <br>";
				echo "Hasil Pengurangan adalah : 0 <br>";
				echo "Hasil Perkalian adalah : 0 <br>";
				echo "Hasil Pembagian adalah : 0 <br>";

			}

			?>

		</samp>
	</div>	
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.5.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>