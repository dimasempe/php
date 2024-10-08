<?php
// membuat child class dari class Produk yaitu game
class Game extends Produk implements InfoProduk{
    // tambahan property untuk inheritance
    public $waktuMain;
    // tambahan  method untuk inheritance
    public function __construct($judul,$penulis,$penerbit,$harga=0,$waktuMain){
        // merujuk parameter yang ke parent
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->waktuMain = $waktuMain;
    }
    // membuat hasil dari method abstract
    public function getInfoProduk(){
        $str = "Game : ". $this->getInfo() . " - {$this->waktuMain} Jam.";
        return $str;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str; 
    }
}