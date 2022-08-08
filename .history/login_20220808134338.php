<?php
include 'koneksi.php';
ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KANZU GROUP INDONESIA</title>
    <!-- Tell the browser to be responsive to screen width -->
    <!-- Font Awesome -->
    <style>
        #load {
            margin-top: 0;
            width: 100%;
            height: 100%;
            position: fixed;
            z-index: 9999;
            background: url("assets/img/logokanpa.png") no-repeat center center rgba(20 31 70)
        }
    </style>
    <link rel="shortcut icon" href="assets/img/logokanpatitle.jpeg">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="assets/css/adminlte.min.css">
    <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body class="hold-transition lockscreen">
    <div id="load"></div>
    <script>
        // document.onreadystatechange = function() {
        //     var state = document.readyState
        //     if (state == 'interactive') {
        //         document.getElementById('login').style.visibility = "hidden";
        //     } else if (state == 'complete') {
        //         setTimeout(function() {
        //             document.getElementById('interactive');
        //             document.getElementById('load').style.visibility = "hidden";
        //             document.getElementById('login').style.visibility = "visible";
        //         }, 1000);
        //     }
        // }
        document.onreadystatechange = function() {
        var state = document.readyState
        if (state == 'interactive') {
            document.getElementById('login').style.visibility = "hidden";
        } else if (state == 'complete') {
            setTimeout(function() {
                document.getElementById('interactive');
                $('#load').removeClass('animate__fadeInRight');
                $('#load').addClass('animate__fadeOutLeft');
                // document.getElementById('load').style.visibility = "hidden";
                document.getElementById('login').style.visibility = "visible";
            }, 2000);
        }
    }
    </script>
    <div id="login" class="container mt-auto pl-0">
        <!-- <center> -->
        <div class="lockscreen-wrapper box border-login">
            <div class="lockscreen-logo">
                <p><b>KANZU</b>GROUP</p>
            </div>
            <!-- User name -->
            <div class="lockscreen-name"></div>

            <!-- START LOCK SCREEN ITEM -->
            <div class="lockscreen-item">
                <!-- lockscreen image -->
                <div class="lockscreen-image">
                    <img src="<?php echo 'assets/img/logokanpaheader.jpeg'; ?>" alt="User Image" style="height: 70px; width: 70px;">
                </div>
                <!-- /.lockscreen-image -->

                <!-- lockscreen credentials (contains the form) -->
                <form class="lockscreen-credentials" method="post" action="prosess/proses_login.php?op=in" enctype="multipart/form-data">
                    <div class="input-group input-user">
                        <input type="text" id="username" class="form-control" name="username" placeholder="username ..." autocomplete="off" value="">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-next-login"><i class="fas fa-arrow-right text-muted"></i></button>
                        </div>
                    </div>
                    <div class="input-group input-password">
                        <input id="password" type="password" class="form-control autofocus" name="password" placeholder="password" autocomplete="off" value="">
                        <div class="input-group-append">
                            <button id="btn-login" type="submit" class="btn"><i class="fas fa-arrow-right text-muted"></i></button>
                        </div>
                    </div>
                </form>
                <!-- /.lockscreen credentials -->
            </div>
        </div>
        <!-- </center> -->
    </div>

    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="plugins/daterangepicker/moment.min.js"></script>
    <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="plugins/toastr/toastr.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/js/adminlte.js"></script>
    <script src="assets/js/demo.js"></script>
    <script src="assets/js/login.js"></script>
    <script>
        
        $('.input-password').hide();
        document.getElementById('login').style.visibility = "hidden";
    </script>
    <?php if (@$_SESSION['hak-akses']) { ?>
        <script>
            swal("Oopps!", "<?php echo $_SESSION['hak-akses']; ?>", "error");
        </script>
        <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
    <?php unset($_SESSION['hak-akses']);
    } ?>
    <?php if (@$_SESSION['login-error']) { ?>
        <script>
            swal("Oopps!", "<?php echo $_SESSION['login-error']; ?>", "error");
        </script>
        <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
    <?php unset($_SESSION['login-error']);
    } ?>
</body>

</html>