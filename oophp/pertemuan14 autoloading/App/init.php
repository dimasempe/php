<?php

// // harus diurutin dulu dari interface ke parent ke child class lalu ke class yang berhubungan
// // cara pertama
// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';

// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';

// // cara kedua
// function autoload($class){

// }
// spl_autoload_register(autoload($class));

// cara ketiga (dengan closure (fungsi tanpa nama))
spl_autoload_register(function($class){
    require_once 'Produk/'.$class.'.php';
    // // bisa jg kyk gini
    // require_once __DIR__.'/Produk/'.$class.'.php';
});