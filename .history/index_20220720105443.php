<?php
include 'koneksi.php';
ob_start();
session_start();
// $ambil_data = mysqli_query($koneksi, "SELECT * FROM user where id_user = '$_SESSION[id_user]'");
// $data = mysqli_fetch_array($ambil_data);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT KANPA</title>
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
    <!-- Tell the browser to be responsive to screen width -->
    <!-- Font Awesome -->

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css"> -->

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="assets/css/adminlte.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body class="container hold-transition layout-top-nav pl-0 pr-0">
    <div class="row">
        <div class="col">
            <div id="load"></div>
        </div>
    </div>
    <script>
        document.onreadystatechange = function() {
            var state = document.readyState
            if (state == 'interactive') {
                document.getElementById('conten').style.visibility = "hidden";
            } else if (state == 'complete') {
                setTimeout(function() {
                    document.getElementById('interactive');
                    document.getElementById('load').style.visibility = "hidden";
                    document.getElementById('conten').style.visibility = "visible";
                }, 1000);
            }
        }
    </script>
    <div class="conten">
        <div class="wrapper">
            <!-- Navbar -->
            <nav id="navbar" class="main-header navbar navbar-expand-md navbar-light navbar-white" style="top: 0px; max-width: 1140px;">
                <div class=" container-fluid pr-1">
                    <a href="index.php?=dashboard" class="navbar-brand p-0">
                        <img src="<?php echo 'assets/img/logokanpaheader.jpeg'; ?>" alt="PT KANPA Logo" class="brand-image" style="height: 64px; width: 64px;">
                    </a>
                    <span class="brand-text font-weight-bold" style="font-size: initial;">KANZU PERMAI ABADI</span>
                    <button class="navbar-toggler order-1 p bg-white" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse order-3 border-b" id="navbarCollapse">
                        <!-- Left navbar links -->
                        <ul class="navbar-nav border-b">
                            <li class="nav-item">
                                <a href="index.php?=dashboard" class="menu-nav-active">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?p=produk" class="nav-link menu-nav">Produk</a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?p=estimasi_harga" class="nav-link menu-nav">Estimasi Harga</a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?p=berita" class="nav-link menu-nav">Berita</a>
                            </li>
                            <?php
                            if (@$_SESSION['privilege'] == 'Admin') { ?>
                                <li class="nav-item dropdown">
                                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link menu-nav dropdown-toggle">DATA</a>
                                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                        <li><a href="index.php?p=tambah_data" class="dropdown-item menu-nav"> Olah data </a></li>
                                        <li><a href="index.php?p=form_foto_slide" class="dropdown-item menu-nav"> Olah foto slide </a></li>
                                        <li><a href="index.php?p=pembeli" class="dropdown-item menu-nav"> Data Pembeli </a></li>
                                    </ul>
                                </li>
                            <?php } else { ?>
                            <?php } ?>
                        </ul>
                        <!-- Right navbar links -->

                        <?php
                        if (@$_SESSION['privilege'] == 'Admin') { ?>
                            <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto border-r">
                                <!-- Messages Dropdown Menu -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link menu-nav" href="logout.php">
                                        <i class="fa-solid fa-right-to-bracket"></i> LOGOUT
                                    </a>
                                </li>
                            </ul>
                        <?php } else { ?>
                        <?php } ?>
                    </div>
                </div>
            </nav>
            <!-- /.navbar -->
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper bg-white">
                <!-- <div class="content"> -->
                <!-- Main content -->
                <?php
                $pages_dir = 'pages';
                if (!empty($_GET['p'])) {
                    $pages = scandir($pages_dir, 0);
                    // unset($pages[0],$pages[1]);
                    $p = $_GET['p'];
                    if (in_array($p . '.php', $pages)) {
                        include($pages_dir . '/' . $p . '.php');
                    } else {
                        echo 'Halaman Tidak Ditemukan';
                    }
                } else {
                    include($pages_dir . '/dashboard.php');
                }
                ?>

                <!-- </div> -->
            </div>
            <!-- /.content-wrapper -->
            <a class="wafixed" href="https://wa.me/6281249995616" target="_blank">
                <img src="assets/img/logowa.png" alt="logo WA" class="height-3rem img-circle elevation-3">
            </a>

            <!-- Main Footer -->
            <footer id="footer" class="main-footer bg-kanpa">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <h4 class="font-weight-bold color-orange">Jam Kerja</h4>
                        <h6 class="text-light"><i class="fa-solid fa-calendar-days"></i> Senin - Minggu :</h6>
                        <h6 class="text-light"><i class="fa-solid fa-clock"></i> 08AM - 16PM</h6>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <h4 class="font-weight-bold color-orange">Kantor Penjualan</h4>
                        <h6 class="text-light">Jl. Pattimura Raya, Komplek Masjid Baitut Taqwa, Mapagan, Lerep, Kec. Ungaran Bar., Kabupaten Semarang, Jawa Tengah 50518</h6>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <h4 class="font-weight-bold color-orange">Info Kontak</h4>
                        <div class="row">
                            <div class="col-12">
                                <h6 class="text-light"><i class="fa-solid fa-square-phone"></i> (024) 7590 1139</h6>
                            </div>
                            <div class="col-12">
                                <?php
                                $data_perum = mysqli_query($koneksi, "SELECT *FROM user WHERE id_user = '2'");
                                while ($data = mysqli_fetch_array($data_perum)) {
                                ?>
                                    <h6 class="text-light"><i class="fa-brands fa-whatsapp-square"></i> <?php echo $data['kontak']; ?></h6>
                                <?php } ?>
                            </div>
                            <div class="col-12">
                                <h6 class="text-light"><i class="fa-solid fa-envelope"></i> Kanzugroupindonesia@gamail.com</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <table class="table table-head-fixed text-nowrap table-hover">
                                    <thead>
                                        <tr>
                                            <td scope="col" class="text-center">
                                                <a class="text-light" href="#">
                                                    <div class="border-r">
                                                        <i class="heigh-20px fa-brands fa-whatsapp-square"></i>
                                                    </div>
                                                </a>
                                            </td>
                                            <td scope="col" class="text-center">
                                                <a class="text-light" href="https://instagram.com/pt.kanpa?igshid=YmMyMTA2M2Y=">
                                                    <div class="border-r">
                                                        <i class="heigh-20px fa-brands fa-instagram-square"></i>
                                                    </div>
                                                </a>
                                            </td>
                                            <td scope="col" class="text-center">
                                                <a class="text-light" href="#">
                                                    <div class="border-r">
                                                        <i class="heigh-20px fa-brands fa-facebook"></i>
                                                    </div>
                                                </a>
                                            </td>
                                            <td scope="col" class="text-center">
                                                <a class="text-light" href="#">
                                                    <div class="border-r">
                                                        <i class="heigh-20px fa-solid fa-envelope"></i>
                                                    </div>
                                                </a>
                                            </td>
                                            <td scope="col" class="text-center">
                                                <a class="text-light" href="https://www.youtube.com/channel/UCLliJCkXBmAHT_ujeGicfjQ">
                                                    <div class="border-r">
                                                        <i class="heigh-20px fa-brands fa-youtube"></i>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Default to the left -->
                <center>
                    <strong><a href="http://kanpa.co.id/">Kanpa.co.id</a></strong>
                </center>
            </footer>
        </div>
    </div>
    <!-- ./wrapper -->


    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <script src="plugins/toastr/toastr.min.js"></script>
    <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

    <!-- <script src="assets/js/vendor.min.js"></script> -->
    <!-- AdminLTE App -->
    <script src="assets/js/demo.js"></script>
    <script src="assets/js/adminlte.js"></script>
    <script src="assets/js/index.js"></script>
    <script>
        var didScroll;
        var lastScrollTop = 0;
        var delta = 5;
        var navbarHeight = $('#navbar').outerHeight();

        $(window).scroll(function(event) {
            didScroll = true;
        });

        setInterval(function() {
            if (didScroll) {
                hasScrolled();
                didScroll = false;
            }
        }, 250);

        function hasScrolled() {
            var st = $(this).scrollTop();

            // Make sure they scroll more than delta
            if (Math.abs(lastScrollTop - st) <= delta)
                return;

            // If they scrolled down and are past the navbar, add class .nav-up.
            // This is necessary so you never see what is "behind" the navbar.
            if (st > lastScrollTop && st > navbarHeight) {
                // Scroll Down
                $('#navbar').hide(200);
            } else {
                // Scroll Up
                if (st + $(window).height() < $(document).height()) {
                    $('#navbar').show(200);
                }
            }

            lastScrollTop = st;
        }

        $(function() {
            $('#reservation').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                locale: {
                    format: 'DD-MMMM-YYYY'
                }
            })
        });
    </script>

    <script>
        <?php
        $no = 1;
        $ambil_data = mysqli_query($koneksi, "SELECT * FROM berita");
        while ($row = mysqli_fetch_array($ambil_data)) {
        ?>
            $('.konten<?php echo $row['id_berita']; ?>').hide(300);
            $('#tittle-berita<?php echo $row['id_berita']; ?>, .img<?php echo $row['id_berita']; ?>').on('click', function(e) {
                $('.konten<?php echo $row['id_berita']; ?>').toggle(300);
            });
        <?php } ?>
    </script>
    <?php
    $get_data = mysqli_query($koneksi, "SELECT *FROM perumahan WHERE nm_perum='$_GET[id]'");
    $data = mysqli_fetch_array($get_data)
    ?>
    <script type="text/javascript">
        $('#id-perum-tipe').val('<?php echo $data['nm_perum']; ?>');
    </script>
</body>

</html>