<?php 
// Array
$nama = "Dimas M";

// Cara lama
$hari = array("Senin", "Selasa", "Rabu", "Kamis");

// Cara Baru
$bulan = ["Januari", "Februari", "Maret",];
$arr1 = [123,"Tulisan",false];

// Menampilkan Array ke layar
var_dump($hari);
echo "</br>";
print_r($bulan);

// Menampilkan 1 elemen dalam array
echo "</br>";
echo $arr1[0];
echo "</br>";
// Menambahkan elemen baru pada Array
var_dump($hari);
echo "</br>";
$hari[]="Jumat";
var_dump($hari);

?>