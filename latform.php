<!DOCTYPE html>
<html>
<head>
    <title>form</title>
</head>
<body>
<tabel border="0" align="center">
<fieldset>
<legend>Halaman daftar</legend>
<FORM ACTION="latform2.php" METHOD="POST" required>
<h2>Order Form</h2>
Nama : 
<br><input type="text" name="nop"requiread><br>
<td>Alamat :<br></td> 
<td>jalan/kp<input type="text" name="jalan"required>
<td>kecamatan<input type="text" name="kec"required>
<td>Kota<input type="text" name="kota"required>
<td>Provinsi<input type="text" name="pro"required>
<td>kode pos<input type="text" name="kode"required></td><br>
Nama Barang : 
<br><input type="text" name="Nma"required><br>
Harga barang : 
<br><input type="text" name="harga"required><br>
Jumlah Barang :
<br><input type="number" name="jmlh"required><br>
Deskripsi :
<br><input type="text" name="des"required><br>
tanggal pembelian : 
<br><input type="date" name="tgl"required><br>
<br></br>
<input type="submit" name="simpan" value="simpan">
<input type="reset" name="hapus" value="hapus">
</fieldset>
</tabel>
</FORM>
</body>
</html>