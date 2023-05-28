<?php

require 'db_functions.php';

//GET id di URL

$id=$_GET["id"];

//query data bedasarkan id

$db_mahasiswaunsharing = query("SELECT * FROM db_mahasiswaunsharing WHERE id=$id")[0];


// mengecek apakah tombil submit udh diclick atau beelum
if(isset($_POST["submit"])){
    if(ubah($_POST) > 0){
        echo "<script>
        alert('Ubah Data Berhasil')
        </script>";
    } else{
        echo "<script>
        alert('Ubah Data Gagal')
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
    <title>Ubah Mahasiswa</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?=$db_mahasiswaunsharing["id"];?>">
        <table>
            <tr>
                <td>
                    <label for="yourName">Nama</label>
                    <input type="text" name="yourName" id="yourName" value="<?=$db_mahasiswaunsharing["nama"]?>">
                </td>
            <tr>
                <td>
                    <label for="yourProdi">Prodi</label>
                    <input type="text" name="yourProdi" id="yourProdi" value="<?=$db_mahasiswaunsharing["prodi"]?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="yourFakultas">Fakultas</label>
                    <input type="text" name="yourFakultas" id="yourFakultas" value="<?=$db_mahasiswaunsharing["fakultas"]?>">
                </td>
            </tr>
                <td>
                    <label for="yourEmail">Email</label>
                    <input type="text" name="yourEmail" id="yourEmail" value="<?=$db_mahasiswaunsharing["email"]?>">
                </td>
            <tr>
                <td>
                    <label for="yourPassword">Password</label>
                    <input type="text" name="yourPassword" id="yourPassword" value="<?=$db_mahasiswaunsharing["password"]?>">
                </td>
            </tr>
        </table>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>