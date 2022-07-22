<?php

include "../koneksi.php";
// $connect = new PDO("mysqli:host=localhost;dbname=root", "", "kanpa");
$ambil_data = mysqli_query($koneksi, "SELECT * FROM perumahan, tipe WHERE perumahan.id_perum = tipe.id_tipeperum AND harga BETWEEN '" . $_POST["minimum_range"] . "' AND '" . $_POST["maximum_range"] . "' ORDER BY harga ASC");
$list = mysqli_num_rows($ambil_data);
if ($list == '0') {
    echo '<h4 align="center">Maaf harga tidak tersedia, Silahkan cari harga estimasi lainnya</h4>
            <div class="row">';
} else {

    $query = "SELECT * FROM perumahan, tipe WHERE perumahan.id_perum = tipe.id_tipeperum AND harga BETWEEN '" . $_POST["minimum_range"] . "' AND '" . $_POST["maximum_range"] . "' ORDER BY harga ASC";
    $data = $koneksi->prepare($query);
    $data->execute();
    $res1 = $data->get_result();
    while ($row = $res1->fetch_assoc()) {

        echo '<div class="col-lg-4 col-md-12 col-12 mt-3">
        <div class="bg-product">
                        <a href="index.php?p=detail&id=' . $row['nm_perum'] . '">
                            <img src="assets/img/foto_display/' . $row['fot_display'] . '" alt="PT KANPA Logo" class="img-fluid" />
                        </a>
                        <div class="p-2">
                            <h6 class="mb-0">mulai</h6>
                            <div class="row pl-1">
                                <h5 class="bg-kanpa text-light border-radius-5px fit-conten font-weight-bold p-1">Rp ' . $row['harga'] . ' <sub>jt</sub></h5>
                                <h6 class="ml-1 font-weight-bold">*' . $row['promo'] . '</h6>
                            </div>
                            <h4 class="font-weight-bold">
                                <a class="text-dark" href="index.php?p=detail&id=' . $row['nm_perum'] . '">' . $row['nm_perum'] . ' - Tipe mulai
                                    <h4 class="font-weight-bold bor-tip-dash fit-conten">
                                        ' . $row['luas_p'] . '/' . $row['luas_t'] . '
                                    </h4>
                                </a>
                            </h4>
                            <p class="font-weight-bold">' . $row['alamat'] . '</p>
                            <div class="table-responsive p-0">
                                <table class="table table-head-fixed text-nowrap table-hover">
                                    <thead>
                                        <tr>
                                            <td scope="col" class="text-center">
                                                <img src="assets/img/ikon-display/taman.png" alt="PT KANPA Logo" class="height-4rem"><br>
                                                <center>
                                                    <h6>' . $row['taman'] . '</h6>
                                                </center>
                                            </td>
                                            <td scope="col" class="text-center">
                                                <img src="assets/img/ikon-display/carport.png" alt="PT KANPA Logo" class="height-4rem"><br>
                                                <center>
                                                    <h6>' . $row['carportr'] . '</h6>
                                                </center>
                                            </td>
                                            <td scope="col" class="text-center">
                                                <img src="assets/img/ikon-display/ru-tamu.png" alt="PT KANPA Logo" class="height-4rem"><br>
                                                <center>
                                                    <h6>' . $row['ru_tamu'] . '</h6>
                                                </center>
                                            </td>
                                            <td scope="col" class="text-center">
                                                <img src="assets/img/ikon-display/ka-tidur.png" alt="PT KANPA Logo" class="height-4rem"><br>
                                                <center>
                                                    <h6>' . $row['ka_tidur'] . '</h6>
                                                </center>
                                            </td>
                                            <td scope="col" class="text-center">
                                                <img src="assets/img/ikon-display/ka-mandi.png" alt="PT KANPA Logo" class="height-4rem"><br>
                                                <center>
                                                    <h6>' . $row['ka_mandi'] . '</h6>
                                                </center>
                                            </td>' ;
                                            
                                              if ( $row['dapur'] == NULL)  { 

                                             } else { 
                                                echo' <td scope="col" class="text-center">
                                                    <img src="assets/img/ikon-display/dapur.png" alt="PT KANPA Logo" class="height-4rem"><br>
                                                    <center>
                                                        <h6>' . $row['dapur'] . '</h6>
                                                    </center>
                                                </td>
                                            <?php } ?>
                                            <?php
                                            if ' . ($row['ru_keluarga'] == NULL). ' {  ?>

                                             <?php } else { ?>
                                                <td scope="col" class="text-center">
                                                    <img src="assets/img/ikon-display/ru-keluarga.png" alt="PT KANPA Logo" class="height-4rem"><br>
                                                    <center>
                                                        <h6>' . $row['ru_keluarga'] . '</h6>
                                                    </center>
                                                </td>
                                           <?php } ?>
                                            <?php
                                            if ' . ( $row['ru_makan']  == NULL) . ' { ?>

                                            <?php } else { ?>
                                                <td scope="col" class="text-center">
                                                    <img src="assets/img/ikon-display/ru-makan.png" alt="PT KANPA Logo" class="height-4rem"><br>
                                                    <center>
                                                        <h6>' . $row['ru_makan'] . '</h6>
                                                    </center>
                                                </td>
                                            <?php } ?>
                                            <?php
                                            if ' . ( $row['balkon']  == NULL) . ' { ?>

                                            <?php } else { ?>
                                                <td scope="col" class="text-center">
                                                    <img src="assets/img/ikon-display/balkon.png" alt="PT KANPA Logo" class="height-4rem"><br>
                                                    <center>
                                                        <h6>' . $row['balkon'] . '</h6>
                                                    </center>
                                                </td>
                                           <?php  } ?>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="col-12 mb-2">
                                <center>
                                    <a href="index.php?p=detail&id=' . $row['nm_perum'] . '" data-id="" class="btn-sm bg-btn-detail btn-primary">Lihat Detail >></a>
                                </center>
                            </div>
                        </div>
                    </div>
                    </div>' ;
    }
}
