<?php
if (isset($_POST['submit'])) {
   $jubin = $_POST['jb'];
    
for($a=1; $a<=$jubin; $a++){
    for($b=$jubin; $b>=$a; $b-=1){
        print('&nbsp');
    }
    for($c=1; $c<=$a; $c++){
        echo '*';
    }
    echo "<br/>";
}
}
    echo "Jumlah Bintang : $jubin";
    ?>