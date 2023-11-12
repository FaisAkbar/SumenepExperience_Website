  <?php
  error_reporting(E_ALL ^ E_NOTICE);
  session_start();
  error_reporting(E_ALL ^ E_NOTICE);
  ?>
  <!--Header section start-->
  <header class="header header-transparent header-sticky  d-lg-block d-none">
      <div class="header-deafult-area" style="background-color: #171c24;">
          <div class="container" style="color: white;">
              <div class="row align-items-center">
                  <div class="col-xl-3 col-lg-2 col-md-4 col-12">
                      <!--Logo Area Start-->
                      <div class="logo-area">
                          <a href="index.php"><img src="./myimg/Sumenep Experience-logos_white2.png" alt=""></a>

                      </div>
                      <!--Logo Area End-->

                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-4 d-none d-lg-block col-12">
                      <!--Header Menu Area Start-->
                      <div class="header-menu-area text-center" >
                          <nav class="main-menu">

                              <ul>

                                  <li><a href="explore.php" style="color: white">Explore</a>
                                  </li>

                                  <li><a href="about.php" style="color: white">Tentang Kami</a>
                                  </li>

                                  <li style="height: 110px; display: flex; align-items: center;"><input type="text" name="search" id="search" placeholder="Search..." style="padding: 0 10px;"></li>


                              </ul>
                          </nav>
                      </div>
                      <!--Header Menu Area End-->
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-5 col-12" >
                      <!--Header Search And Mini Cart Area Start-->
                      <div class="header-search-cart-area">
                          <ul>
                              <!--Account start-->
                              <li class="currency-menu"><a href="akun.php"><i class="flaticon-user" style="color: white"></i></a>
                                   <!--Crunccy dropdown-->
                                   <ul class="currency-dropdown">
                                       <?php
                                       if(!isset($_SESSION['status']))
                                       {
                                            echo "<li><a href='login.php'>Login</a></li>";
                                            echo "<li><a href='daftar.php'>Daftar</a></li>";
                                       }
                                       else
                                       {
                                            echo "<li><a href='akun.php'>".$_SESSION['username']."</a></li>";
                                            echo "<li><a href='logout.php'>Logout</a></li>";
                                       }
                                       ?>
                                            
                                       <!--Account Currency End-->
                                   </ul>
                                   <!--Crunccy dropdown-->
                                  </li>



                          </ul>
                          
                       </div>
                      </div>
                      
                      <!--Header Search And Mini Cart Area End-->
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
                                  <div class="header-logo">
                                      <a href="index.php">
                                          <!-- <img src="./myimg/Sumenep Experience-logos_white1.png" class="img-fluid" alt=""> -->
                                      </a>
                                  </div>
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

                      <li><a href="explore.php">Explore</a>
                      </li>

                      <li><a href="about.php">Tentang Kami</a>
                      </li>

                      <li><a href="login.php">Login</a>
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

  <!-- main-search start -->
  <div class="main-search-active">
      <div class="sidebar-search-icon">
          <button class="search-close"><i class="fa fa-times"></i></button>
      </div>
      <div class="sidebar-search-input">
          <form action="explore.php" method="GET" name="frmSearch">
              <div class="form-search">
                  <input id="search" name="keyword" class="input-text" placeholder="" type="text">
                  <button type="submit" value="Search">
                      <i class="fa fa-search"></i>
                  </button>
              </div>
          </form>
          <p class="form-description">Cari Barang Anda</p>
      </div>
  </div>
  <!-- main-search start -->
