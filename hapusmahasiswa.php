<?php

require 'db_functions.php';

$id=$_GET["id"];

if(hapus($id) > 0){
    echo "<script>
    alert('Hapus Data Berhasil');
    document.location.href='man_mah.php';
    </script>";
}else{
    echo "<script>
    alert('Hapus Data Gagal')
    document.location.href='man_mah.php';
    </script>";
    
}

?>