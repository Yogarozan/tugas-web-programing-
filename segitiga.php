<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segitiga</title>
</head>
<a href="index.php">Home</a>
<body>
<?php
    $alas=6;
    $tinggi=18;
    $sisia=7;
    $sisib=8;
    $sisic=5;
    $luas=2*($alas*$tinggi);
    $keliling=$sisia + $sisib + $sisic;

    ?>
    <h1>Segitiga</h1>
    <h4>luas = 2 (alas x tinggi) = <?php echo $luas;?></h4>
    <h4>keliling = sisia + sisib + sisic = <?php echo $keliling;?></h4>
    
</body>
<img src="Segitiga.png" widht="300" height="300"alt="">

</html>