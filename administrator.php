<?php
require 'db_functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>admin-uns-sharing</title>

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/unsLogo.png" rel="icon">
    <link href="assets/img/unsLogo.png" rel="apple-touch-icon">

    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

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

    <!-- Template Main CSS File -->
    <link href="assets/css/style1.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <!-- Header -->
    <header class="header2">
        <nav class="nav">
            <div>
                <a href="administrator.php">
                    <img class="uns-sharing-logo" src="assets/img/uns-sharing.png" alt="">
                </a>

                <a href="administrator.php" class="nav_logo">UNS Sharing</a>
            </div>

            <ul class="nav_items">
                <li class="nav_item2">
                    <a href="administrator.php" class="nav_link">Beranda</a>
                    <a href="coba-unggah-informasi.php" class="nav_link">Upload Informasi</a>
                    <a href="coba-man-info.php" class="nav_link">Kelola Informasi</a>
                    <a href="coba-man-mah.php" class="nav_link">Kelola User</a>
                </li>
            </ul>

            <a href="logout.php"><button class="button">Keluar</button></a>

            
        </nav>
    </header>

    <!-- Home -->
    <section style="background-image: url(assets/img/bg-index-Copy.png);" class="home">
        <div>
            <div>
                <div class="uns-nih">
                    <h2 class="welcome-uns-sharing">Selamat Datang</br> di Sistem Berbagi Informasi</br> UNS Sharing</h2>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>