<?php
if (isset($_POST['Pilih'])) {
echo "<i>Band Favorit Anda adalah :</i><br>";
if (isset($_POST['band01'])) {
echo "<b> ~ " . $_POST['band01'] . "</b><br>";
}
if (isset($_POST['band02'])) {
echo "<b> ~ " . $_POST['band02'] . "</b><br>";
}
if (isset($_POST['band03'])) {
echo "<b> ~ " . $_POST['band03'] . "</b><br>";
}
if (isset($_POST['band04'])) {
echo "<b> ~ " . $_POST['band04'] . "</b><br>";
}
}
?>
