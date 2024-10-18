<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengkondisian</title>
</head>
<body>
    <?php
    //if-else
    //if-else if-else
    //Cara 1: jawaban = umur sama dengan 20
    $umur = 20;
    if($umur == 20){
        //true
        echo "Umur sama dengan 20";
    }else if($umur < 20){
        //true apabila kondisi pertama tidak terpenuhi
        echo "Umur kurang dari 20";
    }else if($umur < 30){
        echo "Umur kurang dari 30";
    }else{
        //false
        echo "Umur lebih dari 30";
    }
    
    //Cara 2: jawaban = true
    echo ($umur < 30 ? true : false);
    
    //ternary
    //Cara 3: jawaban = umur kurang dari 30
    echo ($umur < 30 ? "Umur kurang dari 30" : "Umur lebih dari 30");


    //switch : jawaban =  umur 20
    switch($umur){
        case 15;
        echo "Umur 15";
        break;
        case 20;
        echo "Umur 20";
        break;
        default;
        echo "Umur tidak didefinisikan";
    }

    switch($umur){
        case 15;
        case 16;
        case 17;
        case 18;
        case 19;
        case 20;
        echo "Umur di bawah 20 di atas 14";
        break;
        case 20;
        echo "Umur 20";
        break;
        default;
        echo "Umur tidak didefinisikan";
    }
    


    ?>
</body>
</html>