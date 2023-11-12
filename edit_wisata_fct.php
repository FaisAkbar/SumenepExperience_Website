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

mysqli_query(
  $con, " UPDATE wisata set gambar='$gambar', gambar_L='$gambar_L', 
  nama_wisata='$nama_wisata', harga_tiket='$harga_tiket', 
  deskripsi_wisata='$deskripsi_wisata', open_closes='$open_closes', gmaps='$gmaps' where kd_wisata='$id'"
  );

header("location:./index_admin.php?pesan=updateb");
?>