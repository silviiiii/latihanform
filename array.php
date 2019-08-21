<?php
$a = array('candra',21,true,14.45);
echo $a[1];

for ($i=4; $i >= 0; $i--) {
    echo $a[$i] . "<br>";
}

$aso=['nama'=> 'silvi','umur' => 15,'alamat' =>'bandung'];

foreach ($aso as $index) {
    echo $index ."<br>";
}
?>