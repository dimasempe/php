<?php 

// membuat child class dari class Produk yaitu komik
class Komik extends Produk implements InfoProduk{
    // tambahan property untuk inheritance
    public $jmlHalaman;

    // tambhan method untuk inherittance

    public function __construct($judul,$penulis,$penerbit,$harga=0,$jmlHalaman){
    parent::__construct($judul,$penulis,$penerbit,$harga);
    $this->jmlHalaman = $jmlHalaman;
    }
    // membuat hasil dari method abstract
    public function getInfoProduk(){
        // dapat memakai getInfoProduk() di parents (harus pakai parent/overriding)
        $str = "Komik : ". $this->getInfo() ." - {$this->jmlHalaman} Halaman.";
        return $str;
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str; 
    }
    
}