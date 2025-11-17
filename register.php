<?php
include 'koneksi.php';

if (isset($_POST['register'])) {
    $username= mysqli_real_escape_string ($koneksi, $_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $nama= mysqli_real_escape_string($koneksi, $_POST['nama']);
    $usia= mysqli_real_escape_string($koneksi, $_POST['usia']);
    $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $no_hp = mysqli_real_escape_string ($koneksi, $_POST['no_hp']);

    if(!preg_match("/^[0-9]{10,13}$/", $no_hp)) {
        echo "<script>
            alert('Nomor telepon tidak valid! Harus 10-13 angka.');
            window.location.href='register.php';
          </script>";
    exit;
    }

    $query = "INSERT INTO akhir (username, password, nama,  usia, alamat, email, no_hp) 
              VALUES ('$username', '$password','$nama' , '$usia' , '$alamat', '$email', '$no_hp')";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>
                alert('Registrasi Berhasil! Silahkan Login');
                window.location='login.php';
              </script>";
    } else {
        echo "Gagal Registrasi";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

<div class="box">
    <h2>Register</h2>

    <form method="post">
        <table class="table">
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" placeholder="NasgorWenak123" required></td>
            </tr>

            <tr>
                <td>Password</td>
                <td><input type="password" name="password" required></td>
            </tr>

            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" placeholder="Nama Lengkap" required></td>
            </tr>

            <tr>
                <td>Usia</td>
                <td><input type="number" name="usia" required></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" placeholder="Jl. Wiyung No 67" required></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="text" name="email" placeholder="GoMobil@gmail.com" required></td>
            </tr>

            <tr>
                <td>No Telepon</td>
                <td><input type="text" name="no_hp" maxlength="13" placeholder="0812xxxxxxx" required></td>
            </tr>

            <tr>
                <td colspan="2" style="text-align:center">
                    <button type="submit" name="register" class="kembali">Register</button>
                </td>
            </tr>
        </table>
    </form>
</div>

</body>
</html>
