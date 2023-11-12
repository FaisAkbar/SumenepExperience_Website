<?php
include 'connect.php';
$id = $_POST['kd_wisata'];
$gambar = $_POST['gambar'];
$gambar_L = $_POST['gambar_besar'];
$nama_wisata = $_POST['nama_wisata'];
$harga_tiket = $_POST['harga_tiket'];
$deskripsi_wisata = $_POST['deskripsi_wisata'];
$open_closes = $_POST['open_closes'];
$gmaps = $_POST['gmaps'];

mysqli_query($con, " INSERT INTO wisata values ('$id','$nama_wisata','$gambar','$gambar_L','$harga_tiket','$deskripsi_wisata','$open_closes','$gmaps')");
header("location:./index_admin.php?pesan==inputb");
?>