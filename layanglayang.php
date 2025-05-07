<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layang Layang</title>
</head>
<a href="index.php">Home</a>
<body>
<?php
    $diagonal1=12;
    $diagonal2=15;
    $sisipendek=5;
    $sisipanjang=8;
    $luas=1/2*$diagonal1*$diagonal2;
    $keliling=2*($sisipendek + $sisipanjang);

    ?>
    <h1>Layang Layang</h1>
    <h4>luas = 1/2 * diagonal1 * diagonal2 = <?php echo $luas;?></h4>
    <h4>keliling 2 * (sisipendek + sisipanjang) = <?php echo $keliling ;?></h4>
    
</body>
<img src="layanglayang.png" widht="300" height="300"alt="">

</html>