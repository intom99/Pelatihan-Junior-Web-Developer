<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tugas 3</title>
</head>
<body>

	<!-- form input bilangan -->
	<form action="Tugas3.php" method="post">
		<label>Masukkan Bilangan ke-1 : </label>
		<input type="text" name="bil1"><br><br>
		<label>Masukkan Bilangan ke-2 : </label>
		<input type="text" name="bil2">
		<button type="submit" name="submit">Kirim</button>
	</form>
	<br>

	<?php

		if(isset($_POST['submit'])){
			$bil1 = $_POST['bil1'];
			$bil2 = $_POST['bil2'];

			/*
			Fungsi penjumlahan untuk menghitung hasil penjumlahan dari bil1 dan bil2.
			IS : variable input yang digunakan yaitu $bil1, $bil2.
			FS : output dari fungsi ini berupa $hasil dari penjumlahan 2 variable yang diinput yaitu $bil1 dan $bil2.
			*/
			function penjumlahan($bil1, $bil2){
				$hasil = $bil1 + $bil2;
				return $hasil;
			}


			/*
			Fungsi pengurangan untuk menghitung hasil pengurangan dari bil1 dan bil2.
			IS : variable input yang digunakan yaitu $bil1, $bil2.
			FS : output dari fungsi ini berupa $hasil dari pengurangan 2 variable yang diinput yaitu $bil1 dan $bil2.
			*/
			function pengurangan($bil1, $bil2){
				$hasil = $bil1 - $bil2;
				return $hasil;
			}


			/*
			Fungsi perkalian untuk menghitung hasil perkalian dari bil1 dan bil2.
			IS : variable input yang digunakan yaitu $bil1, $bil2.
			FS : output dari fungsi ini berupa $hasil dari perkalian 2 variable yang diinput yaitu $bil1 dan $bil2.
			*/
			function perkalian($bil1, $bil2){
				$hasil = $bil1 * $bil2;
				return $hasil;
			}


			/*
			Fungsi pembagian untuk menghitung hasil pembagian dari bil1 dan bil2.
			IS : variable input yang digunakan yaitu $bil1, $bil2.
			FS : output dari fungsi ini berupa $hasil dari pembagian 2 variable yang diinput yaitu $bil1 dan $bil2.
			*/
			function pembagian($bil1, $bil2){
				$hasil = $bil1 / $bil2;
				return $hasil;
			}


			/*
			Fungsi modulo untuk menghitung hasil sisa bagi dari bil1 dan bil2.
			IS : variable input yang digunakan yaitu $bil1, $bil2.
			FS : output dari fungsi ini berupa $hasil dari perhitungan sisa bagi 2 variable yang diinput yaitu $bil1 dan $bil2.
			*/
			function modulo($bil1, $bil2){
				$hasil = $bil1 % $bil2;
				return $hasil;
			}


			/*
			Fungsi perpangkatan untuk menghitung hasil pangkat dari bil1 dan bil2.
			IS : variable input yang digunakan yaitu $bil1, $bil2.
			FS : output dari fungsi ini berupa $hasil dari perpangkatan 2 variable yang diinput yaitu $bil1 dan $bil2.
			*/
			function perpangkatan($bil1, $bil2){
				$hasil = $bil1 ** $bil2;
				return $hasil;
			}

			// output yang ditampilkan
			echo "Bilangan Masukkan ke-1 : ".$bil1."<br>";
			echo "Bilangan Masukkan ke-2 : ".$bil2."<br>";
			echo "<br>";
			echo "Hasil penjumlahan adalah : ".penjumlahan($bil1, $bil2)."<br>";   //memanggil fungsi penjumlahan  
			echo "Hasil pengurangan adalah : ".pengurangan($bil1, $bil2)."<br>";   //memanggil fungsi pengurangan
			echo "Hasil perkalian adalah : ".perkalian($bil1, $bil2)."<br>";       //memanggil fungsi perkalian
			echo "Hasil pembagian adalah : ".pembagian($bil1, $bil2)."<br>";       //memanggil fungsi pembagian
			echo "Hasil sisa bagi adalah : ".modulo($bil1, $bil2)."<br>";          //memanggil fungsi modulo
			echo "Hasil perpangkatan adalah : ".perpangkatan($bil1, $bil2)."<br>"; //memanggil fungsi perpangkatan

		}
	?>

</body>
</html>