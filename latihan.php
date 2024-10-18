<?php
$nama = "Najwa Sintiya Ashila";
$umur = "21";
$birthday = "19-07-2003";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
</head>
<body>
<ul>
    <li>Nama: <?php echo $nama; ?></li>
    <li>Umur: <?php echo $umur; ?></li>
    <li>Tanggal Lahir: <?php echo $birthday; ?></li>
    <li>5 x 5 adalah <?php echo 5 * 5; ?></li>
</ul>

<!--Cara Lain-->
<ul>
    <li>Nama: <?= $nama; ?></li>
    <li>Umur: <?= $umur; ?></li>
    <li>Tanggal Lahir: <?= $birthday; ?></li>
    <li>5 x 5 adalah <?= 5 * 5; ?></li>
</ul>
</body>
</html>