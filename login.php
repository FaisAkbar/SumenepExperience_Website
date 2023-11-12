<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sumenep Experience - Login</title>
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
</head>

<body>
    <?php
    require 'connect.php';
    ?>
    <div id="main-wrapper">

        <?php include "header_web.php" ?>

        <!-- Page Banner Section Start -->
        <div class="page-banner-section section bg-image" data-bg="myimg/sumenep/Sumenep.jpg">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page-banner text-left">
                            <h2 style="color: white; font-weight: bold;">Login</h2>
                            <ul class="page-breadcrumb">
                                <li><a href="index.php" style="color: white; font-weight: bold;">Home</a></li>
                                <li style="color: white; font-weight: bold;">Login</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->
        <!--Login Register section start-->
        <div class="login-register-section section pt-5  pb-5">
            <div class="container">
                <div class="row">
                    <!--Login Form Start-->
                    <div class="col-md-6 col-sm-6">
                        <div class="customer-login-register">

                            <div class="form-login-title">
                                <h2>Login</h2>
                            </div>
                            <div class="login-form">
                                <?php
                                if (isset($_GET['pesan'])) {
                                    # code...
                                    $pesan = $_GET['pesan'];
                                    if ($pesan == "usernamesalah") {
                                ?>
                                        <div class="alert alert-danger">
                                            <strong>Danger!</strong> Anda gagal login,user tidak ditemukan.
                                        </div>

                                <?php
                                    }
                                }
                                ?>
                                <form action="cek_login.php" method="POST">
                                    <div class="form-fild">
                                        <p><label>Email <span class="required">*</span></label></p>
                                        <input name="email" value="" type="text">
                                    </div>
                                    <div class="form-fild">
                                        <p><label>Password <span class="required">*</span></label></p>
                                        <input name="password" value="" type="password">
                                    </div>
                                    <div class="login-submit">
                                        <button type="submit" class="btn btn-info" value="login" name="submit">Login</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <!--Login Form End--><?php if (isset($_GET['pesan'])) {
                                                if ($_GET['pesan'] == "gagal") {
                                                    echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
                                                }
                                            }
                                            ?>

                </div>
                <div style='text-align:left;vertical-align:top'><a href="./daftar.php">Belum memiliki akun?</a></div>
            </div>
        </div>
        <!--Login Register section end-->

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

</body>

</html>