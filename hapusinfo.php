<?php

require 'db_functions.php';

$id=$_GET["id"];

if(hapusInfo($id) > 0){
    echo "<script>
    alert('Hapus Informasi Berhasil');
    document.location.href='man_info.php';
    </script>";
}else{
    echo "<script>
    alert('Hapus Informasi Gagal')
    document.location.href='man_info.php';
    </script>";
    
}

?>