<?php
// membuat tipe data objek (sebenernya bisa jg dgn buat method di class Produk)
class CetakInfoProduk{
    // bisa juga buat array kyk = [];
    public $daftarProduk = array();

    public function tambahProduk(Produk $produk){
        $this->daftarProduk[]=$produk;
    }

    // ketikkan Produk agar hanya object instance dari class Produk saja yang jadi parameter
    public function cetak(){
        $str = "DAFTAR PRODUK : <br>";

        foreach ($this->daftarProduk as $p) {
            # code...
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}