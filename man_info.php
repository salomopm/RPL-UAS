<?php
require 'db_functions.php';
$db_informasi = query('SELECT * FROM db_informasi');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Mahasiswa</title>
</head>
<body>
    <h1>Data Informasi</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>No.</td>
            <td>Aksi</td>
            <td>Deskripsi</td>
            <td>Gambar</td>
        </tr>
        <tr>
            <?php $i = 1; ?>
            <?php foreach ($db_informasi as $row) : ?>
            <td><?=$i; ?></td>
            <td>
                <a href="ubahmahasiswa.php?id=<?=$row["id"];?>">Ubah</a>
                <a href="hapusmahasiswa.php?id=<?=$row["id"];?>" onclick="return confirm('Apakah data akan dihapus?');">Hapus</a>
            </td>
            <td><?= $row["deskripsi"]?></td>
            <td>
                <img src="image/<?= $row["gambar"]?>" alt="none" width="80px" height="60px">
                
            </td>
        </tr>
            <?php $i++;?>
            <?php endforeach;?>
    </table>
</body>
</html>