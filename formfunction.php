<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>function</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <p>luas persegi</p>
    <fieldset>
    <legend>
    luas persegi</legend>
    <form action="" method="get">
    <label for="">sisi</label>
    <input type="number" min="1" name="s" required>
    <br>
    <input type="submit" name="simpan" value="simpan"> 
    </form>
    </fieldset>

    <?php
    if (isset($_GET['simpan'])) {
        $sisi=$_GET['s'];

        function luas_persegi($s) 
        {
            $luas=$s * $s;
            return $luas;
        }

        $luas=luas_persegi($sisi);
        echo "luas persegi : $luas";
    }
    ?>
</body>
</html>