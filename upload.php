<?php
include 'koneksi.php';

if(isset($_POST['upload'])){
    $kendaraan = mysqli_real_escape_string($koneksi, $_POST['kendaraan']);
    $waktu = mysqli_real_escape_string($koneksi, $_POST['waktu']);
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
    $no_hp = mysqli_real_escape_string($koneksi, $_POST['no_hp']);

    $sql = "INSERT INTO upload (kendaraan, waktu, nama, alamat, no_hp)
            VALUES ('$kendaraan', '$waktu', '$nama', '$alamat', '$no_hp')";

    if(mysqli_query($koneksi, $sql)) {
        echo "<script>
                alert('Mobil Anda akan segera disiapkan. Terimakasih telah menggunakan dan mempercayai GoMobil!');
                window.location='display_upl.php';
              </script>";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>

    <div class="container1">
        <h2>Form Upload Penyewaan Mobil</h2>

        <form method="post">
            <table class="table">
                <tr>
                    <td>Kendaraan</td>
                    <td><input type="text" name="kendaraan" required></td>
                </tr>

                <tr>
                    <td>Waktu</td>
                    <td><input type="date" name="waktu" required></td>
                </tr>

                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" required></td>
                </tr>

                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" required></td>
                </tr>

                <tr>
                    <td>No Telepon</td>
                    <td><input type="text" name="no_hp" required></td>
                </tr>

                <tr>
                    <td colspan="3">
                        <button type="submit" name="upload" class="upload">Upload</button>
                    </td>
                </tr>
            </table>
            <a href="logout.php" class="kembali">Kembali ke halaman utama</a>
        </form>
    </div>
    <div class="footer">
        <footer>© 2025 GoMobil — Solusi Penyewaan Mobil Terpercaya</footer>
    </div>

</body>
</html>
