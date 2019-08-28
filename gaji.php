<html>
<head><title>Menghitung gaji</title></head>

<body>
<form ACTION="gaji2.php" methode="GET">
<table>
<tr>
<td>Nama</td>
<td> : </td>
<td><input type=text name=nama size=27></td>
</tr>
<tr>
<td>Golongan</td>
<td> : </td>
<td> <select name="golongan">
    <option value="1" selected="selected"> - </option>
    <option value="2"> A </option>
    <option value="3"> B </option>
    <option value="4"> C </option>
    <option value="5"> D </option>
    </td>
</tr>
<td>Jenis Kelamin</td>
<td> : </td>
<td>
    <select name=kelamin>
    <option value="1" selected="selected"> - </option>
        <option value="l"> Laki-Laki </option>
        <option value="p"> Perempuan </option></select></td>
</tr>
<td>Status Perkawinan</td>
<td> : </td>
<td>
    <select name=status>
    <option value="1" selected="selected"> - </option>
        <option value="s"> Sudah Menikah </option>
        <option value="b"> Belum Menikah </option></select></td>
</tr>
<tr>
    <td colspan="3"><input type=Submit name="submit" value=Hitung><input type=reset name="reset" value=Hapus></td>
</tr>

</table>
</form>
</body>
</html>