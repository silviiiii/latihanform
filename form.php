<html>
<head><title>Login Here</title></head>
<body>
<tabel>
<fieldset>
<legend>Halaman register</legend>
<FORM ACTION="form2.php" METHOD="POST" >
<h2>Formulir pendaftaran</h2>
No.Pendaftaran : 
<br><input type="text" name="nop"><br>
NISN : 
<br><input type="text" name="Nisn"><br>
nama : 
<br><input type="text" name="nama"><br>
Alamat :
<br><input type="text" name="alamat"><br>
tempat lahir :
<br><input type="text" name="tempat"><br>
tanggal lahir : 
<br><input type="date" name="tgl"><br>
Asal sekolah : 
<br><input type="text" name="asal"><br>
Jenis kelamin :
<br><input type="radio" name="jenkel" value="laki-laki" checked>
Laki-laki
<br><input type="radio" name="jenkel" value="perempuan"> Perempuan<br>
Jurusan :
<select name="jurus">
<option value="RPL">RPL</option>
<option value="TSM">TSM</option>
<option value="TKR">TKR</option></select><br>
Nama Ayah : 
<br><input type="text" name="Namaa"><br>
Pekerjaan Ayah : 
<br><input type="text" name="kerja"><br>
Nama ibu : 
<br><input type="text" name="Namaaa"><br>
Pekerjaan ibu : 
<br><input type="text" name="kerjaa"><br>
Hobby : 
<br><input type="checkbox" name="hobi" value="berenang"> berenang
<br><input type="checkbox" name="hobi2" value="menari"> menari
<br><input type="checkbox" name="hobi3" value="masak"> masak
<br><input type="checkbox" name="hobi4" value="membaca"> membaca<br>
tinggi badan : 
<br><input type="text" name="tng"><br>
berat badan : 
<br><input type="text" name="brt"><br>
agama :
<select name="agama">
<option value="Islam">islam</option>
<option value="kristen">kristen</option>
<option value="hindu">hindu</option></select><br>
<input type="submit" name="simpan" value="simpan">
<input type="reset" name="hapus" value="hapus">
</fieldset>
</FORM>
</body>
</html>