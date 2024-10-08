<?php

// jualan produk
abstract class Produk{
    // menambahkan property dengan nilai default (kayak variabel cmn ada visibility)
    // protected bisa buat class nya sendiri dan turunannya
    protected $judul = 'judul', 
            $penulis = 'penulis',
            $penerbit = 'penerbit';
    // protected karena akan digunakan di child class
    protected $diskon = 0;
    protected $harga;


    // menambahkan method (kayak fungsi cmn ada visibilitynya)
    public function sayHello(){
        return 'Hello World!';
    }

    public function getLabel(){
        // tambahkan $this (konsepnya sama kayak variabel global)
        return "$this->penulis, $this->penerbit";
    }

    // membuat constructor method (bisa isi nilai default di parameter)
    // magic method __constructor
    public function __construct($judul,$penulis,$penerbit,$harga=0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        
    }
    // protected bisa diakses di parent dan child
    // membuat method abstract untuk class turunannya
    abstract protected function getInfo();
    
    // method setter
    public function setJudul($judul){
        // menggunakan method setter berguna juga untuk validasi
        if(!is_string($judul)){
            throw new Exception("Judul harus String!");
        }
        $this->judul = $judul;
    }

    // method getter
    public function getJudul(){
        return $this->judul;
    }

    public function setPenulis($penulis){
        // menggunakan method setter berguna juga untuk validasi
        if(!is_string($penulis)){
            throw new Exception("Penulis harus String!");
        }
        $this->penulis = $penulis;
    }

    public function getPenulis(){
        return $this->penulis;
    }

    public function setPenerbit($penerbit){
        // menggunakan method setter berguna juga untuk validasi
        if(!is_string($penerbit)){
            throw new Exception("Penerbit harus String!");
        }
        $this->penerbit = $penerbit;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function setHarga($harga){
        $this->harga = $harga;
    }

    public function getHarga(){
        // ngambil property yang private (hanya bisa di class itu sendiri) dari class parent
        return $this->harga - ($this->harga * $this->diskon/100);
    }
}