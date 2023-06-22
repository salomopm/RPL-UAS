<?php

require 'db_functions.php';

// mengecek apakah tombil submit udh diclick atau beelum
if (isset($_POST["submit"])) {
    if (tambahInformasi($_POST) > 0) {
        echo "<script>
        alert('Unggah Informasi Berhasil')
        </script>";
    } else {
        echo "<script>
        alert('Unggah Informasi Gagal')
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>unggah-informasi-uns-sharing</title>

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/unsLogo.png" rel="icon">
    <link href="assets/img/unsLogo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">


    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a class="logo d-flex align-items-center">
                <img src="assets/img/uns-sharing.png" alt="">

                <span class="d-none d-lg-block">UNS Sharing</span>
            </a>

            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item dropdown">

                </li> <!-- End Notification Nav -->

                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="assets/img/profil-logo.png" alt="Profile" class="rounded-circle">

                        <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Admin</h6>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="logout.php">
                                <i class="bi bi-box-arrow-right"></i>

                                <span>Keluar</span>
                            </a>
                        </li>
                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->
            </ul>
        </nav><!-- End Icons Navigation -->
    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link collapsed" href="administrator.php">
                    <i class="fas fa-home">Beranda</i>
                </a>
            </li><!-- End Beranda Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="coba-unggah-informasi.php">
                    <i class="fas fa-home">Upload Informasi</i>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed " href="coba-man-info.php">
                    <i class="fas fa-home">Kelola Informasi</i>
                </a>
            </li><!-- End Fakultas Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed " href="coba-man-mah.php">
                    <i class="fas fa-home">Kelola User</i>
                </a>
            </li><!-- End Kelola User Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="logout.php">
                    <i class="fas fa-home">Keluar</i>
                </a>
            </li><!-- End Keluar Page Nav -->
        </ul>
    </aside><!-- End Sidebar-->

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Upload Informasi</h1>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h2 class="card-title" style="text-align: justify;">Upload Informasi</h2>

                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $db_informasi["id"]; ?>">
                            <div class="mb-3">
                                <label for="yourDeskripsi" class="form-label">Deskripsi</label>
                                <textarea rows="5" cols="60" name="yourDeskripsi" class="form-control" id="yourDeskripsi" placeholder="Enter text"></textarea>

                            </div>
                            <div class="mb-3">
                                <label for="yourGambar" class="form-label">Gambar</label>
                                <input type="file" name="yourGambar" class="form-control" id="yourProdi">
                            </div>
                            <div class="mb-3">
                                <label for="yourProdi" class="form-label">Prodi</label>
                                <!--<div class="datatable-container">
                                    <table class="table table-borderless datatable datatable-table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nama Fakultas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="accordion accordion-flush" id="accordionFlushExample1">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseA" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                    Fakultas Ekonomi dan Bisnis
                                                                </button>
                                                            </h2>

                                                            <div id="flush-collapseA" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample1">
                                                                <div class="list-group">
                                                                    <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                                                                    <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                                                                    <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="accordion accordion-flush" id="accordionFlushExample2">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseB" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                    Fakultas Hukum
                                                                </button>
                                                            </h2>

                                                            <div id="flush-collapseB" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
                                                                <div class="list-group">
                                                                    <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                                                                    <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                                                                    <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="accordion accordion-flush" id="accordionFlushExample3">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseC" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                    Fakultas Ilmu Budaya
                                                                </button>
                                                            </h2>

                                                            <div id="flush-collapseC" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample3">
                                                                <div class="list-group">
                                                                    <a href="#" class="list-group-item list-group-item-action">Prodi Bahasa Mandarin dan Kebudayaan Tiongkok</a>
                                                                    <a href="#" class="list-group-item list-group-item-action">Prodi Ilmu Sejarah</a>
                                                                    <a href="#" class="list-group-item list-group-item-action">Prodi Sastra Arab</a>
                                                                    <a href="#" class="list-group-item list-group-item-action">Prodi Sastra Daerah</a>
                                                                    <a href="#" class="list-group-item list-group-item-action">Prodi Sastra Indonesia</a>
                                                                    <a href="#" class="list-group-item list-group-item-action">Prodi Sastra Inggris</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="accordion accordion-flush" id="accordionFlushExample4">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseD" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                    Fakultas Ilmu Sosial dan Ilmu Politik
                                                                </button>
                                                            </h2>

                                                            <div id="flush-collapseD" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample4">
                                                                <div class="list-group">
                                                                    <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                                                                    <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                                                                    <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="accordion accordion-flush" id="accordionFlushExample5">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseE" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                    Fakultas Kedokteran
                                                                </button>
                                                            </h2>

                                                            <div id="flush-collapseE" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample5">
                                                                <div class="list-group">
                                                                    <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                                                                    <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                                                                    <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="accordion accordion-flush" id="accordionFlushExample6">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseF" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                    Fakultas Keguruan dan Ilmu Pendidikan
                                                                </button>
                                                            </h2>

                                                            <div id="flush-collapseF" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample6">
                                                                <div class="list-group">
                                                                    <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                                                                    <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                                                                    <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="accordion accordion-flush" id="accordionFlushExample7">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseG" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                    Fakultas Keolahragaan
                                                                </button>
                                                            </h2>

                                                            <div id="flush-collapseG" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample7">
                                                                <div class="list-group">
                                                                    <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                                                                    <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                                                                    <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="accordion accordion-flush" id="accordionFlushExample8">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseH" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                    Fakultas Matematika dan Ilmu Pengetahuan Alam
                                                                </button>
                                                            </h2>

                                                            <div id="flush-collapseH" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample8">
                                                                <div class="list-group">
                                                                    <a href="pages-biologi.php" class="list-group-item list-group-item-action">Prodi Biologi</a>
                                                                    <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                                                                    <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="accordion accordion-flush" id="accordionFlushExample9">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseI" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                    Fakultas Pertanian
                                                                </button>
                                                            </h2>

                                                            <div id="flush-collapseI" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample9">
                                                                <div class="list-group">
                                                                    <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                                                                    <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                                                                    <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="accordion accordion-flush" id="accordionFlushExample11">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseJ" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                    Fakultas Peternakan
                                                                </button>
                                                            </h2>

                                                            <div id="flush-collapseJ" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample11">
                                                                <div class="list-group">
                                                                    <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                                                                    <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                                                                    <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="accordion accordion-flush" id="accordionFlushExample12">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseK" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                    Fakultas Psikologi
                                                                </button>
                                                            </h2>

                                                            <div id="flush-collapseK" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample12">
                                                                <div class="list-group">
                                                                    <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                                                                    <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                                                                    <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="accordion accordion-flush" id="accordionFlushExample13">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseL" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                    Fakultas Seni Rupa dan Desain
                                                                </button>
                                                            </h2>

                                                            <div id="flush-collapseL" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample13">
                                                                <div class="list-group">
                                                                    <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                                                                    <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                                                                    <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="accordion accordion-flush" id="accordionFlushExample14">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseM" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                    Fakultas Teknik
                                                                </button>
                                                            </h2>

                                                            <div id="flush-collapseM" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample14">
                                                                <div class="list-group">
                                                                    <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                                                                    <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                                                                    <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="accordion accordion-flush" id="accordionFlushExample15">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseN" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                    Fakultas Teknologi Informasi dan Sains Data
                                                                </button>
                                                            </h2>

                                                            <div id="flush-collapseN" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample15">
                                                                <div class="list-group">
                                                                    <a href="pages-informatika.php" class="list-group-item list-group-item-action">Prodi Informatika</a>
                                                                    <a href="#" class="list-group-item list-group-item-action">Prodi Sains Data</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>-->
                                <select class="form-select" aria-label="Default select example" name="yourProdi" id="yourProdi">
                                    <option selected disabled>Fakultas Matematika dan Ilmu Pengetahuan Alam</option>
                                    <option value="Biologi">Biologi</option>
                                    <option value="Kimia">Kimia</option>
                                    <option value="Matematika">Matematika</option>
                                </select>

                                <select class="form-select" aria-label="Default select example" name="yourProdi" id="yourProdi">
                                    <option selected disabled>Fakultas Teknologi Informasi dan Sains Data</option>
                                    <option value="Informatika">Informatika</option>
                                    <option value="Sains Data">Sains Data</option>
                                </select>

                            </div>
                            <div class="mb-3 waktu-ubah">
                                <label for="yourWaktu" class="form-label">Waktu</label>
                                <input id="yourWaktu" class="form-control" type="datetime-local" name="yourWaktu" />
                            </div>

                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>


        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/chart.js/chart.umd.js"></script>
        <script src="assets/vendor/echarts/echarts.min.js"></script>
        <script src="assets/vendor/quill/quill.min.js"></script>
        <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
        <script src="assets/vendor/tinymce/tinymce.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

        <!--p-notif-mungkin-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="coba_tampil.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>