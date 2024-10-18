<?php
$arr1 = array("Senin", "Selasa", "Rabu"); //Cara lama

$arr2 = ["Senin", "Selasa", "Rabu"]; //Cara baru

//echo hanya bekerja untuk string / int
//khsuus debaugging / Developer
//var_dump() / print_r

// var_dump($arr2);
// echo "<br/>";
// print_r($arr2);
// echo "<br/>";
// echo $arr2[1];

//Cara 1
for($i = 0; $i < 3; $i++){
    echo $arr2[$i] . "<br/>";
}
for($i = 0; $i < count($arr2); $i++){
    echo $arr2[$i] . "<br/>";
}
echo "<hr/>";
//Cara 2
foreach($arr2 as $hari){
    echo $hari . "<br/>";
}
?>