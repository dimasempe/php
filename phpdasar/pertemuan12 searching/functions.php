<?php 
// Koneksi ke database (nama host, username, password, nama database)
$conn = mysqli_connect('localhost','root','','phpdasar');

// ambil data dari tabel mahasiswa
// $result = mysqli_query($conn,'SELECT * FROM mahasiswa');
// // var_dump($result);
// if(!$result){
//     echo mysqli_error($conn);
// }

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    // ambil data dari tiap elemen dalam form
    $npm = htmlspecialchars($data['npm']);
    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $gambar = htmlspecialchars($data['gambar']);

    // query insert data
    $query = "INSERT INTO mahasiswa
    VALUES
    ('','$nama','$npm','$email','$jurusan','$gambar')
    ";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM mahasiswa WHERE id=$id");
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    // ambil data dari tiap elemen dalam form
    $id = $data['id'];
    $npm = htmlspecialchars($data['npm']);
    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $gambar = htmlspecialchars($data['gambar']);

    // query insert data
    $query = "UPDATE mahasiswa
    SET
    npm = '$npm',
    nama = '$nama',
    email = '$email',
    jurusan = '$jurusan',
    gambar = '$gambar'
    WHERE id = $id
    ";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query = "SELECT * FROM mahasiswa 
    WHERE 
    nama LIKE '%$keyword%' OR 
    npm LIKE '%$keyword%' OR
    email LIKE '%$keyword%' OR
    jurusan LIKE '%$keyword%' 
    ";
    return query($query);
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