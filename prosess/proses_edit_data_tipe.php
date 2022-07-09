<?php
include '../koneksi.php';

$id_tipe = $_POST['edit-id-tipe'];
$lantai = $_POST['edit-lantai-perum'];
$luas_t = $_POST['edit-luas-t'];
$luas_p = $_POST['edit-luas-p'];
$balkon = $_POST['edit-balkon'];
$taman = $_POST['edit-taman'];
$carportr = $_POST['edit-carportr'];
$ru_tamu = $_POST['edit-ru-tamu'];
$ru_keluarga = $_POST['edit-ru-keluarga'];
$ka_tidur = $_POST['edit-ka-tidur'];
$ka_mandi = $_POST['edit-ka-mandi'];
$dapur = $_POST['edit-dapur'];
$harga = $_POST['edit-harga'];
$promo = $_POST['edit-promo'];

$query1 = "UPDATE tipe SET lantai ='" . $lantai . "', luas_t ='" . $luas_t . "', luas_p ='" . $luas_p . "', balkon ='" . $balkon . "', taman ='" . $taman . "', carportr ='" . $carportr . "', ru_tamu ='" . $ru_tamu . "', ru_keluarga ='" . $ru_keluarga . "', ka_tidur ='" . $ka_tidur . "', ka_mandi ='" . $ka_mandi . "', dapur ='" . $dapur . "',
harga ='" . $harga . "', promo ='" . $promo . "' WHERE id_tipe='" . $id_tipe . "'";
$sql = mysqli_query($koneksi, $query1); // Eksekusi/ Jalankan query dari variabel $query
if ($sql) {
    // $_SESSION["edit-sukses"] = 'Watchlist data has been successfully changed';
    // header("location:../index.php?p=watchlist");
    echo "Proses konfirmasi Berhasil";
} else {
    echo "Proses konfirmasi gagal";
}
