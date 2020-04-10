<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id            = $_POST['id'];
$no_telp       = $_POST['no_telp'];
// query SQL untuk insert data
$query="INSERT INTO pelanggan SET id='$id',no_telp='$no_telp'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.html");
?>