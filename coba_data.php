<?php

    // melakukan koneksi 
    $connect = mysqli_connect('localhost', 'root', '', 'db_mahasiswa');
    
    //menghitung jumlah pesan dari tabel pesan
    $query= mysqli_query($connect, "Select Count(id) as jumlah From db_informasi");
    
    //menampilkan data
    $hasil = mysqli_fetch_array($query);
    
    //membuat data json
    echo json_encode(array('jumlah' => $hasil['jumlah']));
    
    ?>