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
    <link rel="stylesheet" href="/assets/css/adminstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">UNS Administrator</a>
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
    <div class="dashboard-ubah-mahasiswa">
        <h1 class="ubah-data-mahasiswa">Ubah Data Mahasiswa</h1>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?=$db_mahasiswaunsharing["id"];?>">

            <div class="mb-3">
                <label for="yourName" class="form-label">Nama</label>
                <input type="text" name="yourName" class="form-control" id="yourName" value="<?=$db_mahasiswaunsharing["nama"]?>">
            </div>
            <div class="mb-3">
                <label for="yourProdi" class="form-label">Prodi</label>
                <input type="text" name="yourProdi" class="form-control" id="yourProdi" value="<?=$db_mahasiswaunsharing["prodi"]?>">
            </div>
            <div class="mb-3">
                <label for="yourFakultas" class="form-label">Fakultas</label>
                <input type="text" name="yourFakultas" class="form-control" id="yourFakultas" value="<?=$db_mahasiswaunsharing["fakultas"]?>">
            </div>
            <div class="mb-3">
                <label for="yourEmail" class="form-label">Email</label>
                <input type="text" name="yourEmail" class="form-control" id="yourEmail" value="<?=$db_mahasiswaunsharing["email"]?>">
            </div>
            <div class="mb-3">
                <label for="yourPassword" class="form-label">Password</label>
                <input type="text" name="yourPassword" class="form-control" id="yourPassword"value="<?=$db_mahasiswaunsharing["password"]?>">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>