
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tugas 2</title>
</head>
<body>

	<!-- form input bilangan -->
	<form action="Tugas2.php" method="post">
		<label>Masukkan Bilangan</label>
		<input type="text" name="bilangan">
		<button type="submit" name="submit">hitung</button>
	</form>

	<?php
			if(isset($_POST['submit'])) {
				$bilangan = $_POST['bilangan'];

				for($i=$bilangan; $i<=$bilangan && $i>0; $i--){
					for($j=1; $j<=$i; $j++){
						echo "($i,$j)";
					}
					echo "<br>";
				}
			}

	?>

</body>
</html>