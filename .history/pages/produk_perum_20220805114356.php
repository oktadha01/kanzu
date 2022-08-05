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
        $nmperum = $row['nm_perum'];
        $perum = preg_replace("![^a-z0-9]+!i", "-", $nmperum);
        echo '<div class="col-lg-4 col-md-12 col-12 mt-3">
        <div class="bg-product">
                        <a href="?perum=' . $row['id_perum'] . '#' . $perum . '" class="detail-perum" id="detail" data-id="' . $row['id_perum'] . '">
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
                            <div class="row jus-content">
                            <!-- <div class=""> -->
                            <center class="m-2">
                                <img src="assets/img/ikon-display/ru-tamu.png" alt="PT KANPA Logo" class="height-4rem"><br>
                                <h6>' . $row['ru_tamu'] . '</h6>
                            </center>

                            <center class="m-2">
                                <img src="assets/img/ikon-display/ka-tidur.png" alt="PT KANPA Logo" class="height-4rem"><br>
                                <h6>' . $row['ka_tidur'] . '</h6>
                            </center>

                            <center class="m-2">
                                <img src="assets/img/ikon-display/ka-mandi.png" alt="PT KANPA Logo" class="height-4rem"><br>
                                <h6>' . $row['ka_mandi'] . '</h6>
                            </center>

                            <center class="m-2">
                                <img src="assets/img/ikon-display/dapur.png" alt="PT KANPA Logo" class="height-4rem"><br>
                                <h6>' . $row['dapur'] . '</h6>
                            </center>
                            <!-- </div> -->
                        </div>
                            <div class="col-12 mb-2">
                            <center>
                            <a href="?perum=' . $row['id_perum'] . '#' . $perum . '" id="detail" data-id="' . $row['id_perum'] . '" class="btn-sm bg-btn-detail btn-primary detail-perum">Lihat Detail >></a>
                        </center>
                            </div>
                        </div>
                    </div>
                    </div>';
    }
}
