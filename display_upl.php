<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style3.css">
</head>

<body>
    <br>
    <h2>DATA PENYEWAAN</h2>
    <div class="kembali">
        <a href="logout.php">KEMBALI</a>
    </div>
    <br/><br/>

    <table border="1" class="edit">
        <tr>
            <th>Kendaraan</th>
            <th>Waktu</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Opsi</th>
        </tr>

        <?php
        include 'koneksi.php';
        $akhir = mysqli_query($koneksi, "select * from upload");
        while($d = mysqli_fetch_array($akhir)){
        ?>
            <tr>
                <td><?= $d['kendaraan']; ?></td>
                <td><?= $d['waktu']; ?></td>
                <td><?= $d['nama']; ?></td>
                <td><?= $d['alamat']; ?></td>
                <td><?= $d['no_hp']; ?></td>
                <td>
                    <a href="update.php?id=<?= $d['id']; ?>">EDIT</a>
                    <a> | </a>
                    <a href="delete.php?id=<?= $d['id']; ?>">HAPUS</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>
