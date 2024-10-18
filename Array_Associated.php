<?php
$arr = [
    ["Senin", "Selasa", "Rabu"],
    ["Januari", "Februari", "Maret"],
    ["2020", "2021", "2022"],
];

foreach($arr as $data){
    var_dump($data); 
}

$dataPerson = [
    [
        "nama" => "Najwa",
        "kota" => "Kota Bandung",
        "baju" => "Biru",
        "makanan_favorite" => 
        ["Soto", "Roti", "Nasi"]
    ],
    [
        "nama" => "Mariam",
        "kota" => "Kota Bandung",
        "baju" => "Putih",
        "makanan_favorite" => 
        ["Dimsum", "Ramen", "Pizza"]
    ],
    [
        "nama" => "Radianti",
        "kota" => "Kota Bandung",
        "baju" => "Abu",
        "makanan_favorite" => 
        ["Lomie", "Mixue", "Chatime"]
    ]
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($arr as $data): ?>
    <ul style="margin-bottom: 24px">
        <li>Index 0:<?= $data[0] ?></li>
        <li>Index 1:<?= $data[1] ?></li>
        <li>Index 2:<?= $data[2] ?></li>
    </ul>
    <?php endforeach; ?>

    <?php echo $dataPerson[0]['nama']; ?>

    <?php foreach($dataPerson as $data): ?>
    <ul style="margin-bottom: 24pc; ">
        <li>Nama: <?php echo $data['nama']; ?></li>
        <li>Kota: <?php echo $data['kota']; ?></li>
        <li>Baju: <?php echo $data['baju']; ?></li>
        <li>
        Makanan favorite:
            <ol>
            <?php foreach($data['makanan_favorite'] as $makanan): ?>
                <li><?php echo $makanan; ?></li>
            <?php endforeach; ?>
            </ol>
        </li>
    </ul>
    <?php endforeach; ?>
</body>
</html>

