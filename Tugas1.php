<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tugas 1</title>
</head>
<body>

	<!-- form input plat nomor -->
	<form action="Tugas1.php" method="post">
		<label>Nomor Polisi : </label>
		<input type="text" name="nomor">
		<button type="submit" name="submit">Cek</button>
	</form>

	<?php 
		date_default_timezone_set('Asia/Jakarta'); //menampilkan tanggal sesuai zona waktu

		$tgl = date('d');

		if(isset($_POST['submit'])){
			$nomor = $_POST['nomor'];
			
			$plat = preg_replace("/[^0-9]/","",$nomor); //hanya mengambil karakter angka 0-9 yang diinputkan pada var $nomor

			if ($plat %2 == 0 && $tgl %2 == 0) // kondisi 1: var $plat dan $tgl harus bernilai genap (habis dibagi 2).
			{
				echo 'Tanggal Hari ini : '.$tgl.'<br>';
				echo '[Hasil: Kendaraan '. $nomor .' tidak dilakukan penilangan.]';
			}elseif($plat %2 == 1 && $tgl %2 ==1) //kondisi 2 : var $plat dan $tgl harus bernilai ganjil (tidak habis dibagi 2).
			{
				echo 'Tanggal Hari ini : '.$tgl.'<br>';
				echo '[Hasil: Kendaraan '. $nomor .' tidak dilakukan penilangan]';
			}else //var $plat dan $tgl tidak bernilai sama (ganjil/genap).
			{
				echo 'Tanggal Hari ini : '.$tgl.'<br>';
				echo '[Hasil: Kendaraan '. $nomor .' dilakukan penilangan.]';
			}

		}
		
	?>

</body>
</html>