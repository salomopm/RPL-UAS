<?php
require 'db_functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <link rel="stylesheet" href="/assets/css/adminstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body style="background:url('assets/img/bg-admin.jpg') no-repeat; background-size: 2000px 1000px;overflow-x: hidden;" class="body-administrator">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="administrator.php">
                <img src="assets/img/logo_uns.png" alt="Logo" width="300" height="100" class="d-inline-block align-text-top">
                </a>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <div class="nav-link1">
                        <a class="nav-link active" aria-current="page" href="administrator.php">Beranda</a>
                    </div>
                    <div class="nav-link2">
                        <a class="nav-link active" aria-current="page" href="unggahinformasi.php">Unggah</a>
                    </div>
                    <div class="nav-link3">
                        <a class="nav-link active" aria-current="page" href="man_info.php">Informasi</a>
                    </div>
                    <div class="nav-link4">
                        <a class="nav-link active" aria-current="page" href="man_mah.php">Menghapus</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="main-panel">
        <div class="dashboard">
            <div class="dashboard-text">
                Selamat Datang di <br>
                Sistem Berbagi <br>
                Informasi UNS
            </div>
            <div class="dashboard-image">
                <img src="assets/img/dashboard.png" class="dashboard-img" alt="">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>