<?php
$mahasiswaAsosiatif = [["nama" => "Dimas Maulana Putra",
"npm" => "50420379",
"email"   => "dimas.maulanaputra13@gamil.com",
"jurusan" => "Informatika",
"tugas"   => [90,100,95],
"gambar"   => "soekarno.png"],

["nama" => "Cacah",
"npm" => "1232433",
"email"   => "cacamarica@gamil.com",
"jurusan" => "Manajemen",
"tugas"   => [80,90,100],
"gambar"   => "dino.png"]
];
// Variabel Scope jika variabel di dalam function
// $x = 11;
// echo $x;
// // Variabel Global
// function tampilX(){
//     global $x;
//     echo $x;
// }
// echo "<br>";
// tampilX();

// Variabel Superglobals 
// $_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_SERVER, $_ENV (Merupakan Array Asosiatif)
// var_dump($_GET);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswaAsosiatif as $mhs) { ?>
        <li>
            <!-- Mengirim data melalui array asosiatif ke biodata.php -->
            <!-- GET adalah data dikirim melalui URL -->
            <a href="biodata.php?nama=<?=$mhs['nama'];?>&npm=<?=$mhs['npm']?>&jurusan=<?=$mhs['jurusan']?>&email=<?=$mhs['email']?>"><?= $mhs['nama']?></a>
        </li>
        <?php } ?>
    </ul>
    
</body>
</html>