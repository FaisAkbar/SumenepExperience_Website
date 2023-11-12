<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sumenep Experience - Explore</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="myimg/Sumenep Experience-1 (2).png" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="assets/css/vendor/iconfont.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/plugins/plugins.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php
    require 'connect.php';
    $sql = 'SELECT * FROM wisata ORDER BY nama_wisata';
    $result = mysqli_query($con, $sql);

    if (isset($_GET["keyword"])) {
        $keyword = $_GET["keyword"];

        $queryCondition = "SELECT * FROM wisata WHERE nama_wisata LIKE '%$keyword%'";
    } else {
        $queryCondition = "SELECT * FROM wisata ORDER BY nama_wisata";
    }
    $result = mysqli_query($con, $queryCondition);

    $orderby = " ORDER BY id desc";
    ?>
    <div id="main-wrapper">

        <?php include "header_web.php" ?>


        <!-- Page Banner Section Start -->
        <div class="page-banner-section section bg-image" data-bg="myimg/sumenep/Sumenep.jpg">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page-banner text-left">
                            <h2 style="color: white; font-weight: bold;">Explore</h2>
                            <ul class="page-breadcrumb">
                                <li><a href="index.php" style="color: white; font-weight: bold;">Home</a></li>
                                <li style="color: white; font-weight: bold;">Explore</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->
        <!-- Shop Section Start -->
        <div class="shop-section section pt-5  pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="shop-area">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="shop-product">

                                                <div id="myTabContent-2" class="tab-content">

                                                    <div id="grid" class="tab-pane fade active show">

                                                        <div class="product-grid-view">

                                                            <div class="row" id="oyy">
                                                                <?php while ($wisata = mysqli_fetch_object($result)) { ?>
                                                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                                                        <!--  Single Grid product Start -->
                                                                        <div class="single-grid-product mb-40">
                                                                            <div class="product-image">

                                                                                <a href="detail.php?kode_wisata=<?php echo $wisata->kd_wisata; ?>">
                                                                                    <img src="./myimg/sumenep/<?php echo $wisata->gambar; ?>" class="img-fluid" alt="" style="height:300px;">
                                                                                </a>

                                                                                <div class="product-action">
                                                                                    <ul>
                                                                                        <li> <a href="lokasi.php?kode_wisata=<?php echo $wisata->kd_wisata; ?> &action=add"><i class="fa fa-map-marker"></i></a>
                                                                                        </li>

                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-content pb-4">
                                                                                <h3 class="title"> <a href="detail.php?kode_wisata=<?php echo $wisata->kd_wisata; ?>"><?php echo $wisata->nama_wisata; ?></a>
                                                                                </h3>
                                                                                <p class="product-price"><span class="discounted-price">Rp.
                                                                                        <?php echo $wisata->harga_tiket; ?> / Orang</span>
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
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Shop Section End -->

    <!--Footer section start-->
    <?php include "footer.php" ?>

    </div>

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- All jquery file included here -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" 
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" 
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="assets/js/plugins/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="js/script.js"></script>
</body>

</html>