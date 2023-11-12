<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatitestie" content="ie=edge">
    <title>Sumenep Experience - Details</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="myimg/Sumenep Experience-1 (2).png" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/vendor/iconfont.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php
    require 'connect.php';
    if (isset($_GET['kode_wisata'])) {
        $id = $_GET['kode_wisata'];
        $sql = "SELECT * FROM wisata WHERE kd_wisata='$id'";
        $result = mysqli_query($con, $sql);
        $wisata = mysqli_fetch_object($result);
    }

    ?>
    <div id="main-wrapper">

        <?php include "header_web.php" ?>




        <!-- Single Product Section Start -->
        <div class="single-product-section section pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="shop-area">
                            <div class="row">
                                <div class="col-md-6 pr-35 pr-lg-15 pr-md-15 pr-sm-15 pr-xs-15">
                                    <!-- Product Details Left -->
                                    <div class="product-details-left">
                                        <div class="product-details-images">
                                            <div class="lg-image">
                                                <img src="./myimg/sumenep/<?php echo $wisata->gambar; ?>" alt="">
                                                <a href="./myimg/sumenep/<?php echo $wisata->gambar; ?>" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                            </div>

                                        </div>
                                        <div class="product-details-thumbs">

                                        </div>
                                    </div>
                                    <!--Product Details Left -->
                                </div>
                                <div class="col-md-6">
                                    <!--Product Details Content Start-->

                                    <!--Product Nav End-->
                                    <h2><?php echo $wisata->nama_wisata; ?></h2>

                                    <div class="single-product-price">
                                        <span class="price new-price">Rp. <?php echo $wisata->harga_tiket; ?> / Orang</span>

                                    </div>
                                    <div class="product-description">
                                        <p><?php echo $wisata->deskripsi_wisata; ?></p>
                                        <p>Buka : <?php echo $wisata->open_closes ?></p>
                                    </div>
                                    <!--login check-->
                                    <?php
                                    if (isset($_SESSION['status'])) {
                                        $kode = "?kode_wisata=" . $wisata->kd_wisata;
                                    } else {
                                        $kode = "";
                                    }

                                    ?>
                                    <!--login check end-->

                                    <div class="single-product-quantity">
                                        <form class="add-quantity" action="lokasi.php<?php echo $kode; ?>" method="POST">
                                            <div class="add-to-link">
                                                <button class="btn btn-info">
                                                    <a class="fa fa-map-marker" href="lokasi.php<?php echo $kode; ?>"></a> Check Lokasi</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!--Product Details Content End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer section start-->
        <?php include "footer.php" ?>
    </div>
    <!-- Single Product Section End -->




    <!-- Placed js at the end of the document so the pages load faster -->

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