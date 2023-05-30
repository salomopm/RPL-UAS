<?php 
 
include 'db_functions.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['nama'])) {
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
            $sql = "INSERT INTO db_mahasiswaunsharing VALUES ('','$nama', '$prodi', '$fakultas', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $nama = "";
                $prodi = "";
                $fakultas = "";
                $email = "";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
 
    <title>Niagahoster Register</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
                <input type="text" placeholder="Nama" name="nama" id="nama" value="<?php echo $nama; ?>" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Prodi" name="prodi" id="prodi" value="<?php echo $prodi; ?>" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Fakultas" name="fakultas" id="prodi" value="<?php echo $fakultas; ?>" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" id="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" id="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" id="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Anda sudah punya akun? <a href="login.php">Login </a></p>
        </form>
    </div>
</body>
</html>