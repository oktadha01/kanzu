<?php
include '../koneksi.php';
$data_tipe = $_POST['id-perum-tipe'];
$id_tipe = $_POST['id-tipe'];
$no = 1;
$spek = 1;
$det = 1;
$jumlah = 1;
$ambil_data = mysqli_query($koneksi, "SELECT *FROM perumahan, tipe WHERE perumahan.nm_perum = '$data_tipe' AND tipe.id_tipe = '$id_tipe' AND  tipe.id_tipeperum = perumahan.id_perum");
while ($row = mysqli_fetch_array($ambil_data)) {
    $tipe = $row['id_tipe'];
?>
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("demo");
            // let captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            // captionText.innerHTML = dots[slideIndex - 1].alt;
        }

        let slideIndexlantai = 1;
        showSlideslantai(slideIndexlantai);

        function plusSlideslantai(n) {
            showSlideslantai(slideIndexlantai += n);
        }

        function currentSlidelantai(n) {
            showSlideslantai(slideIndexlantai = n);
        }

        function showSlideslantai(n) {
            let i;
            let slideslantai = document.getElementsByClassName("mySlideslantai");
            let dotslantai = document.getElementsByClassName("demolantai");
            // let captionText = document.getElementById("caption");
            if (n > slideslantai.length) {
                slideIndexlantai = 1
            }
            if (n < 1) {
                slideIndexlantai = slideslantai.length
            }
            for (i = 0; i < slideslantai.length; i++) {
                slideslantai[i].style.display = "none";
            }
            for (i = 0; i < dotslantai.length; i++) {
                dotslantai[i].className = dotslantai[i].className.replace(" active", "");
            }
            slideslantai[slideIndexlantai - 1].style.display = "block";
            dotslantai[slideIndexlantai - 1].className += " active";
            // captionText.innerHTML = dots[slideIndex - 1].alt;
        }
    </script>
    <div class="container">
        <center>
            <div class="row">
                <div class="col-12">
                    <?php
                    $mySlides = 1;
                    $ambil_datafoto = mysqli_query($koneksi, "SELECT *FROM fot_slide WHERE fot_slide.id_fottipe = '$tipe'");
                    while ($data = mysqli_fetch_array($ambil_datafoto)) {
                    ?>
                        <div id="slidesperum<?php echo $mySlides++; ?>" class="mySlides">
                            <img class="img-fluid" src="assets/img/foto_slidetipe/<?php echo $data['file_slidetipe']; ?>">
                        </div>
                    <?php } ?>
                </div>
            </div>
        </center>
        <div class="row">
            <div class="table-responsive p-0">
                <table class="table table-head-fixed text-nowrap table-hover">
                    <thead>
                        <tr>
                            <?php
                            $slide = 1;
                            $ambil_datafoto = mysqli_query($koneksi, "SELECT *FROM fot_slide WHERE fot_slide.id_fottipe = '$tipe'");
                            while ($data = mysqli_fetch_array($ambil_datafoto)) {
                            ?>
                                <div class="column">
                                    <td>
                                        <div class="card">
                                            <div class="card-body p-1">
                                                <img class="demo cursor height-3rem" src="assets/img/foto_slidetipe/<?php echo $data['file_slidetipe']; ?>" onclick="currentSlide(<?php echo $slide++; ?>)" alt="The Woods">
                                            </div>
                                        </div>
                                    </td>
                                </div>
                            <?php } ?>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <?php
    if ($row['fot_lantai2'] == null) { ?>
        <center>
            <div class="row">
                <div class="col-12 p-0">
                    <div class="card ">
                        <div class="card-body p-1 img-fluid">
                            <img src="assets/img/foto_lantai1/<?php echo $row['fot_lantai1']; ?>" alt="PT KANPA Logo" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </center>
    <?php } else { ?>
        <div class="container">
            <center>
                <div class="row">
                    <div class="col-12">
                        <div id="slideslantai" class="mySlideslantai">
                            <img class="img-fluid" src="assets/img/foto_lantai1/<?php echo $row['fot_lantai1']; ?>">
                        </div>
                        <div class="mySlideslantai">
                            <img class="img-fluid" src="assets/img/foto_lantai2/<?php echo $row['fot_lantai2']; ?>">
                        </div>
                    </div>
                </div>
            </center>
            <div class="row p-content-center">
                <div class="columnlantai p-1">
                    <div class="card">
                        <div class="card-body img-fluid p-1">
                            <img class="demolantai cursor img-fluid" src="assets/img/foto_lantai1/<?php echo $row['fot_lantai1']; ?>" onclick="currentSlidelantai(1)" alt="The Woods">
                        </div>
                    </div>
                </div>
                <div class="columnlantai p-1">
                    <div class="card">
                        <div class="card-body img-fluid p-1">
                            <img class="demolantai cursor img-fluid" src="assets/img/foto_lantai2/<?php echo $row['fot_lantai2']; ?>" onclick="currentSlidelantai(2)" alt="The Woods">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <div class="row jus-content">
        <div class="table-responsive p-0">
            <table class="table table-head-fixed text-nowrap table-hover">
                <thead>
                    <tr>
                        <td scope="col" class="text-center">
                            <img src="assets/img/ikon-detail/ikon-taman.png" alt="PT KANPA Logo" class="height-5rem"><br>
                            <center>
                                <h6><?php echo $row['taman']; ?></h6>
                            </center>
                        </td>
                        <td scope="col" class="text-center">
                            <img src="assets/img/ikon-detail/ikon-carport.png" alt="PT KANPA Logo" class="height-5rem"><br>
                            <center>
                                <h6><?php echo $row['carport']; ?></h6>
                            </center>
                        </td>
                        <td scope="col" class="text-center">
                            <img src="assets/img/ikon-detail/ikon-ru-tamu.png" alt="PT KANPA Logo" class="height-5rem"><br>
                            <center>
                                <h6><?php echo $row['ru_tamu']; ?></h6>
                            </center>
                        </td>
                        <td scope="col" class="text-center">
                            <img src="assets/img/ikon-detail/ikon-ka-tidur.png" alt="PT KANPA Logo" class="height-5rem"><br>
                            <center>
                                <h6><?php echo $row['ka_tidur']; ?></h6>
                            </center>
                        </td>
                        <td scope="col" class="text-center">
                            <img src="assets/img/ikon-detail/ikon-ka-mandi.png" alt="PT KANPA Logo" class="height-5rem"><br>
                            <center>
                                <h6><?php echo $row['ka_mandi']; ?></h6>
                            </center>
                        </td>
                        <?php
                        if ($row['dapur'] == null) { ?>

                        <?php } else { ?>
                            <td scope="col" class="text-center">
                                <img src="assets/img/ikon-detail/ikon-dapur.png" alt="PT KANPA Logo" class="height-5rem"><br>
                                <center>
                                    <h6><?php echo $row['dapur']; ?></h6>
                                </center>
                            </td>
                        <?php } ?>
                        <?php
                        if ($row['ru_keluarga'] == null) { ?>

                        <?php } else { ?>
                            <td scope="col" class="text-center">
                                <img src="assets/img/ikon-detail/ikon-ru-keluarga.png" alt="PT KANPA Logo" class="height-5rem"><br>
                                <center>
                                    <h6><?php echo $row['ru_keluarga']; ?></h6>
                                </center>
                            </td>
                        <?php } ?>
                        <?php
                        if ($row['ru_makan'] == null) { ?>

                        <?php } else { ?>
                            <td scope="col" class="text-center">
                                <img src="assets/img/ikon-detail/ikon-ru-makan.png" alt="PT KANPA Logo" class="height-5rem"><br>
                                <center>
                                    <h6><?php echo $row['ru_makan']; ?></h6>
                                </center>
                            </td>
                        <?php } ?>
                        <?php
                        if ($row['balkon'] == null) { ?>

                        <?php } else { ?>
                            <td scope="col" class="text-center">
                                <img src="assets/img/ikon-detail/ikon-balkon.png" alt="PT KANPA Logo" class="height-5rem"><br>
                                <center>
                                    <h6><?php echo $row['balkon']; ?></h6>
                                </center>
                            </td>
                        <?php } ?>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <div class="row jus-content">
        <div class="table-responsive p-0">
            <table class="table table-head-fixed text-nowrap table-hover">
                <thead>
                    <tr>
                        <?php
                        if ($row['taman'] == null) { ?>

                        <?php } else { ?>
                            <td scope="col" class="text-center">
                                <div class=" m-2">
                                    <img src="assets/img/taman01.png" alt="PT KANPA Logo" class="height-5rem"><br>
                                    <input type="hidden" class="det<?php echo $det++; ?>" value="TAMAN">
                                    <input type="hidden" class="jumlah<?php echo $jumlah++; ?>" value="<?php echo $row['taman']; ?>">
                                    <center>
                                        <h6 class="mt-1 spek<?php echo $spek++; ?>"></h6>
                                    </center>
                                </div>
                            </td>
                        <?php } ?>
                        <?php
                        if ($row['balkon'] == null) { ?>

                        <?php } else { ?>
                            <td scope="col" class="text-center">
                                <div class=" m-2">
                                    <img src="assets/img/balkon.png" alt="PT KANPA Logo" class="height-5rem"><br>
                                    <input type="hidden" class="det<?php echo $det++; ?>" value="BALKON">
                                    <input type="hidden" class="jumlah<?php echo $jumlah++; ?>" value="<?php echo $row['balkon']; ?>">
                                    <center>
                                        <h6 class="mt-1 spek<?php echo $spek++; ?>"></h6>
                                    </center>
                                </div>
                            </td>
                        <?php } ?>
                        <?php
                        if ($row['carportr'] == null) { ?>

                        <?php } else { ?>
                            <td scope="col" class="text-center">
                                <div class="m-2">
                                    <img src="assets/img/carport-02.png" alt="PT KANPA Logo" class="height-5rem"><br>
                                    <input type="hidden" class="det<?php echo $det++; ?>" value="CARPORT">
                                    <input type="hidden" class="jumlah<?php echo $jumlah++; ?>" value="<?php echo $row['carportr']; ?>">
                                    <center>
                                        <h6 class="mt-1 spek<?php echo $spek++; ?>"></h6>
                                    </center>
                                </div>
                            </td>
                        <?php } ?>
                        <?php
                        if ($row['ru_keluarga'] == null) { ?>

                        <?php } else { ?>
                            <td scope="col" class="text-center">
                                <div class=" m-2">
                                    <img src="assets/img/ru-keluarga.png" alt="PT KANPA Logo" class="height-5rem"><br>
                                    <input type="hidden" class="det<?php echo $det++; ?>" value="RU-KELUARGA">
                                    <input type="hidden" class="jumlah<?php echo $jumlah++; ?>" value="<?php echo $row['ru_keluarga']; ?>">
                                    <center>
                                        <h6 class="mt-1 spek<?php echo $spek++; ?>"></h6>
                                    </center>
                                </div>
                            </td>
                        <?php } ?>
                        <?php
                        if ($row['ru_tamu'] == null) { ?>

                        <?php } else { ?>
                            <td scope="col" class="text-center">
                                <div class=" m-2">
                                    <img src="assets/img/ruang-tamu.png" alt="PT KANPA Logo" class="height-5rem"><br>
                                    <input type="hidden" class="det<?php echo $det++; ?>" value="RU-TAMU">
                                    <input type="hidden" class="jumlah<?php echo $jumlah++; ?>" value="<?php echo $row['ru_tamu']; ?>">
                                    <center>
                                        <h6 class="mt-1 spek<?php echo $spek++; ?>"></h6>
                                    </center>
                                </div>
                            </td>
                        <?php } ?>
                        <?php
                        if ($row['ka_tidur'] == null) { ?>

                        <?php } else { ?>
                            <td scope="col" class="text-center">
                                <div class=" m-2">
                                    <img src="assets/img/kamar-tidur.png" alt="PT KANPA Logo" class="height-5rem"><br>
                                    <input type="hidden" class="det<?php echo $det++; ?>" value="KA-TIDUR">
                                    <input type="hidden" class="jumlah<?php echo $jumlah++; ?>" value="<?php echo $row['ka_tidur']; ?>">
                                    <center>
                                        <h6 class="mt-1 spek<?php echo $spek++; ?>"></h6>
                                    </center>
                                </div>
                            </td>
                        <?php } ?>
                        <?php
                        if ($row['ka_mandi'] == null) { ?>

                        <?php } else { ?>
                            <td scope="col" class="text-center">
                                <div class=" m-2">
                                    <img src="assets/img/kamar-mandi.png" alt="PT KANPA Logo" class="height-5rem"><br>
                                    <input type="hidden" class="det<?php echo $det++; ?>" value="KA-MANDI">
                                    <input type="hidden" class="jumlah<?php echo $jumlah++; ?>" value="<?php echo $row['ka_mandi']; ?>">
                                    <center>
                                        <h6 class="mt-1 spek<?php echo $spek++; ?>"></h6>
                                    </center>
                                </div>
                            </td>
                        <?php } ?>
                        <?php
                        if ($row['ru_makan'] == null) { ?>

                        <?php } else { ?>
                            <td scope="col" class="text-center">
                                <div class=" m-2">
                                    <img src="assets/img/r-makan.png" alt="PT KANPA Logo" class="height-5rem"><br>
                                    <input type="hidden" class="det<?php echo $det++; ?>" value="RU-MAKAN">
                                    <input type="hidden" class="jumlah<?php echo $jumlah++; ?>" value="<?php echo $row['ru_makan']; ?>">
                                    <center>
                                        <h6 class="mt-1 spek<?php echo $spek++; ?>"></h6>
                                    </center>
                                </div>
                            </td>
                        <?php } ?>
                        <?php
                        if ($row['dapur'] == null) { ?>

                        <?php } else { ?>
                            <td scope="col" class="text-center">
                                <div class=" m-2">
                                    <img src="assets/img/dapur.png" alt="PT KANPA Logo" class="height-5rem"><br>
                                    <input type="hidden" class="det<?php echo $det++; ?>" value="DAPUR">
                                    <input type="hidden" class="jumlah<?php echo $jumlah++; ?>" value="<?php echo $row['dapur']; ?>">
                                    <center>
                                        <h6 class="mt-1 spek<?php echo $spek++; ?>"></h6>
                                    </center>
                                </div>
                            </td>
                        <?php } ?>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-4 col-6">
            <table>
                <tr>
                    <th>
                        <i class="fa-solid fa-a alphabet"></i>
                    </th>
                    <th>
                        <h6 class="nm-spek1"></h6>
                    </th>
                    <th>
                        <h6 class="speksi1"></h6>
                    </th>
                </tr>
            </table>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <table>
                <tr>
                    <th>
                        <i class="fa-solid fa-b alphabet"></i>
                    </th>
                    <th>
                        <h6 class="nm-spek2"></h6>
                    </th>
                    <th>
                        <h6 class="speksi2"></h6>
                    </th>
                </tr>
            </table>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <table>
                <tr>
                    <th>
                        <i class="fa-solid fa-c alphabet"></i>
                    </th>
                    <th>
                        <h6 class="nm-spek3"></h6>
                    </th>
                    <th>
                        <h6 class="speksi3"></h6>
                    </th>
                </tr>
            </table>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <table>
                <tr>
                    <th>
                        <i class="fa-solid fa-d alphabet"></i>
                    </th>
                    <th>
                        <h6 class="nm-spek4"></h6>
                    </th>
                    <th>
                        <h6 class="speksi4"></h6>
                    </th>
                </tr>
            </table>
        </div>
        <div class="col-lg-3 col-md-4 col-6 det-spek5">
            <table>

                <tr>
                    <th>
                        <i class="fa-solid fa-e alphabet"></i>
                    </th>
                    <th>
                        <h6 class="nm-spek5"></h6>
                    </th>
                    <th>
                        <h6 class="speksi5"></h6>
                    </th>
                </tr>
            </table>
        </div>
        <div class="col-lg-3 col-md-4 col-6 det-spek6">
            <table>
                <tr>
                    <th>
                        <i class="fa-solid fa-f alphabet"></i>
                    </th>
                    <th>
                        <h6 class="nm-spek6"></h6>
                    </th>
                    <th>
                        <h6 class="speksi6"></h6>
                    </th>
                </tr>
            </table>
        </div>
        <div class="col-lg-3 col-md-4 col-6 det-spek7">
            <table>
                <tr>
                    <th>
                        <i class="fa-solid fa-g alphabet"></i>
                    </th>
                    <th>
                        <h6 class="nm-spek7"></h6>
                    </th>
                    <th>
                        <h6 class="speksi7"></h6>
                    </th>
                </tr>
            </table>
        </div>
        <div class="col-lg-3 col-md-4 col-6 det-spek8">
            <table>
                <tr>
                    <th>
                        <i class="fa-solid fa-h alphabet"></i>
                    </th>
                    <th>
                        <h6 class="nm-spek8"></h6>
                    </th>
                    <th>
                        <h6 class="speksi8"></h6>
                    </th>
                </tr>
            </table>
        </div>
        <div class="col-lg-3 col-md-4 col-6 det-spek9">
            <table>
                <tr>
                    <th>
                        <i class="fa-solid fa-i alphabet"></i>
                    </th>
                    <th>
                        <h6 class="nm-spek9"></h6>
                    </th>
                    <th>
                        <h6 class="speksi9"></h6>
                    </th>
                </tr>
            </table>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-4 col-sm-8 col-xs-8 mb-1">
            <table>
                <tr>
                    <th>*Luas tanah </th>
                    <th>: <u><?php echo $row['luas_t']; ?>m <sup>2</sup></u></th>
                </tr>
            </table>
        </div>
        <div class="col-lg-4 col-sm-8 col-xs-8 mb-1">
            <table>
                <tr>
                    <th>*Luas penggunaan </th>
                    <th>: <u><?php echo $row['luas_p']; ?>m <sup>2</sup></u></th>
                </tr>
            </table>
        </div>
        <div class="col-lg-4 col-sm-4 col-xs-4">
            <h6 class="font-weight-bold"><u>* <?php echo $row['lantai']; ?></u> Lantai</h6>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>ALAMAT <?php echo $row['nm_perum']; ?></h4>
                </div>
                <div class="card-body p-1">
                    <iframe class="col-12" src="<?php echo $row['map']; ?>"></iframe>
                    <a href="<?php echo $row['url_map']; ?>">
                        <button type="button" name="simpan" id="" class="col-12 btn btn-sm btn-success">
                            <i class="fa-solid fa-earth-asia"></i> GOOGLE MAPS
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="timeline-header">VIDEO PERUM <?php echo $row['nm_perum']; ?></h3>
                </div>
                <div class="card-body p-1">
                    <div class="timeline-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <?php echo $row['video']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    if ($row['url_vr'] == '') {
    } else { ?>
        <div class="card p-1">
            <div class="card-header">
                <h6>VR 360 PERUMAHAN <?php echo $row['nm_perum']; ?> type <?php echo $row['luas_p']; ?></h6>
            </div>
            <div class="card-body p-1">
                <section class="content-header p-0">
                    <div class="container-fluid p-0">
                        <!-- <iframe class="responsive-iframe" src="http://192.168.18.25/360altongreenhouse/index.html"></iframe> -->
                        <div class="rwd-media">
                            <iframe src="<?php echo $row['url_vr']; ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="448" height="252" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    <?php } ?>
    <div class="row mt-3">
        <div class="col-12">
            <img src="assets/img/foto_grid/<?php echo $row['fot_grid']; ?>" alt="PT KANPA Logo" class="img-fluid" />
        </div>
    </div>
    <div class="row">
        <div class="col-12 p-0">
            <div class="card">
                <div class="card-header">
                    <h5>HUBUNGI MARKETING</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="prosess/proses_simpan_data_kastemer.php" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <label for="nm-kastemer">Nama Lengkap</label>
                                <div class="form-group ">
                                    <input type="hidden" id="" class="form-control" name="action_wa" value="wa-detail">
                                    <input type="hidden" id="wa-nmperum" class="form-control" name="wa_nmperum" value="<?php echo $row['nm_perum']; ?>">
                                    <input type="hidden" id="wa-tipeperum" class="form-control" name="wa_tipeperum" value="<?php echo $row['luas_p']; ?>">
                                    <input type="text" id="nm-kastemer" class="form-control" name="nm_kastemer" placeholder="Nama Lengkap ..." autocomplete="off" required value="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <label for="no-wa">No Whatsapp</label>
                                <div class="form-group ">
                                    <input type="text" id="no-wa" class="form-control" name="no_wa" placeholder="No Wa ..." autocomplete="off" required value="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <label for="email">Alamat Email</label>
                                <div class="form-group ">
                                    <input type="text" id="email" class="form-control" name="email" placeholder="Alamat Email ..." autocomplete="off" required value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0">
                                <button type="submit" name="simpan" id="chat-wa" class="text-light col-12 btn btn-sm bg-btn-wa elevation-3">
                                    <i class="fa-brands fa-whatsapp"></i> Chat Marketing
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {

            $('#slidesperum1').addClass('diplay-block');
            $('#slideslantai').addClass('diplay-block');

            $('.spek1').text('A');
            $('.spek2').text('B');
            $('.spek3').text('C');
            $('.spek4').text('D');
            $('.spek5').text('E');
            $('.spek6').text('F');
            $('.spek7').text('G');
            $('.spek8').text('H');
            $('.spek9').text('I');

            $('.nm-spek1').text($('.det1').val());
            $('.speksi1').text(':' + $('.jumlah1').val());
            $('.nm-spek2').text($('.det2').val());
            $('.speksi2').text(':' + $('.jumlah2').val());
            $('.nm-spek3').text($('.det3').val());
            $('.speksi3').text(':' + $('.jumlah3').val());
            $('.nm-spek4').text($('.det4').val());
            $('.speksi4').text(':' + $('.jumlah4').val());
            $('.nm-spek5').text($('.det5').val());
            $('.speksi5').text(':' + $('.jumlah5').val());
            $('.nm-spek6').text($('.det6').val());
            $('.speksi6').text(':' + $('.jumlah6').val());
            $('.nm-spek6').text($('.det6').val());
            $('.speksi6').text(':' + $('.jumlah6').val());
            $('.nm-spek7').text($('.det7').val());
            $('.speksi7').text(':' + $('.jumlah7').val());
            $('.nm-spek8').text($('.det8').val());
            $('.speksi8').text(':' + $('.jumlah8').val());
            $('.nm-spek9').text($('.det9').val());
            $('.speksi9').text(':' + $('.jumlah9').val());

            if ($('.speksi9').text() == ':undefined') {
                $('.det-spek9').hide();
                // alert('1')
            }
            if ($('.speksi8').text() == ':undefined') {
                $('.det-spek8').hide();
                // alert('1')
            }
            if ($('.speksi7').text() == ':undefined') {
                $('.det-spek7').hide();
                // alert('2')
            }
            if ($('.speksi6').text() == ':undefined') {
                $('.det-spek6').hide();
            }
            if ($('.speksi5').text() == ':undefined') {
                $('.det-spek5').hide();
            }
            // $('.id1').addClass('show active');
            $(document).on('click', '.tab-tipe', function() {
                // $("#dynamic_field-edit").remove();
                var id_tipe = $(this).data('id');
                // alert(id_tipe);
                $('#id-tipe').val(id_tipe);
                let formData = new FormData();
                formData.append('id-perum-tipe', $('#id-perum-tipe').val());
                formData.append('id-tipe', $('#id-tipe').val());
                $.ajax({
                    type: 'POST',
                    url: "pages/data_detail_tipe.php",
                    data: formData,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        // alert(data);
                        $("#data-detail-tipe").html(data);

                    }
                })
                // $('#data-detail-tipe').load("pages/data_detail_tipe.php");
            });
        });
    </script>
<?php } ?>