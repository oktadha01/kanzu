<div id="wujudkan-rumah-impian-anda-bersama-PT-KANPA" class="halaman">
    <?php
    include '../koneksi.php';
    ?>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <section class="content-header mt-5rem">
        <div class="container-fluid">
            <div class="row">
                <?php
                $ambil_data = mysqli_query($koneksi, "SELECT *FROM perumahan, tipe WHERE perumahan.id_perum = tipe.id_tipeperum ORDER BY id_perum DESC");
                while ($row = mysqli_fetch_array($ambil_data)) {
                    $nmperum = $row['nm_perum'];
                    $perum = preg_replace("![^a-z0-9]+!i", "-", $nmperum);
                ?>
                    <div class="col-lg-4 col-md-4 col-12 mt-3">
                        <div class="bg-product">
                            <a href="?perum=<?php echo $row['id_perum']; ?>#<?php echo $perum; ?>" class="detail-perum" id="detail" data-id="<?php echo $row['id_perum']; ?>">
                                <img src="assets/img/foto_display/<?php echo $row['fot_display']; ?>" alt="PT KANPA Logo" class="img-fluid" />
                            </a>
                            <div class="p-2">
                                <h6 class="mb-0">mulai</h6>
                                <div class="row pl-1">
                                    <h5 class="bg-kanpa text-light border-radius-5px fit-conten font-weight-bold p-1">Rp <?php echo $row['harga']; ?> <sub>jt</sub></h5>
                                    <h6 class="ml-1 font-weight-bold">*<?php echo $row['promo']; ?></h6>
                                </div>
                                <h4 class="font-weight-bold">
                                    <a class="text-dark detail-perum" href="?perum=<?php echo $row['id_perum']; ?>#<?php echo $perum; ?>" id="detail" data-id="<?php echo $row['id_perum']; ?>"><?php echo $row['nm_perum']; ?></a>
                                    <a class="text-dark detail-perum" href="?perum=<?php echo $row['id_perum']; ?>#<?php echo $perum; ?>" id="detail" data-id="<?php echo $row['id_perum']; ?>"> - Tipe mulai
                                        <h4 class="font-weight-bold bor-tip-dash fit-conten">
                                            <?php echo $row['luas_p']; ?>/<?php echo $row['luas_t']; ?>
                                        </h4>
                                    </a>
                                </h4>
                                <p class="font-weight-bold"><?php echo $row['alamat']; ?></p>
                                <div class="row jus-content">
                                    <!-- <div class=""> -->
                                    <center class="m-2">
                                        <img src="assets/img/ikon-display/ru-tamu.png" alt="PT KANPA Logo" class="height-4rem"><br>
                                        <h6><?php echo $row['ru_tamu']; ?></h6>
                                    </center>

                                    <center class="m-2">
                                        <img src="assets/img/ikon-display/ka-tidur.png" alt="PT KANPA Logo" class="height-4rem"><br>
                                        <h6><?php echo $row['ka_tidur']; ?></h6>
                                    </center>

                                    <center class="m-2">
                                        <img src="assets/img/ikon-display/ka-mandi.png" alt="PT KANPA Logo" class="height-4rem"><br>
                                        <h6><?php echo $row['ka_mandi']; ?></h6>
                                    </center>

                                    <center class="m-2">
                                        <img src="assets/img/ikon-display/dapur.png" alt="PT KANPA Logo" class="height-4rem"><br>
                                        <h6><?php echo $row['dapur']; ?></h6>
                                    </center>
                                    <!-- </div> -->
                                </div>
                                <div class="col-12 mb-2">
                                    <center>
                                        <a href="?perum=<?php echo $row['id_perum']; ?>#<?php echo $perum; ?>" class="detail-perum" id="detail" data-id="<?php echo $row['id_perum']; ?>">
                                            <button type="button" class="btn-sm bg-btn-detail text-light detail-perum">Lihat Detail >></button>
                                        </a>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <hr>
        <div class="row mb-5">
            <div class="col-12">
                <div class="gallery js-flickity" data-flickity-options='{ "freeScroll": true }'>
                    <?php
                    $ambil_data = mysqli_query($koneksi, "SELECT *FROM perumahan WHERE perumahan.status_perum = 'Direkomendasikan' ORDER BY id_perum");
                    while ($row = mysqli_fetch_array($ambil_data)) {
                        $id_perum = $row['id_perum'];
                        $nmperum = $row['nm_prum'];
                        $perum = preg_replace("![^a-z0-9]+!i", "-", $nmperum);
                    ?>
                        <div class="gallery-cell">
                            <div class="row">
                                <div class="col-12">
                                    <div class="bg-product">
                                        <?php
                                        $fot_display = mysqli_query($koneksi, "SELECT * FROM tipe WHERE id_tipeperum = $id_perum ORDER BY harga limit 1 ");
                                        while ($foto = mysqli_fetch_array($fot_display)) {
                                        ?>
                                            <a href="?perum=<?php echo $row['id_perum']; ?>#<?php echo $perum; ?>" class="detail-perum" id="detail" data-id="<?php echo $row['id_perum']; ?>">
                                                <img src="assets/img/foto_display/<?php echo $foto['fot_display']; ?>" alt="PT KANPA Logo" class="img-fluid" />
                                            </a>
                                        <?php } ?>
                                        <div class="p-2">
                                            <h6 class="mb-0">mulai</h6>
                                            <div class="row pl-1">
                                                <?php
                                                $harga_terendah = mysqli_query($koneksi, "SELECT * FROM tipe WHERE id_tipeperum = $id_perum ORDER BY harga limit 1 ");
                                                // $harga_terendah = mysqli_query($koneksi, "SELECT MIN(harga) AS harga_terendah, promo FROM tipe WHERE id_tipeperum = $id_perum limit 1 ");
                                                while ($harga = mysqli_fetch_array($harga_terendah)) {
                                                ?>
                                                    <h6 class="bg-price font-weight-bold p-1">Rp <?php echo $harga['harga']; ?> <sub>jt</sub></h6>
                                                    <h6 class="ml-1 font-weight-bold">*<?php echo $harga['promo']; ?></h6>
                                                <?php } ?>
                                            </div>
                                            <h5 class="font-weight-bold">
                                                <a class="text-dark" href="index.php?p=detail&id=<?php echo $row['nm_perum']; ?>"><?php echo $row['nm_perum']; ?></a>
                                                <a class="text-dark" href=""> - Tipe mulai
                                                    <table>
                                                        <tr>
                                                            <?php
                                                            $data_tipe = mysqli_query($koneksi, "SELECT *FROM tipe WHERE id_tipeperum = $id_perum ORDER BY luas_p ASC");
                                                            while ($tipe = mysqli_fetch_array($data_tipe)) {
                                                            ?>
                                                                <td>
                                                                    <h6 class="font-weight-bold bor-tip-dash">
                                                                        <?php echo $tipe['luas_p']; ?>/<?php echo $tipe['luas_t']; ?>
                                                                    </h6>
                                                                </td>
                                                            <?php } ?>
                                                        </tr>
                                                    </table>
                                                </a>
                                            </h5>
                                            <p class="font-weight-bold"><?php echo $row['alamat']; ?></p>
                                            <div class="col-12 mb-2">
                                                <center>
                                                    <a href="?perum=<?php echo $row['id_perum']; ?>#<?php echo $perum; ?>" id="detail" data-id="<?php echo $row['id_perum']; ?>" class="btn-sm bg-btn-detail btn-primary detail-perum">Lihat Detail >></a>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    $(document).ready(function() {
        $('.detail-perum').click(function() {
            var menu = $(this).attr('id');
            var id_detail = $('#id_perum').val();
            setCookie("halaman", 'pages/' + menu + ".php?id_perum=" + id_detail, 30);
            $('.halaman-menu').load(getCookie("halaman"));
        });

        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (30 * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toGMTString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }
    });
</script>