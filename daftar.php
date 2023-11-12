<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sumenep Experience - Daftar</title>
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
    <script>
        function validateForm() {
            var a = document.forms["daftar"]["email"].value;
            if (a == "" || a == null) {
                alert("Email Harus Diisi");
                return false;
            }
            var a = document.forms["daftar"]["username"].value;
            if (a == "" || a == null) {
                alert("Username Harus Diisi");
                return false;
            }
            var a = document.forms["daftar"]["password"].value;
            if (a == "" || a == null) {
                alert("Password Harus Diisi");
                return false;
            }
        }
    </script>
</head>

<body>
    <?php include "header_web.php" ?>
    <div class="login-register-section section pt-5  pb-5">
        <div class="container">
            <div class="row">
                <!--Login Form Start-->
                <div class="col-md-6 col-sm-6">
                    <div class="customer-login-register">

                        <div class="form-login-title">
                            <h2>Daftar</h2>
                        </div>
                        <div class="login-form">
                            <?php
                            if (isset($_GET['pesan'])) {
                                # code...
                                $pesan = $_GET['pesan'];
                                if ($pesan == "emailsalah") {
                            ?>
                                    <div class="alert alert-danger">
                                        <strong>Danger!</strong> Email telah terdaftar! Silahkan gunakan email berbeda.
                                    </div>

                            <?php
                                }
                            }
                            ?>
                            <form name="daftar" action="cek_daftar.php" method="POST" onsubmit="return validateForm()" required>
                                <div class="form-fild">
                                    <p><label>Email <span class="required">*</span></label></p>
                                    <input name="email" value="" type="email">
                                </div>
                                <div class="form-fild">
                                    <p><label>Username <span class="required">*</span></label></p>
                                    <input name="username" value="" type="text">
                                </div>
                                <div class="form-fild">
                                    <p><label>Password <span class="required">*</span></label></p>
                                    <input name="password" value="" type="password">
                                </div>
                                <div class="login-submit">
                                    <button type="submit" class="btn btn-info" value="login" name="submit">Daftar</button>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!--Login Form End-->
                <?php if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "email") {
                        echo "<div class='alert'>Email telah terdaftar! Gunakan email lain</div>";
                    }
                }
                ?>

            </div>
        </div>
    </div>
    <?php include "footer.php" ?>
</body>