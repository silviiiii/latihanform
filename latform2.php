<?php
if (isset($_POST['simpan'])) {
$nama = $_POST['nop'];  
$al = $_POST['ala'];
$jln = $_POST['jalan'];
$kc = $_POST['kec'];
$kt = $_POST['kota'];
$pr = $_POST['pro'];
$kd = $_POST['kode'];
$nm = $_POST['Nma'];
$hr = $_POST['harga'];
$jm = $_POST['jmlh'];
$ds = $_POST['des'];
$td = $_POST['tgl'];

    echo "Nama : $nama.<br>";
    echo "alamat $al.<br>";
    echo "jalan/kp : $jln";
    echo "kecamatan : $kc";
    echo "kota : $kt";
    echo "provinsi : $pr";
    echo "kode pos : $kd.<br>";
    echo "Nama barang : $nm.<br>";
    echo "harga barang : $hr.<br>";
    echo "deskripsi : $ds.<br>";
    echo "tanggal pembelian : $td.<br>";
    echo "jumlah barang : $jm.<br>";
    $total=$hr * $jm;
    if ($jm >10) {
        echo "<h3>Anda mendapatkan diskon 20% karena lebih dari 10,/h3>";
        echo "total pembelian :Rp $total";
        echo "<br></br>";
        $dis= ($hr*10/100)*jm;
        $todis= $total - $dis;
        echo "diskon :rp $dis";
        echo "<br></br>";
        echo "total :rp $todis";
        echo "<br></br>";
    }
   }

?>