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
    <link rel="stylesheet" href="/assets/css/adminstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="administrator.php">UNS Administrator</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Admin Panel</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="administrator.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:3000/man_mah.php">Manajemen Akun User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="unggahinformasi.php">Unggah Informasi Prodi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="man_info.php">Informasi Prodi</a>
                </li>
                </ul>
            </div>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <h1>Data Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0" class="table table-striped">
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
                <a href="ubahmahasiswa.php?id=<?=$row["id"];?>">Ubah</a>
                <a href="hapusmahasiswa.php?id=<?=$row["id"];?>" onclick="return confirm('Apakah data akan dihapus?');">Hapus</a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>