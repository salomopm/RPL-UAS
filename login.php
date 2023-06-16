<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: berandaUser.php");
}
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = ($_POST['password']);
 
    $sql = "SELECT * FROM db_mahasiswaunsharing WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        if($row['nama'] == "admin"){
            $_SESSION['username'] = $row['nama'];
            header("Location: administrator.php");

        }else{
            $_SESSION['username'] = $row['nama'];
            header("Location: berandaUser.php");
        
        }
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>masuk-uns-sharing</title>

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
            <!--<div class="alert alert-warning" role="alert">
                <?php echo $_SESSION['error']?>
            </div>-->

            <div class="uns-sharing">
                <a href="#">
                    <img class="uns-sharing-logo" src="assets/img/uns-sharing.png" alt="">
                </a>

                <a href="#" class="nav_logo">UNS Sharing</a>
            </div>
        
            <div class="container">
                <form action="" method="POST" class="login-email">
                    <p class="login-text" style="font-size: 2rem; font-weight: 800;">Masuk</p>
                    <label for="yourUsername" class="form-label">Email</label>
                    <div class="input-group">
                        <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                    </div>

                    <label for="yourUsername" class="form-label">Password</label>

                    <div class="input-group">
                        <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
                    </div>
                    <div class="input-group">
                        <button name="submit" class="btn">Masuk</button>
                    </div>
                    <p class="login-register-text">Belum punya akun? 
                        <a class="register-link" href="register.php">Buat akun user</a>
                    </p>
                </form>
            </div>
        </main><!-- End #main -->

    </div>    
</body>
</html>