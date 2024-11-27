<!DOCTYPE html>
<html>
<head>
    <title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
    <br/>
    <a href="input.php">+ Tambah Data Baru</a>
    <br/><br/>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Alamat</th>
            <th>OPSI</th>
        </tr>
        <?php 
        include 'koneksi.php'; // Pastikan koneksi.php berfungsi dengan baik
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");

        // Periksa apakah query berhasil
        if (!$data) {
            die("Query gagal: " . mysqli_error($koneksi));
        }

        while ($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['nim']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php 
        }
        ?>
    </table>
</body>
</html>