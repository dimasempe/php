<?php
// Pertemuan 2 - PHP Dasar
// Sintax PHP

// Standart Output
// echo, print, print_r() --untuk array, var_dump() --untuk isi variable

// echo "Dimas Maulana Putra";
// print "Dimas MP";
// print_r("Diams");
// var_dump("Dimskuy");
// echo 1234;
// echo 'wanjay';


// Penulisan Sintax PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP
$nama  = "Dimas Maulana";

echo "Hai nama saya $nama <br/>";

// Operator 
// Aritmatika
$x = 10;
$y = 20;
echo $x*$y."<br/>";

// Penggabungan string/concatenation
$nama_depan = "Diora";
$nama_belakang = 'Putri';
echo $nama_depan." ".$nama_belakang."<br/>";

// Operator 
// Assignment
$x = 1;
$x += 5;
echo $x."<br/>";

$nama = "Shandika";
$nama .= " ";
$nama .= 'Galih';
echo $nama."<br/>";
// Operator
// Perbandingan

var_dump(1<5);
var_dump(5<1);
var_dump(1 == "1");
var_dump(1 === "1");

// Operator 
// Logika
$x = 10;
echo "<br/>";
var_dump($x <20 && $x %2 == 0);

?>

 
<!DOCTYPE html>
<html>
    <head>

        <title>Belajar PHP</title> 
    </head>
    <body>
        <h1>Halo, selamat datang <?php echo $nama;?> </h1>   
    </body>

</html>