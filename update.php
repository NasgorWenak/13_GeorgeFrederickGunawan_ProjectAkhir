<?php
include 'koneksi.php';
$id = $_GET['id'];

$akhir = mysqli_query($koneksi, "SELECT * FROM upload WHERE id='$id'");
$d = mysqli_fetch_assoc($akhir);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    <div class="update-box">
        <h2>Update Data</h2>

        <a class="kembali" href="display_upl.php">KEMBALI</a>

        <form method="post" action="upd.php">
            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
            <table>
                <tr>
                    <td>Kendaraan</td>
                    <td><input type="text" name="kendaraan" value="<?php echo $d['kendaraan']; ?>"></td>
                </tr>
                <tr>
                    <td>Waktu</td>
                    <td><input type="date" name="waktu" value="<?php echo $d['waktu']; ?>"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
                </tr>
                <tr>
                    <td>No HP</td>
                    <td><input type="text" name="no_hp" value="<?php echo $d['no_hp']; ?>"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>