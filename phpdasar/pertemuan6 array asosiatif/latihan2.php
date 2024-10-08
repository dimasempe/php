<?php
$mahasiswa = [
    ["Dimas Maulana Putra","50420379",
"Teknik Informatika","dimas.maulanaputra13@gmail.com"],
    ["Riski Rahmat Hia","5078008",
"Teknik Industri","riskirahmat13@gmail.com"]
];

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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Mahasiswa</title>
    <style>
        .clear{clear:both;}
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <!-- <ul>
        <li>Nama    : <?= $mahasiswa[0][0] ?></li>
        <li>NPM     : <?= $mahasiswa[0][1] ?></li>
        <li>Jurusan : <?= $mahasiswa[0][2] ?></li>
        <li>Email   : <?= $mahasiswa[0][3] ?></li>
    </ul> -->
    <!-- <ul>
    <?php foreach ($mahasiswa as $mahas) { ?>
        <?php foreach ($mahas as $mhs): ?>
            <li>Nama: <?= $mhs[0]?></li>
            <li>NPM: <?= $mhs[1]?></li>
            <li>Email: <?= $mhs[2]?></li>
            <li>Jurusan: <?= $mhs[3]?></li>
        <?php endforeach; ?>
        <br>
    <?php } ?>
    </ul> -->
    <!-- Array Numerik -->
    <ul>
    <?php foreach ($mahasiswa as $mahas) { ?>
            
            <li>Nama: <?= $mahas[0]?></li>
            <li>NPM: <?= $mahas[1]?></li>
            <li>Email: <?= $mahas[2]?></li>
            <li>Jurusan: <?= $mahas[3]?></li>
        <br>
    <?php } ?>
    </ul>
    <!-- Array Assosiatif -->
    <?php foreach ($mahasiswaAsosiatif as $mahas) { ?>
        <li>
                <img src="img/<?= $mahas['gambar'] ?>">
        </li>
        <li>Nama: <?= $mahas['nama']?></li>
        <li>NPM: <?= $mahas['npm']?></li>
        <li>Email: <?= $mahas['email']?></li>
        <li>Jurusan: <?= $mahas['jurusan']?></li>
    <br>
<?php } ?>
</ul>

</body>
</html>