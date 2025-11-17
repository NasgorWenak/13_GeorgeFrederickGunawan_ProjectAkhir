<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])){

    $nama = $_POST['username'];
    $pass = $_POST['password'];

    $query = "SELECT * FROM akhir WHERE username='$nama'";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result);

    if($data && password_verify($pass, $data['password'])){
        $_SESSION['username'] = $data['username'];
        $_SESSION['nama'] = $data['nama'];
        header("Location: upload.php");
        exit;
    } else {
        echo "<script>
                alert('Username atau Password Salah!');
                window.location.href='login.php';
              </script>";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="header">
    <div class="logo">
        <a href="landing.php">
            <img src="logo.jpg" alt="logo">
        </a>
    </div>

    <div class="menu">
        <a href="landing.php">Layanan</a>
        <a>|</a>
        <a href="about.php">About Us</a>
    </div>

    <div class="login">
        <a href="login.php">Log In</a>
    </div>
</div>


    <div class="login2">
        <h1>LOGIN</h1>
        <div class="login3">
            <form method="post">
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" required></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" required></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <button type="submit" name="login" class="login3">Login</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <h3>Belum punya akun? <a href="register.php">Register</a></h3>
    </div>

    <div class="footer">
        <footer>© 2025 GoMobil — Solusi Penyewaan Mobil Terpercaya</footer>
    </div>
</body>
</html>