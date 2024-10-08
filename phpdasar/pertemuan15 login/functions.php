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

    // upload gambar dulu
    $gambar = upload();
    if(!$gambar){
        return false;
    }

    // query insert data
    $query = "INSERT INTO mahasiswa
    VALUES
    ('','$nama','$npm','$email','$jurusan','$gambar')
    ";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if($error === 4){
        echo "<script>
        alert('pilih gambar terlebih dahulu!')
        </script>";
        return false;
    }

    $ekstensiGambarValid = ['jpg','jpeg','png'];
    // memasukkan ke dalam array dengan dipisah melalui titik
    $ekstensiGambar = explode('.',$namaFile);
    // mengambil array terakhir yg berisi ekstensi
    $ekstensiGambar = strtoLower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar,$ekstensiGambarValid)){
        echo "<script>
        alert('yang Anda upload bukan gambar!')
        </script>";
        return false;
    }

    if($ukuranFile > 5000000){
        echo "<script>
        alert('ukuran gambar terlalu besar!')
        </script>";
        return false;
    }
    // Generate nama gambar baru

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    // Gambar siap di upload
    move_uploaded_file($tmpName,'img/'.$namaFileBaru);
    return $namaFileBaru;
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
    $gambarLama = htmlspecialchars($data['gambarLama']);
    $gambar = htmlspecialchars($data['gambar']);

    // cek apakah user pilih gambar baru atau tidak
    if($_FILES['gambar']['error'] === 4){
        $gambar = $gambarLama;
    }else{
        $gambar = upload();
    }

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

function registrasi($data){
    global $conn;
    $username = strtolower(stripslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username suadh ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)){
        echo "
        <script>
            alert('username sudah terdaftar!')
        </script>
        ";
        return false;
    }
    // cek konfirmasi password
    if($password !== $password2){
        echo "
        <script>
            alert('Konfirmasi password tidak sesuai!');
        </script>
        ";
        return false;
    }
    // return 1;
    // enkripsi password
    $password = password_hash($password,PASSWORD_DEFAULT);

    // tambahkan ke database
    mysqli_query($conn,"INSERT INTO user VALUES('','$username','$password')");
    return mysqli_affected_rows($conn);
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