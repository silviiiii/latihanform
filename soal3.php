<?php
$a=1;
for ($i=1; $i <=10 ; $i++) { 
    echo "hitung perkalian $i <br>";
    echo "<br>";
    for ($b=1; $b <=10 ; $b++) { 
        $k=$i * $b;
        if ($k%2==1) {
            $c="ganjil<br>";
        }
        else {
            $c="genap<br>";
        }
        echo " $i * $b => $k bilangan $c <br>";
    }
    echo "<hr>";
}

?>