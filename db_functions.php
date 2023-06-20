<?php
//koneksi ke database

$conn=mysqli_connect("localhost","root","","db_mahasiswa","3306");


function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data){
    global $conn;


    $yourName = htmlspecialchars($data["yourName"]);
    $yourProdi = htmlspecialchars($data["yourProdi"]);
    $yourFakultas = htmlspecialchars($data["yourFakultas"]);
    $yourEmail = htmlspecialchars($data["yourEmail"]);
    $yourPassword  = htmlspecialchars($data["yourPassword"]);

    $query = "INSERT INTO db_mahasiswaunsharing VALUES ('','$yourName','$yourProdi','$yourFakultas','$yourEmail','$yourPassword')";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

function tambahInformasi($data){
    global $conn;

    $yourDeskripsi = htmlspecialchars($data["yourDeskripsi"]);
    $yourProdi = htmlspecialchars($data["yourProdi"]);
    $yourWaktu = htmlspecialchars($data["yourWaktu"]);
    //upload gambar
    $yourGambar = upload();
    if(!$yourGambar){
        return false;
    }
    
    $query = "INSERT INTO db_informasi VALUES ('','$yourDeskripsi','$yourGambar','$yourProdi','$yourWaktu')";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

function ubahInfo($data){
    global $conn;

    $id=$data["id"];
    $yourDeskripsi = htmlspecialchars($data["yourDeskripsi"]);
    $yourProdi = htmlspecialchars($data["yourProdi"]);
    $yourWaktu = htmlspecialchars($data["yourWaktu"]);
    $yourGambar = upload();
    if(!$yourGambar){
        return false;
    }

    $query = "UPDATE db_informasi SET 
    deskripsi='$yourDeskripsi',
    gambar='$yourGambar',
    prodi='$yourProdi',
    waktu='$yourWaktu'
    WHERE id=$id
    ";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

function upload(){
    $namaFile = $_FILES['yourGambar']['name'];
    $ukuranFile = $_FILES['yourGambar']['size'];
    $error = $_FILES['yourGambar']['error'];
    $tmpName = $_FILES['yourGambar']['tmp_name'];

    // upload gambar/tidak

    if($error == 4){
        echo "<script>alert('PILIH GAMBAR!');</script>";
        return false;
    }

    //gambar upload valid/tidak
    $ekstensiGambarValid = ['jpg','jpeg','png'];
    $ekstensiGambar = explode('.',$namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "<script>alert('file gambar tidak sesuai!');</script>";
        return false;
    }

    // cek ukuran file
    if($ukuranFile > 1000000){
        echo "<script>alert('ukuran gambar terlalu besar');</script>";
        return false;
    }

    //gambar siap upload
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName,'image/'. $namaFileBaru);

    return $namaFileBaru;
}

function ubah($data){
    global $conn;

    $id=$data["id"];
    $yourName = htmlspecialchars($data["yourName"]);
    $yourProdi = htmlspecialchars($data["yourProdi"]);
    $yourFakultas = htmlspecialchars($data["yourFakultas"]);
    $yourEmail = htmlspecialchars($data["yourEmail"]);
    $yourPassword  = htmlspecialchars($data["yourPassword"]);

    $query = "UPDATE db_mahasiswaunsharing SET 
    nama='$yourName',
    prodi='$yourProdi',
    fakultas='$yourFakultas',
    email='$yourEmail',
    password='$yourPassword'
    WHERE id=$id
    ";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM db_mahasiswaunsharing WHERE id=$id");
    return mysqli_affected_rows($conn);
}

function hapusInfo($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM db_informasi WHERE id=$id");
    return mysqli_affected_rows($conn);
}

?>
