<?php 
include 'functions.php';
// koneksi ke DBMS
// $conn = mysqli_connect('localhost','root','','phpdasar');

// ambil data dari URL
$id = $_GET['id'];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
// var_dump($mhs);

// cek apakah tombol submit sudah dijalankan atau belum

// if(isset($_POST['submit'])){
//     // ambil data dari tiap elemen dalam form
//     $npm = $_POST['npm'];
//     $nama = $_POST['nama'];
//     $email = $_POST['email'];
//     $jurusan = $_POST['jurusan'];
//     $gambar = $_POST['gambar'];

//     // query insert data
//     $query = "INSERT INTO mahasiswa
//     VALUES
//     ('','$nama','$npm','$email','$jurusan','$gambar')
//     ";
//     mysqli_query($conn,$query);
        
//     // cek apakah data berhasil ditambahkan atau tidak
//     // var_dump(mysqli_affected_rows($conn))
//     if(mysqli_affected_rows($conn)>0){
//         echo 'Berhasil';
//     }else{
//         echo 'Gagal';
//         echo '<br>';
//         echo mysqli_error($conn);
//     }
// }
if(isset($_POST['submit'])){
    if(ubah($_POST)>0){
        echo "
        <script>
            alert('data berhasil diubah!');
            document.location.href = 'index.php';
        </script>
        ";
    }else{
        echo "
        <script>
            alert('data gagal diubah!');
            document.location.href = 'index.php';
        </script>
        ";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>
    <form action="" method='post'>
        <ul>
            <input type="hidden" name="id" value="<?= $mhs['id'];?>">
            <li>
                <label for="npm">NPM: </label>
                <input type="text" name='npm' id='npm' required value='<?= $mhs['npm']?>'>
            </li>
            <li>
                <label for="nama">Nama: </label>
                <input type="text" name='nama' id='nama' required value="<?= $mhs['nama']?>">
            </li>
            <li>
                <label for="email">Email: </label>
                <input type="text" name='email' id='email' required value="<?= $mhs['email']?>">
            </li>
            <li>
                <label for="jurusan">Jurusan: </label>
                <input type="text" name='jurusan' id='jurusan' required value="<?= $mhs['jurusan']?>">
            </li>
            <li>
                <label for="gambar">Gambar: </label>
                <input type="text" name='gambar' id='gambar' required value="<?= $mhs['gambar']?>">
            </li>
            <button type="submit" name='submit'>Ubah Data</button>
        </ul>
    </form>
    <a href="index.php">Kembali ke index</a>
</body>
</html>