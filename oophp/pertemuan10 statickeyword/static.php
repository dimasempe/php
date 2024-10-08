<?php 

class ContohStatic{
    // properti static
    public static $angka = 1;

    // method static
    public static function halo(){
        // kalau di properti static pakainya self:: bukan $this-> 
        return 'Halo ' . self::$angka++ . ' Kali';
    }
}

// kalau static gak perlu instansiasi untuk mengaksesnya
echo ContohStatic::$angka;
echo '<br>';
echo ContohStatic::halo();
echo '<br>';
echo ContohStatic::halo();
echo '<hr>';


?>