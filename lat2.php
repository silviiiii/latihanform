<?php
$a=1;
for ($i=1; $i <=150 ; $i++) { 
    echo "perkaliaan <b>$i</b> <br>";
    for ($b=1; $b <=10 ; $b++) { 
        $k=$i * $b;
        if ($k%2==1) {
            $c="ganjil";
        }
        else {
            $c="genap";
        }
        echo "<b> $i x $b =$k</b> adalah bilangan $c <br>";
    }
    echo "<hr>";
}

?>