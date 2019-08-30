<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>pendaftaran</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="" method="post"></form>
    <fieldset>
    <legend>pendaftaran TNi</legend>
    Nama : <input type="text" name="nama"><br>
    Tinggi : <input type="number" name="t"><br>
    Berat : <input type="number" name="b"><br>
   <input type="submit" name="submit" value="submit">
</form>
 
<?php
if(isset($_POST['submit'])){
        $name=$_POST['nama'];
        $tinggi=$_POST['t'];
        $berat=$_POST['b'];
        function seleksi($tinggi,$berat,$name){
            if ($tinggi >= 165 && $berat >= 60) {
                echo "Selamat anda di terima";
                echo "nama : $name <br>";
            }
            else {
                echo "maaf anda tidak diterima";
            }
        }
        $hasil=seleksi($tinggi,$berat,$name);
        echo $hasil;
    }
    ?>
    </fieldset>

</body>
</html>