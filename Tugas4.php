<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<title>Tugas 4</title>
</head>
<body>
	<div class="main">
		<h2>Kalkulator</h2>
			<form action="Tugas4.php" method="post">

			<input type="number" name="bil1" placeholder="Bilangan 1" required="">

			<select class="operator" name="operator">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">*</option>
				<option value="bagi">/</option>
				<option value="modulo">%</option>
				<option value="pangkat">**</option>
			</select>

			<input type="number" name="bil2" placeholder="Bilangan 2" required="">
			<br>
			<button type="submit" name="submit">Hitung</button>
		
		<div class="hasil">
			<?php

				if(isset($_POST['submit'])){
					$bil1 = $_POST['bil1'];
					$bil2 = $_POST['bil2'];
					$operator = $_POST['operator']; 
					

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

		
					switch ($operator) {
						case 'tambah':
							echo penjumlahan($bil1, $bil2); //memanggil fungsi penjumlahan
							break;
						case 'kurang':
							echo pengurangan($bil1, $bil2); //memanggil fungsi pengurangan
							break;
						case 'kali':
							echo perkalian($bil1, $bil2); //memanggil fungsi perkalian
							break;

						case 'bagi':
							echo pembagian($bil1, $bil2); //memanggil fungsi pembagian
							break;

						case 'modulo':
							echo modulo($bil1, $bil2); //memanggil fungsi modulo
							break;

						case 'pangkat':
							echo perpangkatan($bil1, $bil2); //memanggil fungsi perpangkatan
							break;
						
						default:
							echo "tidak";
							break;
					}

				}
			?>	
		</div>

	</form>
</div>

</body>
</html>