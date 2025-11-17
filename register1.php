<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel=stylesheet href="style.css">
</head>
<body>
    <br>
    <h2>DATA USER</h2>
    <br/>
    <br/>
    <fieldset>
    <table border="1" >
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Usia</th>
            <th>alamat</th>
            <th>Email</th>
            <th>No HP</th>
            <th>Opsi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from akhir");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $d['username']; ?></td>
                <td><?php echo $d['password']; ?></td>
                <td><?php echo $d['usia']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['email']; ?></td>
                <td><?php echo $d['no_hp']; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $d['username']; ?>">EDIT</a>
                    <a href="delete.php?id=<?php echo $d['username']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php 
        }
        ?>
    </fieldset>
    </table>
</body>

</html>