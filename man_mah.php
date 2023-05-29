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
<body style="overflow-x: hidden;">
    <nav class="navbar navbar-expand-lg" id="navbar-unggah">
        <div class="container-fluid">
            <a class="navbar-brand" href="administrator.php">
            <img src="assets/img/logo_uns_biru.png" alt="Logo" width="300" height="100" class="d-inline-block align-text-top">
            </a>
        </div>
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <div class="nav-link-admin">
                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                        </svg>
                        <a class="nav-link active" aria-current="page" href="man_mah.php">Admin</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="dashboard-unggah">
        <div class="side-navbar">
            <nav class="navbar bg-body-tertiary">
                <div class="nav-link-sidebar1">
                    <div class="home-image">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                        </svg>
                    </div>
                    <a class="nav-link active" aria-current="page" href="administrator.php">Beranda</a>
                </div>
            </nav>
            <nav class="navbar bg-body-tertiary">
                <div class="nav-link-sidebar2">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                    <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                </svg>
                    <a class="nav-link active" aria-current="page" href="unggahinformasi.php">Mengunggah</a>
                </div>
            </nav>
            <nav class="navbar bg-body-tertiary">
                <div class="nav-link-sidebar3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                    </svg>
                    <a class="nav-link active" aria-current="page" href="man_info.php">Informasi</a>
                </div>
            </nav>
            <nav class="navbar bg-body-tertiary">
                <div class="nav-link-sidebar4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-x-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    <a class="nav-link active" aria-current="page" href="man_mah.php">Menghapus</a>
                </div>
            </nav>
            <nav class="navbar bg-body-tertiary">
                <div class="nav-link-sidebar5">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                    <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                </svg>
                    <a class="nav-link active" aria-current="page" href="man_mah.php">Log Out</a>
                </div>
            </nav>
        </div>
        <div class="isi-tengah-manmah">
            <div class="text-dashboard">
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
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>