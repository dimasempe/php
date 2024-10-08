<?php 
// Koneksi ke database (nama host, username, password, nama database)
$conn = mysqli_connect('localhost','root','','phpdasar');

// ambil data dari tabel mahasiswa
$result = mysqli_query($conn,'SELECT * FROM mahasiswa');
// var_dump($result);
if(!$result){
    echo mysqli_error($conn);
}

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
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