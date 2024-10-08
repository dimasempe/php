<?php 
// cara pertama (menggunakan define tidak bisa disimpan di dalam kelas)
// membuat konstanta define('NAMA_KONSTANTA', 'nilai konstanta');
define('NAMA','Dimas Maulana Putra');

// memanggil nama
echo NAMA;

// cara kedua (bisa digunakan di dalam kelas)
const UMUR = 22;
echo '<br>';
echo UMUR;

class Coba{
    const NAMA = 'Dimas dalam kelas';
}
echo '<br>';
// Memanggil dari kelas
echo Coba::NAMA;

// ada juga yang namanya Magic Constant
echo '<br>';

echo __LINE__;
?>
