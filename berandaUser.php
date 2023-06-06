<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Beranda-UNS-Sharing</title>

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

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="d-flex align-items-center justify-content-between">
        <a class="logo d-flex align-items-center">
          <img src="assets/img/unsLogo0.png" alt="">

          <span class="d-none d-lg-block">UNS Sharing</span>
        </a>

        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div><!-- End Logo -->

      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
          <?php foreach($db_informasi as $row) :?>
          <?php if($row["nama"]==$_SESSION["username"]) {?>
          <li class="nav-item dropdown">
            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-bell"></i>
              <?php } ?>
              <?php endforeach;?>
              <span class="badge bg-primary badge-number">1</span>
            </a><!-- End Notification Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
              <li class="dropdown-header">
                You have 1 new notifications

                <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
              </li>

              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="notification-item">
                <i class="bi bi-exclamation-circle text-warning"></i>

                <div>
                  <h4>Lorem Ipsum</h4>

                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>30 min. ago</p>
                </div>
              </li>

              <li>
                <hr class="dropdown-divider">
              </li>

              

              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="dropdown-footer">
                <a href="#">Show all notifications</a>
              </li>
            </ul><!-- End Notification Dropdown Items -->
          </li><!-- End Notification Nav -->

          <li class="nav-item dropdown pe-3">
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
              <img src="assets/img/profil-logo.png" alt="Profile" class="rounded-circle">

              <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['username'] ?></span>
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li class="dropdown-header">
                <h6><?php echo $_SESSION['username'] ?></h6>
              </li>

              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="profileUser.php">
                  <i class="bi bi-person"></i>

                  <span>Akun saya</span>
                </a>
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
          <a class="nav-link collapsed" href="berandaUser.php">
            <img src="assets/img/berandaLogo.png" alt="" height="20" width="20">

            <span>Beranda</span>
          </a>
        </li><!-- End Beranda Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="profileUser.php">
            <img src="assets/img/profil-logo.png" alt="" height="20" width="20">

            <span>Profile</span>
          </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed " href="fakultas.php">
            <img src="assets/img/listImg.png" alt="" height="20" width="20">

            <span>Fakultas</span>
          </a>
        </li><!-- End Fakultas Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="logout.php">
            <img src="assets/img/keluarImg.png" alt="" height="20" width="20">

            <span>Keluar</span>
          </a>
        </li><!-- End Keluar Page Nav -->
      </ul>
    </aside><!-- End Sidebar-->

    <main id="main" class="main">
      <div class="pagetitle">
        <h1>Beranda</h1>

        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="berandaUser.html">Home</a></li>
            <li class="breadcrumb-item active">Beranda</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

      <section class="section dashboard">
        <div class="col-12">
          <div class="card recent-sales overflow-auto">
            <div class="card-body">
              <h2 class="card-title" style="text-align: justify;">Selamat datang di UNS Sharing</h2>

              <p style="text-align: justify;">
                Web aplikasi UNS SHARING ini dirancang untuk memfasilitasi segala pihak yang terlibat, yaitu  mahasiswa dan admin prodi, di mana mahasiswa sebagai pengguna dapat mengakses informasi yang diunggah oleh admin prodi. Dengan fitur notifikasi yang ada, dapat mengingatkan serta memudahkan pengguna sebagai mahasiswa memperoleh informasi yang aktual terkait prodinya.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main><!-- End #main -->

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
  </body>
</html>