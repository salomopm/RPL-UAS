<?php 
 
include 'db_functions.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['nama']))  {
    header("Location: login.php");
}
 
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $fakultas = $_POST['fakultas'];
    $email = $_POST['email'];
    $password = ($_POST['password']);
    $cpassword = ($_POST['cpassword']);
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM db_mahasiswaunsharing WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO db_mahasiswaunsharing VALUES ('','$nama', '$prodi', '$fakultas', '$email', '$password','$roleAs')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $nama = "";
                $prodi = "";
                $fakultas = "";
                $email = "";
                $roleAs = "Mahasiswa";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        }else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>buat-akun-uns-sharing</title>

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/unsLogo.png" rel="icon">
    <link href="assets/img/unsLogo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
 
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
 
    <link href="assets/css/style2.css" rel="stylesheet" type="text/css">

    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <div>
        <main>

            <div class="uns-sharing">
                <a href="#">
                    <img class="uns-sharing-logo" src="assets/img/uns-sharing.png" alt="">
                </a>

                <a href="#" class="nav_logo">UNS Sharing</a>
            </div>

            <div class="container">
                <form action="" method="POST" class="login-email">
                    <p class="login-text" style="font-size: 2rem; font-weight: 800;">Buat Akun</p>

                    <label for="yourUsername" class="form-label">Nama</label>
                    <div class="input-group">
                        <input type="text" placeholder="Nama" name="nama" id="nama" value="<?php echo $nama; ?>" required>
                    </div>

                    <label for="yourUsername" class="form-label">Prodi</label>
                    <div class="input-group">
                        <input type="text" placeholder="Prodi" name="prodi" id="prodi" value="<?php echo $prodi; ?>" required>
                    </div>

                    <label for="yourUsername" class="form-label">Fakultas</label>
                    <div class="input-group">
                        <input type="text" placeholder="Fakultas" name="fakultas" id="prodi" value="<?php echo $fakultas; ?>" required>
                    </div>

                    <label for="yourUsername" class="form-label">Email</label>
                    <div class="input-group">
                        <input type="email" placeholder="Email" name="email" id="email" value="<?php echo $email; ?>" required>
                    </div>

                    <label for="yourUsername" class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" placeholder="Password" name="password" id="password" value="<?php echo $_POST['password']; ?>" required>
                    </div>

                    <label for="yourUsername" class="form-label">Konfirmasi Password</label>
                    <div class="input-group">
                        <input type="password" placeholder="Konfirmasi Password" name="cpassword" id="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
                    </div>
                    <div class="input-group">
                        <button name="submit" class="btn">Buat Akun</button>
                    </div>
                    <p class="login-register-text">Sudah punya akun? <a href="login.php">Masuk</a></p>
                </form>
            </div>
        </main>
    </div>
</body>
</html>