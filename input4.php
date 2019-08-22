<<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<FORM ACTION="" METHOD="POST" NAME="input">
nama : <input type="text" name="nama"><br>
nilai1 : <input type="text" name="nilai1"><br>
nilai2 : <input type="text" name="nilai2"><br>
<input type="submit" name="input" value="input">
<input type="submit" name="reset" value="hapus">
</form>
</body>
</html>
<?php 
if (isset($_POST['input'])) {
$nama= $_POST['nama'];
$nilai1 = $_POST['nilai1'];
$nilai2 = $_POST['nilai2'];
$rata = ($nilai1+$nilai2)/2;
echo "nama : <b>$nama</b><br>";
echo "nilai 1 : <b>$nilai1</b><br>";
echo "nilai 2 : <b>$nilai2</b><br>";
echo "nilai rata-rata : <b>$rata</b><br>";
}
?>