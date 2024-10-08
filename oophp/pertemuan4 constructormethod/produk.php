<?php

// jualan produk
class Produk{
    // menambahkan property dengan nilai default (kayak variabel cmn ada visibility)
    public $judul = 'judul', 
            $penulis = 'penulis',
            $penerbit = 'penulis',
            $harga;


    // menambahkan method (kayak fungsi cmn ada visibilitynya)
    public function sayHello(){
        return 'Hello World!';
    }

    public function getLabel(){
        // tambahkan $this (konsepnya sama kayak variabel global)
        return "$this->penulis,$this->penerbit";
    }

    // membuat constructor method (bisa isi nilai default di parameter)
    public function __construct($judul,$penulis,$penerbit,$harga=0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }


}





// satu instance namanya
$produk3 = new Produk('Naruto','Masashi Kishimoto', 'Shonrn Jump', 30000);
$produk4 = new Produk('Uncharted','Neil Druckmann','Sony Computer', 250000);

echo '<br>';
// memanggil property
echo "Komik : $produk3->penulis, $produk3->penerbit";
echo '<br>';
echo '<br>';
// memanggil method
echo "Komik : ".$produk3->getLabel().' yoi';
echo '<br>';
echo "Game : ". $produk4->getLabel();
// var_dump($produk4);
// memanggil method
