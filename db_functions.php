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

?>
