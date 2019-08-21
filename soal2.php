<<?php
$nilai=80;
$n =85;
$b = 70;
$c = 75;
$d ="lulus";

if ($nilai > 80) {
    $grade = "A";
} elseif($nilai > 75){
    $grade = "B";
} elseif($nilai > 60){
    $grade = "c";
} elseif($nilai > 60){
    $grade = "D";
} else {
    $grade = "F";
}

echo "Nilai B.indonesia : $n<br>";
echo "Nilai Matematika : $b<br>";
echo "Nilai Rata-rata : $c<br>";
echo "Keterangan : $d<br>";
echo "Grade: $grade";
?>