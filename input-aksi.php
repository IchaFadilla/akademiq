<<?php 
include 'koneksi.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

 
// mysql_query("INSERT INTO mahasiswa VALUES('','$nama','$nim','$alamat')");
$sql = "INSERT INTO mahasiswa (nama, nim, alamat) VALUES ('$nama','$nim','$alamat')";
if (mysqli_query($koneksi, $sql)) {
    header("location:index.php?pesan=input");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}
 
?>