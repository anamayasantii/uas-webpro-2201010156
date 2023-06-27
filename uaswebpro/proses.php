<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_order");

$nomor = $_POST['nomor'];
$nama = $_POST['nama'];
$pesanan = $_POST['pesanan'];
$submit = $_POST['submit'];

$query = "INSERT INTO db_order VALUES ('$nomor', '$nama', '$pesanan', '$submit')";

mysqli_query($koneksi, $query);
header('Location: index.html');
?>