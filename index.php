<!doctype html>
<html class="no-js" lang="zxx">
<?php
session_start();
if (isset($_SESSION['status']) and isset($_SESSION['privilege'])) {
    if ($_SESSION['privilege'] == "admin") {
        header("location:./index_admin.php");
    } //Gak boleh akses main index di mode admin
}
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sumenep Experience - Landing Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="myimg/Sumenep Experience-1 (2).png" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/vendor/iconfont.min.css">
    <link rel="stylesheet" href="assets/css/plugins/pluginsfix.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .btn {
  background-color: #020202;
  font-family: "Montserrat", sans-serif;
  color: #ffffff;
  font-size: 15px;
  line-height: 1.2;
  font-weight: 500;
  padding: 12px 24px;
  text-transform: uppercase;
  border-radius: 0px;
  position: relative;
  border-radius: 50px;
  -webkit-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.btn:focus {
  -webkit-box-shadow: none;
          box-shadow: none;
  outline: none;
}

.btn:hover {
  background-color: #151515;
  color: #ffffff;
}

@media only screen and (max-width: 767px) {
  .btn {
    font-size: 14px;
    line-height: 23px;
    height: 45px;
    padding: 10px 25px;
  }
  .btn:hover::before {
    left: 6px;
    top: 6px;
  }
  .btn:hover::after {
    left: -6px;
    top: -6px;
  }
}
    </style>
</head>

<body>
    <?php

    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
        }
    }
    require 'connect.php';

    $sql = "SELECT * FROM wisata ORDER BY rand() LIMIT 4";
    $result = mysqli_query($con, $sql);
    ?>
    <div id="main-wrapper">

        <?php include "header_web.php" ?>


        <!--slider section start-->
        <div class="hero-section section position-relative">
            <div class="hero-slider section">

                <!--Hero Item start-->
                <div class="hero-item  bg-image" data-bg="./myimg/sumenep/MasjidJamislide1.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">

                                <!--Hero Content start-->
                                <div class="hero-content-2 center">

                                    <h2>Sumenep Experience<br>Memberikan Pengalaman Yang Terbaik</h2>
                                    <a href="explore.php" class="btn" style="color: white;">Check Sekarang</a>

                                </div>
                                <!--Hero Content end-->

                            </div>
                        </div>
                    </div>
                </div>
                <!--Hero Item end-->

                <!--Hero Item start-->
                <div class="hero-item bg-image" data-bg="./myimg/sumenep/MasjidJamislide2.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">

                                <!--Hero Content start-->
                                <div class="hero-content-2 center">

                                    <h2>Sumenep Experience<br>Memberikan Pengalaman Yang Terbaik</h2>
                                    <a href="explore.php" class="btn">Check Sekarang</a>

                                </div>
                                <!--Hero Content end-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--Hero Item end-->

            </div>
        </div>
        <!--slider section end-->




        <!--Product section start-->
        <div class="product-section section pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title text-center mb-5">
                            <h2>Mungkin Kamu Tertarik</h2>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade active show">
                        <div class="row">
                            <?php while ($wisata = mysqli_fetch_object($result)) { ?>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!--  Single Grid product Start -->
                                    <div class="single-grid-product mb-4">
                                        <div class="product-image">
                                            <a href="detail.php?kode_wisata=<?php echo $wisata->kd_wisata; ?>">
                                                <img src="./myimg/sumenep/<?php echo $wisata->gambar; ?>" class="img-fluid" alt="" style="height:200px;">
                                            </a>
                                            <div class="product-action">
                                                <ul>
                                                    <li> <a href="lokasi.php?kode_wisata=<?php echo $wisata->kd_wisata?> &action=add"><i class="fa fa-map-marker"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3 class="title"> <a href=<?php echo "detail.php?kode_wisata=" . $wisata->kd_wisata; ?>>
                                                    <?php echo $wisata->nama_wisata; ?></a>
                                            </h3>
                                            <p class="product-price"><span class="discounted-price">Rp.
                                                    <?php echo $wisata->harga_tiket; ?></span>
                                            </p>
                                        </div>
                                    </div>
                                    <!--  Single Grid product End -->
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!--Product section end-->
        <!--Features section start-->

        <div class="features-section section pt-3 pt-1 pt-1">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <!-- Single Feature Start -->
                        <div class="single-feature mb-3">

                            <div class="feature-image">
                                <img src="./myimg/Icon/information.png" class="img-fluid" alt="">
                            </div>
                            <div class="feature-content">
                                <h4 class="title">Tempat Wisata</h4>
                                <p class="short-desc">Menyediakan berbagai informasi mengenai tempat wisata di Sumenep</p>
                            </div>
                        </div>
                        <!-- Single Feature End -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- Single Feature Start -->
                        <div class="single-feature mb-30">
                            <div class="feature-image">
                                <img src="./myimg/Icon/customer-journey.png" class="img-fluid" alt="">
                            </div>
                            <div class="feature-content">
                                <h4 class="title">Pengalaman Liburan</h4>
                                <p class="short-desc">Memberikan pengalaman liburan yang terbaik</p>
                            </div>
                        </div>
                        <!-- Single Feature End -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- Single Feature Start -->
                        <div class="single-feature mb-30">
                            <div class="feature-image">
                                <img src="./myimg/Icon/destination.png" class="img-fluid" alt="">
                            </div>
                            <div class="feature-content">
                                <h4 class="title">Lokasi Yang Akurat</h4>
                                <p class="short-desc">Menyediakan petunjuk lokasi menuju tempat wisata dengan akurat</p>
                            </div>
                        </div>
                        <!-- Single Feature End -->
                    </div>

                </div>
            </div>
        </div>

        <!--Features section end-->




        <!-- Testimonial Area Start -->

        <!-- Testimonial Area End -->

        <!-- FOOTER -->
        <?php include "footer.php" ?>


    </div>

    <!-- All jquery file included here -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" 
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" 
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="assets/js/plugins/plugins.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>