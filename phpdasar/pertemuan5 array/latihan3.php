<?php
$mahasiswa = [
    ["Dimas Maulana Putra","50420379",
"Teknik Informatika","dimas.maulanaputra13@gmail.com"],
["Riski Rahmat Hia","5078008",
"Teknik Industri","riskirahmat13@gmail.com"]
];





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <!-- <ul>
        <li>Dimas Maulana Putra</li>
        <li>50420379</li>
        <li>Teknik Informatika</li>
        <li>dimas.maulanaputra13@gmail.com</li>
    </ul> -->
    
    <ul>
        <?php foreach($mahasiswa as $mhs) : ?>
            <li><?= $mhs; ?></li>
        <?php endforeach; ?>
    </ul>

    <?php foreach($mahasiswa as $mhs): ?>
    <ul>
        <li>Nama    : <?= $mhs[0]; ?></li>
        <li>NPM     : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email   : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>


</body>
</html>