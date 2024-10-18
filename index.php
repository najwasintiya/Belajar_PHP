<?php
// standard output

// Ini untuk menampilkan string (1)
    echo "Najwa Sintiya Ashila";

// Gunakan "<br/> untuk enter di browser
    echo "<br/>";

// Gunakan \n untuk enter di terminal
    echo "Najwa Sintiya Ashila\n";

// Ini untuk menampilkan string (2)
    print "Najwa Sintiya Ashila\n";

// Ini untuk menampilkan data string, array, dsb (3)
// print_r adalah fungsi build-in dari PHP

    print_r("Najwa Sintiya Ashila");

// Ini untuk menampilkan string (4)
// var_dump adalah fungsi build-in dair PHP
// cara ini khusus untuk analisa data / untuk programmer
var_dump("Najwa Sintiya Ashila");

// menggabungkan 2 string, gunakan . (dot)
    print "Najwa Sintiya Ashila"."Najwa Sintiya Ashila\n";

$string1 = "Najwa Sintiya Ashila";
$string2 = "(Menggunakan variable terpisah)";

echo $string1 .''. $string2;

$string_satu = "Najwa Sintiya Ashila";
$string_dua = "(Menggunakan variable terpisah)";

echo $string_satu .''. $string_dua;

echo 19; //Int
echo '19'; //String

echo 12 + 8 . "\n"; //Integer //secara default string di convert ke int oleh php
echo "12" + 8; //String //bukan cara yang rekomendasi

$x = 5;
$y = 10;

$hasilxy = $x * $y;

echo "Hasil kali" . $x . "x" . $y . "=" . $hasilxy;

echo 5 + 5;
echo "\n";
echo 5 - 5;
echo "\n";
echo 5 * 5;
echo "\n";
echo 5 / 5;
echo "\n";
echo 5 % 5; //modulus untuk mencari nilai akhir apakah apakah ada sisa atau tidak
echo "\n";

$a = 5;
$a += 10;
echo $a;

//biasanya untuk menggabungkan tag HTML pada logic
$a = "<div>";
$a = "<h3>Najwa Sintiya Ashila</h3>";
$a .= "<p>(Gunakan . untuk menggabungkan)</P>";
$a .= "<p>Sambungan lagi</p>";
$a .= "<div/>";

//Boolean (isinya true or false) // 1  / 0 
var_dump(1 == "1");
var_dump(1 === "1");


/** 
 * Operator logika 
 * && (and), 
 * // (or), 
 * ! (not), 
 * > (more than)
 * < (less than)
 * == (equal)
 * >= (more than or equal)
 * <= (less than or equal)
 * != (not equal)
 * */

$umur = 15;
var_dump($umur < 20 && $umur >= 16);

$umur = 17;
var_dump($umur < 20 && $umur >= 16);

$nama = "N.S";
var_dump($nama == "NS");

$nama = "Najwa Sintiya Ashila";
$umur = "21";
$birthday = "19-07-2003";
?>