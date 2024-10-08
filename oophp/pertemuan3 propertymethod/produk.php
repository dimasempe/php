<?php

// jualan produk
class Produk{
    // menambahkan property dengan nilai default (kayak variabel cmn ada visibility)
    public $judul = 'judul', 
            $penulis = 'penulis',
            $penerbit = 'penulis',
            $harga = 0;

    // menambahkan method (kayak fungsi cmn ada visibilitynya)
    public function sayHello(){
        return 'Hello World!';
    }

    public function getLabel(){
        // tambahkan $this (konsepnya sama kayak variabel global)
        return "$this->penulis,$this->penerbit";
    }


}
// // 1. jualan komik
// $produk1 = new Produk();

// // bisa ditimpa asal objek sudah dipanggil
// $produk1 -> judul = 'naruto';
// var_dump($produk1);
// // 2. jualan game
// $produk2 = new Produk();
// $produk2 -> judul = 'Uncharted';

// // vardupm hanya judul
// var_dump($produk2->judul);

// // menambahkan property baru
// $produk2->tambahProperty = 'hahahah';
// var_dump($produk2);

// satu instance namanya
$produk3 = new Produk();
// mengisi property dengan object instance
$produk3->judul = 'Naruto';
$produk3->penulis = 'Masashi Kishimoto';
$produk3->penerbit = 'Shonen Jump';
$produk3->harga = 30000;
var_dump($produk3);

echo '<br>';
// memanggil property
echo "Komik : $produk3->penulis, $produk3->penerbit";
echo '<br>';

// memanggil method
echo $produk3->sayHello();

echo '<br>';
echo 'Komik :'.$produk3->getLabel();

// instance dari class produk lagi
$produk4 = new Produk();
$produk4->judul = 'Uncharted';
$produk4->penulis = 'Neil Druckmann';
$produk4->penerbit = 'Sony Computer';
$produk4->harga = 250000;

echo '<br>';
echo 'Game :'. $produk4->getLabel();