<?php
include 'connect.php';
$id = $_GET['kd_wisata'];
$sql = "DELETE FROM wisata where kd_wisata='$id'";
$delete = mysqli_query($con,$sql );

header("location:./index_admin.php?pesan=hapusb");
?>