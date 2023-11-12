<!doctype html>
<html class="no-js" lang="zxx">
<?php
session_start();
if (!isset($_SESSION['status'])) {
    header("location:./login.php"); //Harus login dulu
}
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Profile</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon1.ico in the root directory -->
    <link href="myimg/Sumenep Experience-1 (2).png" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="assets/css/vendor/iconfont.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/plugins/plugins.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php include "header_web.php"; ?>
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section bg-image" data-bg="myimg/sumenep/Sumenep.jpg">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-banner text-left">
                        <h2 style="color: white; font-weight: bold;">Akun</h2>
                        <ul class="page-breadcrumb">
                            <li><a href="index.php" style="color: white; font-weight: bold;">Home</a></li>
                            <li style="color: white; font-weight: bold;">Profile</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->
    <div class="my-account-section section pt-5  pb-5">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="row">
                        <!-- My Account Tab Menu Start -->
                        <div class="col-lg-3 col-12">
                            <div class="myaccount-tab-menu nav" role="tablist">
                                <a href="#profile" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                    Profile</a>

                                <!-- <a href="#history" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> History</a> -->
                                <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-9 col-12">

                    <div class="tab-content" id="myaccountContent" role="tabpanel">
                        <div class="myaccount-content">
                            <h3>Dashboard</h3>

                            <div class="welcome mb-20">
                                <p>Halo, Selamat Datang! <strong><?php echo $_SESSION['username']; ?></strong> Anda telah
                                    login sebagai
                                    <b>User</b>.
                                </p>
                            </div>
                        </div>
                        <br>

                    </div>

                </div>
            </div>
        </div>
        <!--My Account section end-->

        <?php include "footer.php" ?>
        <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" 
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" 
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <script src="assets/js/plugins/plugins.js"></script>
        <script src="assets/js/main.js"></script>
</body>