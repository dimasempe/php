<?php 
// ini autoloading
require_once 'App/init.php';

// satu instance namanya (kalau di child class ga ada constructor, 
// maka akan ke constructor parents)
$produk3 = new Komik('Naruto','Masashi Kishimoto', 'Shonrn Jump', 30000,100);
$produk4 = new Game('Uncharted','Neil Druckmann','Sony Computer', 250000,50);
$produk5 = new Komik('Nganu','Oji','Sanz',25000,150);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk3);
$cetakProduk->tambahProduk($produk4);
$cetakProduk->tambahProduk($produk5);

echo $cetakProduk->cetak();