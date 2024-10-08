<?php 
// Koneksi ke database (nama host, username, password, nama database)
$conn = mysqli_connect('localhost','root','','phpdasar');

// ambil data dari tabel mahasiswa
$result = mysqli_query($conn,'SELECT * FROM mahasiswa');
// var_dump($result);
if(!$result){
    echo mysqli_error($conn);
}

// Ambil data (fetch) dari objek result
// mysqli_fetch_row(), mengembalikan array numerik
// mysqli_fetch_assoc(), mengembalikan array asosiatif 
// while($mhs=mysqli_fetch_assoc($result)){
//     var_dump($mhs["nama"]);
// }
// mysqli_fetch_array(), mengembalikan array asosiatif atau numerik (kekurangannnya data disajikan double)
// mysqli_fetch_object() mirip asosiatif pakai tanda panah ->



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NPM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1; ?>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?= $i;?></td>
            <td>
                <a href="">Ubah</a> |
                <a href="">Hapus</a>
            </td>
            <td>
                <img src="img/<?= $row["gambar"]; ?>" alt="" width="50">
            </td>
            <td><?= $row['npm'];?></td>
            <td><?= $row['nama'];?></td>
            <td><?= $row['email'];?></td>
            <td><?= $row['jurusan'];?></td>
        </tr>
        <?php $i++ ?>
        <?php endwhile; ?>
    </table>
</body>

</html>