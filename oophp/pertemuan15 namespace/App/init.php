<?php

// // harus diurutin dulu dari interface ke parent ke child class lalu ke class yang berhubungan
// // cara pertama
// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/User.php';

// require_once 'Service/User.php';

// // cara kedua
// function autoload($class){

// }
// spl_autoload_register(autoload($class));

// cara ketiga (dengan closure (fungsi tanpa nama))
spl_autoload_register(function($class){
    // dipecah dulu namespacenya
    $class = explode('\\',$class);
    $class = end($class);
    require_once 'Produk/'.$class.'.php';
    // require_once 'Service/'.$class.'.php';
    // // bisa jg kyk gini
    // require_once __DIR__.'/Produk/'.$class.'.php';
});

spl_autoload_register(function($class){
    // dipecah dulu namespacenya
    $class = explode('\\',$class);
    $class = end($class);
    require_once 'Service/'.$class.'.php';
    // require_once 'Service/'.$class.'.php';
    // // bisa jg kyk gini
    // require_once __DIR__.'/Produk/'.$class.'.php';
});