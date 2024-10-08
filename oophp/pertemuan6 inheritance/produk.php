<?php

// jualan produk
class Produk{
    // menambahkan property dengan nilai default (kayak variabel cmn ada visibility)
    public $judul = 'judul', 
            $penulis = 'penulis',
            $penerbit = 'penerbit',
            $harga;


    // menambahkan method (kayak fungsi cmn ada visibilitynya)
    public function sayHello(){
        return 'Hello World!';
    }

    public function getLabel(){
        // tambahkan $this (konsepnya sama kayak variabel global)
        return "$this->penulis, $this->penerbit";
    }

    // membuat constructor method (bisa isi nilai default di parameter)
    public function __construct($judul,$penulis,$penerbit,$harga=0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        
    }

    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }


}

// membuat tipe data objek (sebenernya bisa jg dgn buat method di class Produk)
// class CetakInfoProduk{
//     // ketikkan Produk agar hanya object instance dari class Produk saja yang jadi parameter
//     public function cetak(Produk $produk){
//         $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) ";
//         return $str;
//     }
// }

// membuat child class dari class Produk yaitu komik
class Komik extends Produk{
    // tambahan property untuk inheritance
    public $jmlHalaman;

    // tambhan method untuk inherittance

public function __construct($judul,$penulis,$penerbit,$harga=0,$jmlHalaman){
    parent::__construct($judul,$penulis,$penerbit,$harga=0);
    $this->jmlHalaman = $jmlHalaman;
}
    public function getInfoProduk(){
        // tidak dapat memakai getInfoProduk() di parents (harus pakai oevrriding)
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

// membuat child class dari class Produk yaitu game
class Game extends Produk{
    // tambahan property untuk inheritance
    public $waktuMain;
    // tambahan  method untuk inheritance
    public function __construct($judul,$penulis,$penerbit,$harga=0,$waktuMain){
        // merujuk parameter yang ke parent
        parent::__construct($judul,$penulis,$penerbit,$harga=0);
        $this->waktuMain = $waktuMain;
    }
    public function getInfoProduk(){
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
        return $str;
    }
}



// satu instance namanya (kalau di child class ga ada constructor, 
// maka akan ke constructor parents)
$produk3 = new Komik('Naruto','Masashi Kishimoto', 'Shonrn Jump', 30000,100);
$produk4 = new Game('Uncharted','Neil Druckmann','Sony Computer', 250000,50);


// $infoproduk3 = new CetakInfoProduk();
// $infoproduk4 = new CetakInfoProduk();

// memanggil child class
echo $produk3->getInfoProduk();
echo '<br>';
echo $produk4->getInfoProduk();

