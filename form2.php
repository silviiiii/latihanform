<?php
if (isset($_POST['simpan'])) {
$now = $_POST['nop'];  
$nis = $_POST['Nisn'];
$nam = $_POST['nama'];
$alam = $_POST['alamat'];
$tmpt = $_POST['tempat'];
$tg = $_POST['tgl'];
$asl = $_POST['asal'];
$jk = $_POST['jenkel'];
$jr = $_POST['jurus'];
$ayah = $_POST['Namaa'];
$krj = $_POST['kerja'];
$ibu = $_POST['Namaaa'];
$krji = $_POST['kerjaa'];
$tinggi = $_POST['tng'];
$berat = $_POST['brt'];
$agama =$_POST['agama'];

    echo "No.pendaftaran : $now.<br>";
    echo "NISN : $nis.<br>";
    echo "nama : $nam.<br>";
    echo "alamat : $alam.<br>";
    echo "Tempat lahir : $tmpt.<br>";
    echo "Tanggal lahir : $tg.<br>";
    echo "Asal sekolah : $asl.<br>";
    echo "jenis kelamin : $jk.<br>";
    echo "jurusan : $jr.<br>";
    echo "Nama ayah : $ayah.<br>";
    echo "pekerjaan ayah : $krj.<br>";
    echo "Nama ibu : $ibu.<br>";
    echo "pekerjaan ibu : $krji.<br>";
    echo "hobby : $hobi.<br>";
    if (isset($_POST['hobi'])) {
        echo " ~ " . $_POST['hobi'] . "<br>";
        }
        if (isset($_POST['hobi2'])) {
        echo " ~ " . $_POST['hobi2'] . "<br>";
        }
        if (isset($_POST['hobi3'])) {
        echo " ~ " . $_POST['hobi3'] . "<br>";
        }
        if (isset($_POST['hobi4'])) {
        echo " ~ " . $_POST['hobi4'] . "<br>";
        }
    echo "tinggi badan : $tinggi.<br>";
    echo "berat badan : $berat.<br>";
    echo "agama : $agama.<br>";

}

?>