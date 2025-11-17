<?php
include 'koneksi.php';

$id = $_POST['id'];
$kendaraan = mysqli_real_escape_string($koneksi, $_POST['kendaraan']);
$waktu = mysqli_real_escape_string($koneksi, $_POST['waktu']);
$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
$no_hp = mysqli_real_escape_string($koneksi, $_POST['no_hp']);

$sql = "UPDATE upload SET
        kendaraan='$kendaraan',
        waktu='$waktu',
        nama='$nama',
        alamat='$alamat',
        no_hp='$no_hp'
        WHERE id='$id'";

mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

header("location:display_upl.php");
?>
