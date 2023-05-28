<?php

require 'db_functions.php';

// mengecek apakah tombil submit udh diclick atau beelum
if(isset($_POST["submit"])){
    if(tambahInformasi($_POST) > 0){
        echo "<script>
        alert('Unggah Informasi Berhasil')
        </script>";
    } else{
        echo "<script>
        alert('Unggah Informasi Gagal')
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unggah Informasi</title>
</head>
<body>
    <h1>Unggah Informasi</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    <label for="yourDeskripsi">Deskripsi</label>
                    <input type="text" name="yourDeskripsi" id="yourDeskripsi">
                </td>
            <tr>
                <td>
                    <label for="yourGambar">Gambar</label>
                    <input type="file" name="yourGambar" id="yourGambar">
                </td>
            </tr>
        </table>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>