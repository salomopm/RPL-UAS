<?php
require 'db_functions.php';
$db_mahasiswaunsharing = query('SELECT * FROM db_mahasiswaunsharing');

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
    <h1>Data Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>No.</td>
            <td>Aksi</td>
            <td>Nama</td>
            <td>Prodi</td>
            <td>Fakultas</td>
            <td>Email</td>
            <td>Kata Sandi</td>
        </tr>
        <tr>
            <?php $i = 1; ?>
            <?php foreach ($db_mahasiswaunsharing as $row) : ?>
            <td><?=$i; ?></td>
            <td>
                <a href="">Ubah</a>
                <a href="">Hapus</a>
            </td>
            <td><?= $row["nama"]?></td>
            <td><?= $row["prodi"]?></td>
            <td><?= $row["fakultas"]?></td>
            <td><?= $row["email"]?></td>
            <td><?= $row["password"]?></td>
        </tr>
            <?php $i++;?>
            <?php endforeach;?>
    </table>
</body>
</html>