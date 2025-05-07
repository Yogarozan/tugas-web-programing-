<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lingkaran</title>
</head>
<a href="index.php">Home</a>
<body>
<?php
    $pi=3.14;
    $diameter=10;
    $jarijari=5;
    $luas=$pi*$jarijari*$jarijari;
    $keliling=$pi*$diameter;

    ?>
    <h1>Lingkaran</h1>
    <h4>luas=pi * jari jari * jari jari = <?php echo $luas;?></h4>
    <h4>keliling=pi * diameter = <?php echo $keliling;?></h4>
    
</body>
<img src="lingkaran.png" widht="300" height="300"alt="">

</html>