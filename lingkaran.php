<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>mencari luas dan keliling</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <p>Masukkan Jari-Jari Lingkaran</p>
<form action="" method="post">
	Jari-jari :<input type="text" name="jari2"><br>
	<input type="submit" name="submit" value="Hitung">
</form>
 
<?php
if(isset($_POST['submit'])){
	$jari2 = $_POST['jari2'];
	$phi = 3.14;
	$luas_lingkaran = $phi * $jari2 * $jari2;
	$keliling_lingkraran = $phi*($jari2 + $jari2);
	
	echo "Lingkarann dengan jari-jari $jari2 maka memiliki <br>";
	echo "Luas : $luas_lingkaran <br>";
	echo "Keliling : $keliling_lingkraran";
}
?>
</body>
</html>