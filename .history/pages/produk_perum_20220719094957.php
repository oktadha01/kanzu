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
        <img src="assets/img/foto_display/' . $row['fot_display'] . '" alt="PT KANPA Logo" class="img-fluid" />
    <div class="p-2">
    <h6 class="mb-0">mulai</h6>
    <div class="row pl-1">
               <h5 class="bg-price p-1">Rp ' . $row['harga'] . ' <sub>jt</sub></h5>
               <h6 class="ml-1 font-weight-bold">' . $row['promo'] . '</h6>
               </div>
               <h4 class="font-weight-bold">
               <a class="text-dark" href="index.php?p=detail&id=' . $row['nm_perum'] . '">' . $row['nm_perum'] . ' - Tipe mulai' . $row['luas_p'] . '/' . $row['luas_t'] . '
               </a>
           </h4>
           <h6>' . $row['alamat'] . '</h6>
           <div class="row jus-content">
               <div class=" m-2">
                   <img src="assets/img/carport2.png" alt="PT KANPA Logo" class="height-3rem img-circle elevation-3"><br>
                   <center>
                       <h6 class="mt-1">' . $row['carportr'] . '</h6>
                       </center>
               </div>
               <div class=" m-2">
                   <img src="assets/img/ruang-tamu.png" alt="PT KANPA Logo" class="height-3rem img-circle elevation-3"><br>
                   <center>
                   <h6 class="mt-1">' . $row['ru_tamu'] . '</h6>
                   </center>
                       </div>
                       <div class=" m-2">
                       <img src="assets/img/kamar-tidur.png" alt="PT KANPA Logo" class="height-3rem img-circle elevation-3"><br>
                       <center>
               <h6 class="mt-1">' . $row['ka_tidur'] . '</h6>
               </center>
               </div>
               <div class=" m-2">
               <img src="assets/img/kamar-mandi.png" alt="PT KANPA Logo" class="height-3rem img-circle elevation-3"><br>
               <center>
               <h6 class="mt-1">' . $row['ka_mandi'] . '</h6>
               </center>
               </div>
               <div class=" m-2">
                   <img src="assets/img/dapur.png" alt="PT KANPA Logo" class="height-3rem img-circle elevation-3"><br>
                   <center>
                   <h6 class="mt-1">' . $row['dapur'] . '</h6>
                   </center>
                   </div>
               <div class="col-12">
               <center>
               <a href="index.php?p=detail&id=' . $row['nm_perum'] . '" data-id="" class="btn-sm bg-btn-detail btn-primary">Lihat Detail >></a>
               </center>
               </div>
           </div>
       </div>
   </div>
   </div>';
    }
}
