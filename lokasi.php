<?php
session_start();
require 'connect.php';
if ((isset($_GET['index'])) and (isset($_SESSION['lokasi']))) {
    array_splice($_SESSION['lokasi'], $_GET['index'], 0);
}
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sumenep Experience - Lokasi</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="myimg/Sumenep Experience-1 (2).png" type="img/x-icon" rel="shortcut icon">
    <link rel="stylesheet" href="assets/css/vendor/iconfont.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/plugins/pluginsfix.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<?php 


if(isset($_GET['kode_wisata']) && !isset($_POST['update']))  { 
    $idx = $_GET['kode_wisata'];
	$sql = "SELECT * FROM wisata WHERE kd_wisata='$idx'";
    $result = mysqli_query($con, $sql);
	$wisata = mysqli_fetch_object($result);
    $gmaps = $wisata->gmaps;
}
?>
    <div class="main-wrapper">
        <!--Header section start-->
        <?php include "header_web.php" ?>
        <!--Header section end-->
    <?php
        if(isset($_SESSION['status']) and isset($_SESSION['privilege']))
        {
                include('gmaps.php');
        }
        else
        {
            echo "<div style='text-align:center;padding-top:216px;'>Anda belum login, <a href='./login.php'>Klik Disini</a><div>";
        }
        ?>
    </div>
    <?php include "footer.php" ?>

    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" 
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" 
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="assets/js/plugins/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>