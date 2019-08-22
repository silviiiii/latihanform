<?php
if (isset($_POST['input'])) {
$no = $_POST['No.pendaftaran'];  
$nisn = $_POST['Nisn'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tmpt = $_POST['tempat'];
$tgl = $_POST['tgl'];
$asl = $_POST['asal'];
$jk = $_POST['jenkel'];
$jr = $_POST['jurus'];
$ayah = $_POST['namaa'];
$krj = $_POST['kerja'];
$agama =$_POST['agama'];
$email =$_POST['email'];
$pass = $_POST['password'];

if ($pass == "1109"){
    echo "No.pendaftaran : $no.<br>";
    echo "NISN : $nisn.<br>";
    echo "nama : $nama.<br>";
    echo "alamat : $alamat.<br>";
    echo "Tempat lahir : $tmpt.<br>";
    echo "Tanggal lahir : $tgl.<br>";
    echo "Asal sekolah : $asl.<br>";
    echo "jenis kelamin : $jk.<br>";
    echo "jurusan : $jr.<br>";
    echo "Nama ayah : $ayah.<br>";
    echo "pekerjaan ayah : $krj.<br>";
    echo "agama : $agama.<br>";
    echo "email : $email.<br>";
    echo "<h2>Registrasi Berhasil.Akun Anda telah aktif</h2>";
}
}
?>