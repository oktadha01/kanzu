<section class="content-header mt-5rem">
    <div class="container-fluid">
        <div class="row">
            <?php
            $ambil_data = mysqli_query($koneksi, "SELECT *FROM perumahan, tipe WHERE perumahan.id_perum = tipe.id_tipeperum");
            while ($row = mysqli_fetch_array($ambil_data)) {
            ?>
                <div class="col-lg-4 col-md-4 col-12 mt-3">
                    <div class="bg-product">
                        <a href="index.php?p=detail&id=<?php echo $row['nm_perum']; ?>">
                            <img src="assets/img/foto_display/<?php echo $row['fot_display']; ?>" alt="PT KANPA Logo" class="img-fluid" />
                        </a>
                        <div class="p-2">
                            <h6 class="mb-0">mulai</h6>
                            <div class="row pl-1">
                                <h5 class="bg-price p-1">Rp <?php echo $row['harga']; ?> <sub>jt</sub></h5>
                                <h6 class="ml-1 font-weight-bold">*<?php echo $row['promo']; ?></h6>
                            </div>
                            <h4 class="font-weight-bold">
                                <a class="text-dark" href="index.php?p=detail&id=<?php echo $row['nm_perum']; ?>"><?php echo $row['nm_perum']; ?> - Tipe mulai
                                    <h4 class="font-weight-bold bor-tip-dash fit-conten">
                                        <?php echo $row['luas_p']; ?>/<?php echo $row['luas_t']; ?>
                                    </h4>
                                </a>
                            </h4>
                            <p class="font-weight-bold"><?php echo $row['alamat']; ?></p>
                            <div class="table-responsive p-0">
                                <table class="table table-head-fixed text-nowrap table-hover">
                                    <thead>
                                        <tr>
                                            <td scope="col" class="text-center">
                                                <div class="">
                                                    <img src="assets/img/taman.png" alt="PT KANPA Logo" class="height-3rem img-circle elevation-3"><br>
                                                    <center>
                                                        <h6 class="mt-1"><?php echo $row['taman']; ?></h6>
                                                    </center>
                                                </div>
                                            </td>
                                            <?php
                                            if ($row['balkon'] == null) { ?>

                                            <?php } else { ?>
                                                <td scope="col" class="text-center">
                                                    <div class="">
                                                        <img src="assets/img/balkon.png" alt="PT KANPA Logo" class="height-3rem img-circle elevation-3"><br>
                                                        <center>
                                                            <h6 class="mt-1"><?php echo $row['balkon']; ?></h6>
                                                        </center>
                                                    </div>
                                                </td>
                                            <?php } ?>
                                            <td scope="col" class="text-center">
                                                <div class="">
                                                    <img src="assets/img/carport2.png" alt="PT KANPA Logo" class="height-3rem img-circle elevation-3"><br>
                                                    <center>
                                                        <h6 class="mt-1"><?php echo $row['carportr']; ?></h6>
                                                    </center>
                                                </div>
                                            </td>
                                            <?php
                                            if ($row['ru_tamu'] == null) { ?>
                                            <?php } else { ?>
                                                <td scope="col" class="text-center">
                                                    <div class="">
                                                        <img src="assets/img/ruang-tamu.png" alt="PT KANPA Logo" class="height-3rem img-circle elevation-3"><br>
                                                        <center>
                                                            <h6 class="mt-1"><?php echo $row['ru_tamu']; ?></h6>
                                                        </center>
                                                    </div>
                                                </td>
                                            <?php } ?>
                                            <td scope="col" class="text-center">
                                                <div class="">
                                                    <img src="assets/img/kamar-tidur.png" alt="PT KANPA Logo" class="height-3rem img-circle elevation-3"><br>
                                                    <center>
                                                        <h6 class="mt-1"><?php echo $row['ka_tidur']; ?></h6>
                                                    </center>
                                                </div>
                                            </td>
                                            <?php
                                            if ($spek['ru_makan'] == null) { ?>
                                            <?php } else { ?>
                                                <td scope="col" class="text-center">
                                                    <div class="">
                                                        <img src="assets/img/r-makan.png" alt="PT KANPA Logo" class="height-3rem img-circle elevation-3"><br>
                                                        <center>
                                                            <h6 class="mt-1"><?php echo $spek['ru_makan']; ?></h6>
                                                        </center>
                                                    </div>
                                                </td>
                                            <?php } ?>
                                            <td scope="col" class="text-center">
                                                <div class="">
                                                    <img src="assets/img/kamar-mandi.png" alt="PT KANPA Logo" class="height-3rem img-circle elevation-3"><br>
                                                    <center>
                                                        <h6 class="mt-1"><?php echo $row['ka_mandi']; ?></h6>
                                                    </center>
                                                </div>
                                            </td>
                                            <td scope="col" class="text-center">
                                                <div class="">
                                                    <img src="assets/img/dapur.png" alt="PT KANPA Logo" class="height-3rem img-circle elevation-3"><br>
                                                    <center>
                                                        <h6 class="mt-1"><?php echo $row['dapur']; ?></h6>
                                                    </center>
                                                </div>
                                            </td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="col-12 mb-2">
                                <center>
                                    <a href="index.php?p=detail&id=<?php echo $row['nm_perum']; ?>" data-id="" class="btn-sm bg-btn-detail btn-primary">Lihat Detail >></a>
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
                $ambil_data = mysqli_query($koneksi, "SELECT *FROM perumahan WHERE perumahan.status_perum = 'Direkomendasikan' ");
                while ($row = mysqli_fetch_array($ambil_data)) {
                    $id_perum = $row['id_perum'];
                ?>
                    <div class="gallery-cell">
                        <div class="row">
                            <div class="col-12">
                                <div class="bg-product">
                                    <a href="index.php?p=detail&id=<?php echo $row['nm_perum']; ?>">
                                        <?php
                                        $fot_display = mysqli_query($koneksi, "SELECT * FROM tipe WHERE id_tipeperum = $id_perum ORDER BY harga limit 1 ");
                                        while ($foto = mysqli_fetch_array($fot_display)) {
                                        ?>
                                            <img src="assets/img/foto_display/<?php echo $foto['fot_display']; ?>" alt="PT KANPA Logo" class="img-fluid" />
                                        <?php } ?>
                                    </a>
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
                                                <a href="index.php?p=detail&id=<?php echo $row['nm_perum']; ?>" data-id="" class="btn-sm bg-btn-detail btn-primary">Lihat Detail >></a>
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