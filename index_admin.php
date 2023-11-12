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
    <link rel="stylesheet" href="assets/css/plugins/plugins.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php 
include "connect.php";
	session_start();
	if($_SESSION['status']!="login" or $_SESSION['privilege'] !="admin")
    {
		header("location:./index.php?pesan=belum_login");
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
    <!--Header Mobile section start-->
  <header class="header-mobile d-block d-lg-none" style="background-color: #171c24;">
      <div class="header-bottom menu-right">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <div class="header-mobile-navigation d-block d-lg-none">
                          <div class="row align-items-center">
                              <div class="col-6 col-md-6">
                              </div>
                              <div class="col-6 col-md-6">
                                  <div class="mobile-navigation text-right">
                                      <div class="header-icon-wrapper">
                                          <ul class="icon-list justify-content-end">
                                              <li>
                                                  <a href="javascript:void(0)" class="mobile-menu-icon"
                                                      id="mobile-menu-trigger" style="color: white;"><i class="fa fa-bars"></i></a>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <!--Mobile Menu start-->
              <div class="row">
                  <div class="col-12 d-flex d-lg-none">
                      <div class="mobile-menu"></div>
                  </div>
              </div>
              <!--Mobile Menu end-->

          </div>
      </div>
  </header>
  <!--Header Mobile section end-->
  <!-- Offcanvas Menu Start -->
  <div class="offcanvas-mobile-menu d-block d-lg-none" id="offcanvas-mobile-menu">
      <a href="javascript:void(0)" class="offcanvas-menu-close" id="offcanvas-menu-close-trigger">
          <i class="fa fa-times"></i>
      </a>

      <div class="offcanvas-wrapper">

          <div class="offcanvas-inner-content">
              <div class="offcanvas-mobile-search-area">
                  <form action="explore.php" method="GET" name="frmSearch">
                      <input type="search" name="keyword" placeholder="Search ...">
                      <button type="submit"><i class="fa fa-search"></i></button>
                  </form>
              </div>
              <nav class="offcanvas-navigation">
                  <ul>
                      <li><a href="logout.php">Logout</a>
                      </li>
                  </ul>
              </nav>

              <div class="offcanvas-widget-area">
                  <div class="off-canvas-contact-widget">
                      <div class="header-contact-info">
                          <ul class="header-contact-info-list">
                              <li><i class="ion-android-phone-portrait"></i> <a href="tel:+62-83835742425">+62 823 3541 2686
                                  </a></li>
                              <li><i class="ion-android-mail"></i> <a
                                      href="mailto:sweera.hardware@gmail.com">Sumenep.experience@gmail.com</a></li>
                          </ul>
                      </div>
                  </div>
                
              </div>
          </div>
      </div>

  </div>
  <!-- Offcanvas Menu End -->

    <!-- Page Banner Section Start -->
    <div class="page-banner-section section bg-image" data-bg="myimg/sumenep/Sumenep.jpg">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page-banner text-left">
                            <h2 style="color: white; font-weight: bold;">Admin</h2>
                            <ul class="page-breadcrumb">
                                <li><a href="index.php" style="color: white; font-weight: bold;">Profil</a></li>
                                <!-- <li style="color: white; font-weight: bold;">Liburan</li> -->
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
                                <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                    Dashboard</a>
                                <a href="#wisata" data-toggle="tab"><i class="fa fa-user"></i> wisata</a>
                                <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->

                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 col-12">
                            <div class="tab-content" id="myaccountContent">
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Dashboard</h3>

                                        <div class="welcome mb-20">
                                            <p>Halo <strong><?php echo $_SESSION['username']; ?></strong> Anda telah
                                                login sebagai
                                                <b>Admin</b>.
                                            </p>
                                        </div>
                                        <?php 
                                            if (isset($_GET['pesan'])){
                                                $pesan = $_GET['pesan'];
                                                if($pesan == "updateb"){
                                                    echo "Data wisata berhasil di update";
                                                }
                                                if($pesan == "inputb"){
                                                    echo "Data wisata berhasil di tambah";
                                                }
                                                if($pesan == "hapusb"){
                                                    echo "Data wisata berhasil di hapus";
                                                }
                                            }else {
                                                ?> <p class="mb-0">Menu Admin </p> <?php
                                            }
                                            ?>


                                    </div>
                                </div>
                                <div class="tab-pane fade" id="wisata" role="tabpanel">

                                    <div class="myaccount-content">

                                        <h3>Daftar Tempat Wisata</h3>
                                        <a href="input_wisata.php" class="btn btn-secondary">Tambah Wisata</a>
                                        <div class="myaccount-table table-responsive text-center">
                                            <br>
                                            <table class="table table-bordered">
                                                <thead class="thead-light">

                                                    <tr>
                                                        <th>Kode wisata</th>
                                                        <th>Nama wisata</th>
                                                        <th>Harga Tiket</th>

                                                        <th>Open - Closes</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php 
                                            $select2 = mysqli_query($con,"SELECT * FROM wisata");
                                        
                                            while ($data2 = mysqli_fetch_array($select2)) {   
                                            ?>
                                                    <tr>
                                                        <td><?php echo$data2['kd_wisata']?></td>
                                                        <td><?php echo$data2['nama_wisata']?></td>
                                                        <td>Rp. <?php echo$data2['harga_tiket']?></td>
                                                        <td><?php echo$data2['open_closes']?></td>
                                                        <td><a href="edit_wisata.php?kd_wisata=<?php echo $data2['kd_wisata']; ?>"
                                                                class="btn btn-primary">Edit</a>
                                                            <a href="delete_wisata.php?kd_wisata=<?php echo $data2['kd_wisata']; ?>"
                                                                class="btn btn-danger">Delete</a>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>

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
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" 
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" 
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="assets/js/plugins/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>