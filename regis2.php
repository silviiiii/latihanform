<?php
if (isset($_POST['Login'])) {
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jk = $_POST['jenis_kelamin'];
$agama =$_POST['agama'];
$email =$_POST['email'];
$pass = $_POST['password'];

    if ($email =="silvianindya11@gmail.com" && $pass == "1109") {
    echo "nama : $nama.<br>";
    echo "alamat : $alamat.<br>";
    echo "jenis kelamin : $jk.<br>";
    echo "agama : $agama.<br>";
    echo "email : $email.<br>";
    echo "<h2>Registrasi Berhasil.Akun Anda telah aktif</h2>";
   
    }else{
    echo "<b>Registrasi</b> <br>";
    echo "nama : $nama.<br>";
    echo "alamat : $alamat.<br>";
    echo "jenis kelamin : $jk.<br>";
    echo "agama : $agama.<br>";
    echo "email : $email.<br>";
    echo "<h2>Registrasi Berhasil.Akun Anda Tidak/belum aktif</h2>";
    
    }  
}

?>