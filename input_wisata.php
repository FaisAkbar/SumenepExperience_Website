<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="myimg/Sumenep Experience-1 (2).png" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="assets/css/vendor/iconfont.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/plugins/pluginsfix.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
    </style>
</head>

<body>
    <?php 
include "connect.php";
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
    }
    
                    
	?>

    <!--Header section start-->
    <header class="header header-transparent header-sticky  d-lg-block d-none" style="background-color: #171c24">
        <div class="header-deafult-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-2 col-md-4 col-12">
                        <!--Logo Area Start-->
                        <div class="logo-area">
                            <a href="#"><img src="./myimg/Sumenep Experience-logos_white2.png" alt=""></a>

                        </div>
                        <!--Logo Area End-->

                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-4 d-none d-lg-block col-12">
                        <!--Header Menu Area Start-->
                        <div class="header-menu-area text-center">
                            <nav class="main-menu">
                                <ul>
                                    <li>
                                        <a href="#" style="color: white;">Admin</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!--Header Menu Area End-->
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-5 col-12" >
                        <!--Header Search And Mini Cart Area Start-->
                        <div class="header-search-cart-area" >
                            <ul>
                                <li class="currency-menu"><a href="#"><i class="flaticon-user" style="color: white;"></i></a>
                                    <!--Crunccy dropdown-->
                                    <ul class="currency-dropdown">

                                        <li><a>My account</a>
                                            <ul>

                                                <li><a href="logout.php">Logout</a></li>

                                            </ul>
                                        </li>
                                        <!--Account Currency End-->
                                    </ul>
                                    <!--Crunccy dropdown-->
                                </li>
                            </ul>
                        </div>
                        <!--Header Search And Mini Cart Area End-->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Header section end-->



    <!-- Page Banner Section Start -->
        <div class="page-banner-section section bg-image" data-bg="myimg/sumenep/Sumenep.jpg">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page-banner text-left">
                            <h2 style="color: white; font-weight: bold;">Admin</h2>
                            <ul class="page-breadcrumb">
                                <li><a href="index.php" style="color: white; font-weight: bold;">Admin</a></li>
                                <li style="color: white; font-weight: bold;">Tambah Data</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->


    <!--My Account section start-->
    <div
        class="my-account-section section pt-5  pb-5">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="row">
                        <!-- My Account Tab Menu Start -->
                        <div class="col-lg-3 col-12">
                            <div class="myaccount-tab-menu nav" role="tablist">
                                <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-user"></i>
                                    wisata</a>
                                <a href="index_admin.php"><i class="fa fa-dashboard"></i>
                                    Kembali</a>
                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->

                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 col-12">
                            <div class="tab-content" id="myaccountContent">
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Input Data Wisata</h3>
                                        <div class="welcome mb-20">
                                            <form action="input_wisata_fct.php" method="POST">
                                                <table>
                                                    <tr>
                                                        <td>Nama wisata</td>
                                                        <td><input type="text" name="nama_wisata"
                                                                ></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gambar wisata (.jpg)</td>
                                                        <td><input type="file" name="gambar"
                                                                ></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gambar Besar wisata (.jpg) </td>
                                                        <td><input type="file" name="gambar_L"
                                                                ></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Deskripsi wisata </td>
                                                        <td><textarea name="deskripsi_wisata" rows="5"
                                                                cols="40"></textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Open-Close </td>
                                                        <td><input type="text" name="open_closes"
                                                                ></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Harga Tiket (Rp. )</td>
                                                        <td><input type="number" name="harga_tiket"
                                                                ></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat wisata</td>
                                                        <td><input type="text" name="gmaps"
                                                                ></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td><button type="submit" value="Simpan"
                                                                class="btn btn-success">Simpan</td>
                                                    </tr>
                                                </table>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                            </div>
                        </div>
                        <!-- My Account Tab Content End -->
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--My Account section end-->
    <!--Footer section start-->
    <?php include 'footer.php'?>
    <!--Footer section end-->
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