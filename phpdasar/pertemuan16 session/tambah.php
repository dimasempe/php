<?php 
session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
include 'functions.php';
// koneksi ke DBMS
// $conn = mysqli_connect('localhost','root','','phpdasar');

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
    // untuk cek array 
    // var_dump($_POST); 
    // var_dump($_FILES); die;
    // cek apakah data berhasil di ubah
    if(tambah($_POST)>0){
        echo "
        <script>
            alert('data berhasil ditambah!');
            document.location.href = 'index.php';
        </script>
        ";
    }else{
        echo "
        <script>
            alert('data gagal ditambah!');
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
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <!-- harus ada enctype untuk membedakan $_POST dan $_FILES -->
    <form action="" method='post' enctype='multipart/form-data'>
        <ul>
            <li>
                <label for="npm">NPM: </label>
                <input type="text" name='npm' id='npm' required >
            </li>
            <li>
                <label for="nama">Nama: </label>
                <input type="text" name='nama' id='nama' required>
            </li>
            <li>
                <label for="email">Email: </label>
                <input type="text" name='email' id='email' required>
            </li>
            <li>
                <label for="jurusan">Jurusan: </label>
                <input type="text" name='jurusan' id='jurusan' required>
            </li>
            <li>
                <label for="gambar">Gambar: </label>
                <input type="file" name='gambar' id='gambar' >
            </li>
            <button type="submit" name='submit'>Tambah Data</button>
        </ul>
    </form>
    <a href="index.php">Kembali ke index</a>
</body>
</html>